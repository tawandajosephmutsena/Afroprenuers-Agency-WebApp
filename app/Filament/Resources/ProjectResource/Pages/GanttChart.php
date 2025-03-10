<?php

namespace App\Filament\Resources\ProjectResource\Pages;

use App\Filament\Resources\ProjectResource;
use Filament\Resources\Pages\Page;
use Illuminate\Support\Facades\Log;
use Filament\Resources\Pages\PageRegistration;
use Filament\Panel;
use Illuminate\Support\Facades\Route;

class GanttChart extends Page
{
    protected static string $resource = ProjectResource::class;

    protected static string $view = 'filament.resources.project-resource.pages.gantt-chart';

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static ?string $navigationLabel = 'Gantt Chart';

    protected static ?int $navigationSort = 3;

    public static function getUrl(array $parameters = [], bool $isAbsolute = true, ?string $panel = null, ?\Illuminate\Database\Eloquent\Model $tenant = null): string
    {
        return parent::getUrl($parameters, $isAbsolute, $panel, $tenant);
    }

    public static function route(string $path): PageRegistration
    {
        return parent::route($path);
    }

    public function mount(): void
    {
        // Check for both project viewing and gantt chart permissions
$user = \Illuminate\Support\Facades\Auth::user();
        if (!$user || !$user->can('view_any_project') || !$user->can('view_gantt_chart')) {
            Log::warning('User denied access to Gantt chart. User: ' . ($user ? $user->email : 'null'));
            abort(403);
        }

        Log::info('User accessed Gantt chart: ' . $user->email);
    }

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getHeaderWidgets(): array
    {
        return [];
    }
}
