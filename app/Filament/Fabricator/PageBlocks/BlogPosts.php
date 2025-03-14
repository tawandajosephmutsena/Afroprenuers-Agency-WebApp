<?php

namespace App\Filament\Fabricator\PageBlocks;

use App\Models\Article;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Builder\Block;

class BlogPosts extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('blog_posts')
            ->schema([
                Grid::make(2)
                    ->schema([
                        TextInput::make('columns')
                            ->label('Columns per row')
                            ->numeric()
                            ->default(3)
                            ->minValue(1)
                            ->maxValue(4),
                        
                        TextInput::make('limit')
                            ->label('Number of posts')
                            ->numeric()
                            ->default(6)
                            ->minValue(1)
                            ->maxValue(12),
                    ]),

                Toggle::make('show_featured_image')
                    ->label('Show Featured Image')
                    ->default(true),

                Toggle::make('show_date')
                    ->label('Show Date')
                    ->default(true),

                Toggle::make('show_excerpt')
                    ->label('Show Excerpt')
                    ->default(true),

                Select::make('order_by')
                    ->label('Order Posts By')
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
        return 'Blog Posts Grid';
    }
}