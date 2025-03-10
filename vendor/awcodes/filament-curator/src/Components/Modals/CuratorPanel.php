<?php

namespace Awcodes\Curator\Components\Modals;

use Awcodes\Curator\Components\Forms\Uploader;
use Awcodes\Curator\CuratorPlugin;
use Awcodes\Curator\Models\Media;
use Awcodes\Curator\PathGenerators\Contracts\PathGenerator;
use Awcodes\Curator\Resources\MediaResource;
use Closure;
use Exception;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\View as FormView;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
use Symfony\Component\HttpFoundation\StreamedResponse;

class CuratorPanel extends Component implements HasActions, HasForms
{
    use InteractsWithActions;
    use InteractsWithForms;
    use WithPagination;

    public array $acceptedFileTypes = [];

    public string $context = 'create';

    public ?array $data = [];

    public string $directory = 'media';

    public string $diskName = 'public';

    public ?array $files = [];

    public ?string $imageCropAspectRatio = null;

    public ?string $imageResizeMode = null;

    public ?string $imageResizeTargetWidth = null;

    public ?string $imageResizeTargetHeight = null;

    public bool $isLimitedToDirectory = false;

    public bool | Closure $isTenantAware = true;

    public ?string $tenantOwnershipRelationshipName = null;

    public bool $isMultiple = false;

    public ?int $maxItems = null;

    public ?int $maxSize = null;

    public ?int $maxWidth = null;

    public ?int $minSize = null;

    public ?int $mediaId = null;

    public PathGenerator | string | null $pathGenerator = null;

    public string $search = '';

    public array $selected = [];

    public int $defaultLimit = 25;

    public ?string $modalId = null;

    public ?string $statePath;

    public bool $shouldPreserveFilenames = false;

    public array $types = [];

    public array $validationRules = [];

    public string $visibility = 'public';

    public array $originalFilenames = [];

    public int $currentPage = 0;

    public int $mediaCount = 0;

    public int $lastPage = 0;

    public string $defaultSort = 'desc';

    public ?Media $mediaClass = null;

    public function mount(): void
    {
        $this->form->fill();
        $this->mediaClass = App::make(Media::class);
    }

    #[On('open-modal')]
    public function openModal(string $id, array $settings = []): void
    {
        if ($id === 'curator-panel') {
            $this->acceptedFileTypes = $settings['acceptedFileTypes'];
            $this->defaultSort = $settings['defaultSort'];
            $this->directory = $settings['directory'];
            $this->diskName = $settings['diskName'];
            $this->imageCropAspectRatio = $settings['imageCropAspectRatio'];
            $this->imageResizeMode = $settings['imageResizeMode'];
            $this->imageResizeTargetWidth = $settings['imageResizeTargetWidth'];
            $this->imageResizeTargetHeight = $settings['imageResizeTargetHeight'];
            $this->isLimitedToDirectory = $settings['isLimitedToDirectory'];
            $this->isMultiple = $settings['isMultiple'];
            $this->isTenantAware = $settings['isTenantAware'];
            $this->tenantOwnershipRelationshipName = $settings['tenantOwnershipRelationshipName'];
            $this->maxItems = $settings['maxItems'];
            $this->maxSize = $settings['maxSize'];
            $this->maxWidth = $settings['maxWidth'] ?? 0;
            $this->minSize = $settings['minSize'];
            $this->pathGenerator = $settings['pathGenerator'];
            $this->validationRules = $settings['rules'];
            $this->selected = (array) $settings['selected'];
            $this->shouldPreserveFilenames = $settings['shouldPreserveFilenames'];
            $this->statePath = $settings['statePath'];
            $this->types = $settings['types'];
            $this->visibility = $settings['visibility'];

            $this->files = $this->getFiles();

            $this->form->fill();
        }
    }

