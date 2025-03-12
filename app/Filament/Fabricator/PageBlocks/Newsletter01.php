<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
class Newsletter01 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('newsletter01')
            ->schema([
                TextInput::make('heading')->label('Title')->required(),
                Textarea::make('content') ->rows(2),
                Textarea::make('button_text'),
                Textarea::make('privacy_text'),
                TextInput::make('privacy_url')->url(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}