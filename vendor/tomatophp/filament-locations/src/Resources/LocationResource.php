<?php

namespace TomatoPHP\FilamentLocations\Resources;

use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use TomatoPHP\FilamentLocations\Models\Location;
use TomatoPHP\FilamentLocations\Resources\LocationResource\Pages;

class LocationResource extends Resource
{
    protected static ?string $model = Location::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-americas';

    public static function getNavigationGroup(): ?string
    {
        return trans('filament-locations::messages.group');
    }

    public static function getNavigationLabel(): string
    {
        return trans('filament-locations::messages.location.title');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('country_id')
                    ->label(trans('filament-locations::messages.location.form.country_id'))
                    ->options(function () {
                        return \TomatoPHP\FilamentLocations\Models\Country::all()->pluck('name', 'id')->toArray();
                    })
                    ->searchable()
                    ->live(),
                Select::make('city_id')
                    ->label(trans('filament-locations::messages.location.form.city_id'))
                    ->options(function (Get $get) {
                        return \TomatoPHP\FilamentLocations\Models\City::where('country_id', $get('country_id'))
                            ->get()
                            ->pluck('name', 'id')
                            ->toArray();
                    })
                    ->searchable()
                    ->live(),
                Select::make('area_id')
                    ->label(trans('filament-locations::messages.location.form.area_id'))
                    ->options(function (Get $get) {
                        return \TomatoPHP\FilamentLocations\Models\Area::where('city_id', $get('city_id'))
                            ->get()
                            ->pluck('name', 'id')
                            ->toArray();
                    })
                    ->searchable(),
                Forms\Components\TextInput::make('street')
                    ->label(trans('filament-locations::messages.location.form.street'))
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('home_number')
                    ->label(trans('filament-locations::messages.location.form.home_number'))
                    ->numeric(),
                Forms\Components\TextInput::make('flat_number')
                    ->label(trans('filament-locations::messages.location.form.flat_number'))
                    ->numeric(),
                Forms\Components\TextInput::make('floor_number')
                    ->label(trans('filament-locations::messages.location.form.floor_number'))
                    ->numeric(),
                Forms\Components\TextInput::make('mark')
                    ->label(trans('filament-locations::messages.location.form.mark'))
                    ->maxLength(255),
                Forms\Components\Textarea::make('map_url')
                    ->label(trans('filament-locations::messages.location.form.map_url'))
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('note')
                    ->label(trans('filament-locations::messages.location.form.note'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('lat')
                    ->label(trans('filament-locations::messages.location.form.lat'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('lng')
                    ->label(trans('filament-locations::messages.location.form.lng'))
                    ->maxLength(255),
                Forms\Components\TextInput::make('zip')
                    ->label(trans('filament-locations::messages.location.form.zip'))
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_main')
                    ->label(trans('filament-locations::messages.location.form.is_main')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('area.name')
                    ->label(trans('filament-locations::messages.location.form.area_id'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('city.name')
                    ->label(trans('filament-locations::messages.location.form.city_id'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('country.name')
                    ->label(trans('filament-locations::messages.location.form.country_id'))
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('street')
                    ->label(trans('filament-locations::messages.location.form.street'))
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_main')
                    ->label(trans('filament-locations::messages.location.form.is_main'))
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(trans('filament-locations::messages.country.form.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label(trans('filament-locations::messages.country.form.updated_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\Filter::make('created_at')
                    ->form([
                        Select::make('country_id')
                            ->label(trans('filament-locations::messages.location.form.country_id'))
                            ->options(function () {
                                return \TomatoPHP\FilamentLocations\Models\Country::all()->pluck('name', 'id')->toArray();
                            })
                            ->searchable()
                            ->live(),
                        Select::make('city_id')
                            ->label(trans('filament-locations::messages.location.form.city_id'))
                            ->options(function (Get $get) {
                                return \TomatoPHP\FilamentLocations\Models\City::where('country_id', $get('country_id'))
                                    ->get()
                                    ->pluck('name', 'id')
                                    ->toArray();
                            })
                            ->searchable()
                            ->live(),
                        Select::make('area_id')
                            ->label(trans('filament-locations::messages.location.form.area_id'))
                            ->options(function (Get $get) {
                                return \TomatoPHP\FilamentLocations\Models\Area::where('city_id', $get('city_id'))
                                    ->get()
                                    ->pluck('name', 'id')
                                    ->toArray();
                            })
                            ->searchable(),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        if (isset($data['country_id']) && ! empty($data['country_id'])) {
                            $query->where('country_id', $data['country_id']);
                        }
                        if (isset($data['city_id']) && ! empty($data['city_id'])) {
                            $query->where('city_id', $data['city_id']);
                        }
                        if (isset($data['area_id']) && ! empty($data['area_id'])) {
                            $query->where('area_id', $data['area_id']);
                        }

                        return $query;
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLocations::route('/'),
        ];
    }
}
