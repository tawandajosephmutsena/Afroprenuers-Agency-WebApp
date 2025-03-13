<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class clientLogo extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('clientlogo')
            ->schema([
                TextInput::make('heading')
                    ->label('Title')
                    ->required(),
                Repeater::make('clientLogos')  // Changed from 'clientlogo' to 'clientLogos'
                    ->label('Client Logos')
                    ->schema([
                        CuratorPicker::make('logo')
                            ->label('Logo')
                            ->buttonLabel('Choose Logo')
                            ->required(),
                        TextInput::make('alt')
                            ->label('Alt Text')
                            ->required(),
                    ])
                    ->required()
            ]);
    }
}
