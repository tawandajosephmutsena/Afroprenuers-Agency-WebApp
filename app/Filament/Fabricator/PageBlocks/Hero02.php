<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class Hero02 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero02')
            ->schema([
                TextInput::make('heading')->label('Title')->required(),
                Textarea::make('content') ->rows(2),
                Textarea::make('button_text')->label('Button 01'),
                Textarea::make('button_text2')->label('Button 02'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}