    public function form(Form $form): Form
    {
        if ($this->maxItems) {
            $this->validationRules = array_filter($this->validationRules, function ($value) {
                if ($value === 'array' || str_starts_with($value, 'max:')) {
                    return false;
                }

                return true;
            });
        }

        return $form
            ->schema([
                Uploader::make('files_to_add')
                    ->visible(function () {
                        return count($this->selected) !== 1 &&
                            (
                                is_null(Gate::getPolicyFor($this->mediaClass)) ||
                                Gate::allows('create', $this->mediaClass)
                            );
                    })
                    ->hiddenLabel()
                    ->required()
                    ->multiple()
                    ->label(trans('curator::forms.fields.file'))
                    ->preserveFilenames($this->shouldPreserveFilenames)
                    ->maxWidth($this->maxWidth)
                    ->minSize($this->minSize)
                    ->maxSize($this->maxSize)
                    ->rules($this->validationRules)
                    ->acceptedFileTypes($this->acceptedFileTypes)
                    ->disk($this->diskName)
                    ->visibility($this->visibility)
                    ->directory($this->directory)
                    ->pathGenerator($this->pathGenerator)
                    ->imageCropAspectRatio($this->imageCropAspectRatio)
                    ->imageResizeMode($this->imageResizeMode)
                    ->imageResizeTargetWidth($this->imageResizeTargetWidth)
                    ->imageResizeTargetHeight($this->imageResizeTargetHeight)
                    ->storeFileNamesIn('originalFilenames'),
                Group::make([
                    FormView::make('preview')
                        ->view('curator::components.forms.edit-preview', [
                            'file' => Arr::first($this->selected),
                            'actions' => [
                                $this->viewAction(),
                                $this->downloadAction(),
                                $this->destroyAction(),
                            ],
                        ]),
                    ...collect(App::make(MediaResource::class)->getAdditionalInformationFormSchema())
                        ->map(function ($field) {
                            return $field->disabled(function () {
                                return ! CuratorPlugin::get()->authorize('update');
                            });
                        })->toArray(),
                ])->visible(fn () => filled($this->selected) && count($this->selected) === 1),
            ])->statePath('data');
    }

    public function getFiles(int $page = 0, bool $excludeSelected = false): array
    {
        $files = $this->mediaClass->query()
            ->when(filament()->hasTenancy() && $this->isTenantAware, function ($query) {
                return $query->where($this->tenantOwnershipRelationshipName . '_id', filament()->getTenant()->id);
            })
            ->when($this->selected, function ($query, $selected) {
                $selected = collect($selected)->pluck('id')->toArray();

                return $query->whereNotIn('id', $selected);
            })
            ->when($this->isLimitedToDirectory, function ($query) {
                return $query->where('directory', $this->directory);
            })
            ->when($this->types, function ($query) {
                return $query->where(function ($query) {
                    $types = $this->types;
                    $query = $query->whereIn('type', $types);
                    $wildcardTypes = collect($types)->filter(fn ($type) => str_contains($type, '*'));
                    $wildcardTypes?->map(fn ($type) => $query->orWhere('type', 'LIKE', str_replace('*', '%', $type)));
                });
            })
            ->orderBy('created_at', $this->defaultSort);

        $paginator = $files->paginate($this->defaultLimit, page: $page);

        $this->currentPage = $paginator->currentPage();
        $this->mediaCount = $paginator->total();
        $this->lastPage = $paginator->lastPage();

        $items = $paginator->items();

        if (! $excludeSelected && $this->selected) {
            $selected = collect($this->selected)->pluck('id')->toArray();

            $selectedItems = $this->mediaClass
                ->query()
                ->whereIn('id', $selected)
                ->get()
                ->sortBy(function ($model) use ($selected) {
                    return array_search($model->id, $selected);
                });

            array_unshift($items, ...$selectedItems);

            $this->setMediaForm();
            $this->context = count($this->selected) === 1 ? 'edit' : 'create';
        }

        return collect($items)->map(function ($item) {
            return $item->toArray();
        })->toArray();
    }

    public function loadMoreFiles(): void
    {
        if ($this->currentPage === $this->lastPage) {
            return;
        }

        $this->files = [
            ...$this->files,
            ...$this->getFiles($this->currentPage + 1, true),
        ];
    }

