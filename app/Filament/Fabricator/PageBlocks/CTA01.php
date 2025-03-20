<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class CTA01 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('c-t-a01')
            ->schema([
                TextInput::make('heading')
                ->label('Title')
                ->required(),
                TextInput::make('subheading')
                ->label('Subtitle')
                ->required(),
                Textarea::make('button'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}