<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Textarea;

class PriceLists01 extends PageBlock
{
   
 
    public static function getBlockSchema(): Block
    {
        return Block::make('price-lists01')
            ->schema([
                TextInput::make('heading')
                    ->label('Main Heading')
                    ->required(),
                    Textarea::make('description')
                    ->label('Main Description')
                    ->required(),
                Repeater::make('pricing_cards')
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('description')
                            ->required(),
                        TextInput::make('price')
                            ->required()
                            ->numeric(),
                        TextInput::make('period')
                            ->default('month')
                            ->required(),
                        Repeater::make('features')
                            ->schema([
                                TextInput::make('feature')
                                    ->required(),
                                TextInput::make('feature_highlight')
                                    ->label('Feature Highlight (Optional)')
                            ])
                            ->defaultItems(5)
                            ->collapsible(),
                        TextInput::make('button_text')
                            ->default('Get started')
                            ->required(),
                        TextInput::make('button_link')
                            ->default('#')
                            ->required(),
                    ])
                    ->defaultItems(3)
                    ->collapsible()
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}