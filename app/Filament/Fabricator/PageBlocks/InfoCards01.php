<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;

class InfoCards01 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('info-cards01')
            ->schema([
                TextInput::make('category1')
                ->label('category')
                ->required(),
                TextInput::make('heading1')
                ->label('Main Title')
                ->required(),
                TextInput::make('subheading1')
                ->label('Subtitle')
                ->required(),
                Textarea::make('button1'),
                TextInput::make('button1Link'),

                TextInput::make('category2')
                ->label('category')
                ->required(),
                TextInput::make('heading2')
                ->label('2nd section Main Title')
                ->required(),
                TextInput::make('subheading2')
                ->label('Subtitle')
                ->required(),
                Textarea::make('button2'),
                TextInput::make('button2_link'),

                TextInput::make('category3')
                ->label('category')
                ->required(),
                TextInput::make('heading3')
                ->label('3rd section Main Title')
                ->required(),
                TextInput::make('subheading3')
                ->label('Subtitle')
                ->required(),
                Textarea::make('button3'),
                TextInput::make('button3_link'),
               
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}