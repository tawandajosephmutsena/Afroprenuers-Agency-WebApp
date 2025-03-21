<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Illuminate\Database\Eloquent\Builder;

class InfoSection01 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('info-section01')
            ->schema([
                TextInput::make('heading')->label('Title')->required(),
                Textarea::make('subhearding'),
                Textarea::make('content') ->rows(2),
                
                    CuratorPicker::make('image')
                    ->label('image')
                    ->buttonLabel('Choose image')
                    ->required(),
                TextInput::make('image_alt')
                    ->label('Alt Text')
                    ->required(),

                    CuratorPicker::make('image2')
                    ->label('image')
                    ->buttonLabel('Choose second image')
                    ->required(),
                TextInput::make('image_alt2')
                    ->label('Alt Text')
                    ->required(),
            
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}