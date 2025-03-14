<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Service;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Builder\Block;

class ServicesList extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('services_list')
            ->schema([
                Grid::make(2)
                    ->schema([
                        TextInput::make('limit')
                            ->label('Number of services')
                            ->numeric()
                            ->default(6)
                            ->minValue(1)
                            ->maxValue(12),
                    ]),

                Toggle::make('show_image')
                    ->label('Show Service Image')
                    ->default(true),

                Toggle::make('show_price')
                    ->label('Show Price')
                    ->default(true),

                Toggle::make('show_description')
                    ->label('Show Description')
                    ->default(true),

                Select::make('order_by')
                    ->label('Order Services By')
                    ->options([
                        'latest' => 'Latest First',
                        'oldest' => 'Oldest First',
                        'random' => 'Random',
                    ])
                    ->default('latest'),
            ]);
    }

    public static function getBlockLabel(): string
    {
        return 'Services List';
    }
}