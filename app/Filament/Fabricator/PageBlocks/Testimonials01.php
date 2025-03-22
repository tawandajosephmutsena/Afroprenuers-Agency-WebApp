<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class Testimonials01 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('testimonials01')
            ->schema([
                TextInput::make('heading')
                    ->label('Section Heading')
                    ->default('What our customers say')
                    ->required(),
                Textarea::make('description')
                    ->label('Section Description')
                    ->default('Read what our valued customers have to say about their experience with us.')
                    ->required(),
                Repeater::make('testimonials')
                    ->schema([
                        TextInput::make('title')
                            ->label('Testimonial Title')
                            ->required(),
                        Textarea::make('content')
                            ->label('Testimonial Content')
                            ->required(),
                        CuratorPicker::make('image')
                            ->label('Profile Picture')
                            ->required(),
                        TextInput::make('name')
                            ->label('Person Name')
                            ->required(),
                        TextInput::make('position')
                            ->label('Job Position')
                            ->required(),
                        TextInput::make('company')
                            ->label('Company Name')
                            ->required(),
                    ])
                    ->defaultItems(4)
                    ->collapsible()
                    ->label('Testimonials')
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}