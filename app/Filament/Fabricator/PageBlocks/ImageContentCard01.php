<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class ImageContentCard01 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('image-content-card01')
            ->schema([
                CuratorPicker::make('image')
                ->label('image')
                ->buttonLabel('Choose image')
                ->required(),
            TextInput::make('image_alt')
                ->label('Alt Text')
                ->required(),

                TextInput::make('heading')
                ->label('Title')
                ->required(),
                TextInput::make('subheading')
                ->label('Subtitle')
                ->required(),
                Textarea::make('button'),
                Textarea::make('button_link'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}