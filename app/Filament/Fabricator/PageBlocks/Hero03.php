<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Forms\Components\Textarea;

class Hero03 extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('hero03')
            ->schema([
                TextInput::make('topButtonLink')->label('Top Button Link') ->url(),
                TextInput::make('topbutton')->label('Top Button Text'),
                TextInput::make('title')->label('Title'),
                Textarea::make('content') ->rows(2),
                TextInput::make('button01Link')->label('Button 01 Link') ->url(),
                TextInput::make('button01') ->label('Button 01 text'),
               
                TextInput::make('title02') ->label('Title 02'),
                
                Repeater::make('partnerLogos')  
                    ->label('Partner Logos')
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

    public static function mutateData(array $data): array
    {
        return $data;
    }
}