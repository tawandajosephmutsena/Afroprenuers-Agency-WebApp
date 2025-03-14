<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Builder\Block;

class Footer extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('footer')
            ->schema([
                FileUpload::make('footerLogo')
                    ->image()
                    ->directory('footer'),
                
                TextInput::make('footerText')
                    ->label('Footer Text')
                    ->required(),

                Repeater::make('socialLinks')
                    ->schema([
                        TextInput::make('url')
                            ->required()
                            ->url(),
                        TextInput::make('icon')
                            ->label('Icon HTML')
                            ->required(),
                    ])
                    ->collapsible(),

                Repeater::make('menuItems')
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        Repeater::make('items')
                            ->schema([
                                TextInput::make('label')
                                    ->required(),
                                TextInput::make('url')
                                    ->required(),
                            ]),
                    ])
                    ->collapsible(),

                TextInput::make('copyrightText')
                    ->label('Copyright Text')
                    ->required(),
            ]);
    }

    public static function getBlockLabel(): string
    {
        return 'Footer';
    }
}