    public function addToSelection(int | string $id): void
    {
        $item = collect($this->files)->firstWhere('id', $id);

        if ($this->isMultiple) {
            $this->selected[] = $item;
        } else {
            $this->selected = [$item];
        }

        $this->context = count($this->selected) === 1 ? 'edit' : 'create';
        $this->setMediaForm();
    }

    public function removeFromSelection(int | string $id): void
    {
        $this->selected = collect($this->selected)->reject(function ($selectedItem) use ($id) {
            return $selectedItem['id'] === $id;
        })->toArray();

        $this->context = count($this->selected) === 1 ? 'edit' : 'create';
    }

    public function removeFromFiles(int | string $id): void
    {
        $this->files = collect($this->files)->reject(function ($selectedItem) use ($id) {
            return $selectedItem['id'] === $id;
        })->toArray();

        $this->context = filled($this->selected) ? 'edit' : 'create';
    }

    public function updatedSearch(): void
    {
        $this->files = $this->mediaClass
            ->query()
            ->when($this->isLimitedToDirectory, function ($query) {
                return $query->where('directory', $this->directory);
            })
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('title', 'like', '%' . $this->search . '%')
            ->orWhere('alt', 'like', '%' . $this->search . '%')
            ->orWhere('caption', 'like', '%' . $this->search . '%')
            ->orWhere('description', 'like', '%' . $this->search . '%')
            ->limit(50)
            ->get()
            ->toArray();
    }

    public function setMediaForm(): void
    {
        if (count($this->selected) === 1) {
            $item = $this->mediaClass->find(Arr::first($this->selected)['id']);
            if ($item) {
                $this->form->fill($item->toArray());
            }
        } else {
            $this->form->fill();
        }
    }

    public function addFilesAction(bool $insertAfter = false): Action
    {
        return Action::make('addFiles')
            ->button()
            ->size('sm')
            ->color('primary')
            ->label(trans('curator::views.panel.add_files'))
            ->disabled(function (): bool {
                return count($this->form->getRawState()['files_to_add'] ?? []) === 0;
            })
            ->visible(function () {
                return CuratorPlugin::get()->authorize('create');
            })
            ->action(function () use ($insertAfter): void {
                $media = self::createMediaFiles($this->form->getState());

                $this->form->fill();

                $this->files = [
                    ...$media,
                    ...$this->files,
                ];

                if ($insertAfter) {
                    $this->dispatch(
                        'insert-content',
                        type: 'media',
                        statePath: $this->statePath,
                        media: $media
                    );

                    $this->dispatch('close-modal', id: $this->modalId ?? 'curator-panel');

                    return;
                }

                foreach ($media as $item) {
                    $this->addToSelection($item['id']);
                }
            });
    }

    public function addInsertFilesAction(): Action
    {
        return $this->addFilesAction(true)
            ->name('addInsertFiles')
            ->color('success')
            ->label(__('curator::views.panel.use_selected_image'));
    }

    public function cancelEditAction(): Action
    {
        return Action::make('cancelEdit')
            ->button()
            ->size('sm')
            ->color('gray')
            ->label(trans('curator::views.panel.edit_cancel'))
            ->action(function (): void {
                $this->form->fill();
                $this->selected = [];
                $this->context = 'create';
            });
    }

    public function destroyAction(): Action
    {
        return Action::make('destroy')
            ->label(trans('curator::views.panel.edit_delete'))
            ->color('danger')
            ->icon('heroicon-s-trash')
            ->iconButton()
            ->extraAttributes([
                'style' => 'border: none; margin: 0;',
            ])
            ->requiresConfirmation()
            ->visible(function () {
                return CuratorPlugin::get()->authorize('delete');
            })
            ->action(function (array $arguments): void {
                if (empty($arguments)) {
                    return;
                }

                try {
                    $item = $this->mediaClass->find($arguments['item']['id']);
                    if ($item) {
                        $this->form->fill();
                        $item->delete();
                        $this->selected = [];
                        $this->removeFromFiles($arguments['item']['id']);

                        Notification::make('curator_delete_success')
                            ->success()
                            ->body(trans('curator::notifications.delete_success'))
                            ->send();
                    } else {
                        throw new Exception;
                    }
                } catch (Exception) {
                    Notification::make('curator_delete_error')
                        ->danger()
                        ->body(trans('curator::notifications.delete_error'))
                        ->send();
                }
            });
    }

