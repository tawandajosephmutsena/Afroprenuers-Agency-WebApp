<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class OurTeam01 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('our-team01')
            ->schema([
                TextInput::make('heading')
                    ->label('Section Heading')
                    ->default('Our Team')
                    ->required(),
                RichEditor::make('description')
                    ->label('Section Description')
                    ->default('Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind'),
                Repeater::make('team_members')
                    ->schema([
                        CuratorPicker::make('image')
                            ->label('Member Photo')
                            ->required(),
                        TextInput::make('name')
                            ->label('Full Name')
                            ->required(),
                        TextInput::make('position')
                            ->label('Job Position')
                            ->required(),
                        RichEditor::make('description')
                            ->label('Member Description')
                            ->required(),
                        TextInput::make('facebook_url')
                            ->label('Facebook URL')
                            ->url(),
                        TextInput::make('twitter_url')
                            ->label('Twitter URL')
                            ->url(),
                        TextInput::make('github_url')
                            ->label('GitHub URL')
                            ->url(),
                        TextInput::make('dribbble_url')
                            ->label('Dribbble URL')
                            ->url(),
                    ])
                    ->defaultItems(4)
                    ->collapsible()                  
                    ->label('Team Members')
                    ->required(),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}