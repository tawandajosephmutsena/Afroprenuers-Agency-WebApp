<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Models\Media;

class Gallery01 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('gallery01')
            ->schema([
                Repeater::make('columns')
                    ->schema([
                        Repeater::make('images')
                            ->schema([
                                CuratorPicker::make('image')
                                    ->label('Gallery Image')
                                    ->required(),
                                TextInput::make('alt')
                                    ->label('Alt Text')
                                    ->required(),
                            ])
                            ->defaultItems(3)
                            ->maxItems(3)
                            ->columns(2)
                    ])
                    ->defaultItems(4)
                    ->maxItems(4)
                    ->columnSpanFull()
            ]);
    }

    public static function mutateData(array $data): array
    {
        $columns = $data['columns'] ?? [];
        
        foreach ($columns as &$column) {
            if (isset($column['images'])) {
                foreach ($column['images'] as &$image) {
                    if (isset($image['image'])) {
                        $mediaItem = Media::find($image['image']);
                        $image['image_url'] = $mediaItem ? url('storage/' . $mediaItem->path) : '';
                    }
                }
            }
        }

        return [
            'columns' => $columns,
        ];
    }
}