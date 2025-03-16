<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterSettingsResource\Pages;
use App\Models\FooterSettings;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Pages\Page;
//use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Filament\Tables\Table;  // Update this import
use Awcodes\Curator\Components\Forms\CuratorPicker;

class FooterSettingsResource extends Resource
{
    protected static ?string $model = FooterSettings::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Site Settings';
    protected static ?string $modelLabel = 'Footer Settings';
    protected static ?string $pluralModelLabel = 'Footer Settings';
    
    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    CuratorPicker::make('logo')
                        ->label('Footer Logo')
                        ->acceptedFileTypes(['image/*'])
                        ->directory('footer')
                        ->maxSize(1024)
                        ->columnSpan('full'),
                    
                    Forms\Components\Repeater::make('resource_links')
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->maxLength(255),
                            Forms\Components\TextInput::make('url')
                                ->url()
                                ->required()
                                ->maxLength(255),
                        ])
                        ->createItemButtonLabel('Add Resource Link')
                        ->columnSpan('full'),
                    
                    Forms\Components\Repeater::make('legal_links')
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required(),
                            Forms\Components\TextInput::make('url')
                                ->url()
                                ->required(),
                        ])
                        ->createItemButtonLabel('Add Legal Link'),
                    
                    Forms\Components\Repeater::make('social_links')
                        ->schema([
                            Forms\Components\Select::make('platform')
                                ->options([
                                    'facebook' => 'Facebook',
                                    'twitter' => 'Twitter',
                                    'github' => 'GitHub',
                                    'discord' => 'Discord',
                                    'dribbble' => 'Dribbble',
                                ])
                                ->required(),
                            Forms\Components\TextInput::make('url')
                                ->url()
                                ->required(),
                        ])
                        ->createItemButtonLabel('Add Social Link'),
                    
                    Forms\Components\TextInput::make('copyright_text')
                        ->label('Copyright Text')
                        ->placeholder('© 2024 Your Company. All Rights Reserved.')
                        ->required()
                        ->maxLength(255)
                        ->columnSpan('full'),
                ])->columns(2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageFooterSettings::route('/'),
        ];
    }
}
