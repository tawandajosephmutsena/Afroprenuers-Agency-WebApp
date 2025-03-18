<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterSettingsResource\Pages;
use App\Models\FooterSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Awcodes\Curator\Components\Forms\CuratorPicker;

class FooterSettingsResource extends Resource
{
    protected static ?string $model = FooterSettings::class;
    protected static ?string $navigationIcon = 'heroicon-o-cog';
    protected static ?string $navigationGroup = 'Site Settings';
    protected static ?string $modelLabel = 'Footer Settings';
    protected static ?string $pluralModelLabel = 'Footer Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Branding')
                    ->description('Manage your footer logo')
                    ->schema([
                        CuratorPicker::make('logo')
                            ->label('Footer Logo')
                            ->acceptedFileTypes(['image/*'])
                            ->directory('footer')
                            ->maxSize(1024)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Resource Links')
                    ->description('Manage resource links in the footer')
                    ->schema([
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
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Legal Links')
                    ->description('Manage legal links in the footer')
                    ->schema([
                        Forms\Components\Repeater::make('legal_links')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required(),
                                Forms\Components\TextInput::make('url')
                                    ->url()
                                    ->required(),
                            ])
                            ->createItemButtonLabel('Add Legal Link')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Social Media Links')
                    ->description('Add your social media profile links')
                    ->schema([
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
                            ->createItemButtonLabel('Add Social Link')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Footer Content')
                    ->description('Manage your website footer content')
                    ->schema([
                        Forms\Components\TextInput::make('copyright_text')
                            ->label('Copyright Text')
                            ->placeholder('© 2024 Your Company. All Rights Reserved.')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
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