    public function downloadAction(): Action
    {
        return Action::make('download')
            ->label(trans('curator::views.panel.download'))
            ->icon('heroicon-s-arrow-down-tray')
            ->color('gray')
            ->iconButton()
            ->extraAttributes([
                'style' => 'border: none; margin: 0;',
            ])
            ->visible(function () {
                return CuratorPlugin::get()->authorize('download');
            })
            ->action(function (array $arguments): ?StreamedResponse {
                if (empty($arguments)) {
                    return null;
                }

                return Storage::disk($arguments['item']['disk'])->download($arguments['item']['path']);
            });
    }

    public function insertMediaAction(): Action
    {
        return Action::make('insertMedia')
            ->button()
            ->size('sm')
            ->color('success')
            ->label(trans('curator::views.panel.use_selected_image'))
            ->action(function (): void {
                $this->dispatch(
                    'insert-content',
                    type: 'media',
                    statePath: $this->statePath,
                    media: $this->selected
                );

                $this->dispatch('close-modal', id: $this->modalId ?? 'curator-panel');
            });
    }

    public function updateFileAction(): Action
    {
        return Action::make('updateFile')
            ->button()
            ->size('sm')
            ->color('primary')
            ->label(trans('curator::views.panel.edit_save'))
            ->visible(function () {
                return CuratorPlugin::get()->authorize('update');
            })
            ->action(function (): void {
                try {
                    $item = $this->mediaClass->find(Arr::first($this->selected)['id']);
                    if ($item) {
                        $item->update($this->form->getState());

                        $this->selected = collect($this->selected)->map(function ($selectedItem) use ($item) {
                            if ($selectedItem['id'] === $item->id) {
                                return $item->refresh();
                            }

                            return $selectedItem;
                        })->toArray();

                        Notification::make('curator_update_success')
                            ->success()
                            ->body(trans('curator::notifications.update_success'))
                            ->send();
                    } else {
                        throw new Exception;
                    }
                } catch (Exception) {
                    Notification::make('curator_update_error')
                        ->danger()
                        ->body(trans('curator::notifications.update_error'))
                        ->send();
                }
            });
    }

    public function viewAction(): Action
    {
        return Action::make('view')
            ->label(trans('curator::views.panel.view'))
            ->icon('heroicon-s-eye')
            ->color('gray')
            ->iconButton()
            ->extraAttributes([
                'style' => 'border: none; margin: 0;',
            ])
            ->visible(function () {
                return CuratorPlugin::get()->authorize('view');
            })
            ->url(function (array $arguments): ?string {
                if (empty($arguments)) {
                    return null;
                }

                return $arguments['item']['url'] ?? null;
            }, true);
    }

    public function render(): View
    {
        return view('curator::components.modals.curator-panel');
    }

    protected function createMediaFiles(array $formData): array
    {
        $media = [];

        foreach ($formData['files_to_add'] as $item) {
            // Fix malformed utf-8 characters
            if (! empty($item['exif'])) {
                array_walk_recursive($item['exif'], function (&$entry) {
                    if (! mb_detect_encoding($entry, 'utf-8', true)) {
                        $entry = mb_convert_encoding($entry, 'utf-8');
                    }
                });
            }

            $item['title'] = pathinfo($formData['originalFilenames'][$item['path']] ?? null, PATHINFO_FILENAME);

            $media[] = tap(
                $this->mediaClass->create($item),
                fn (Media $media) => $media->getPrettyName(),
            )->toArray();
        }

        return $media;
    }
}
