<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TagResource\Pages;

use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TagResource extends Resource
{
    protected static ?string $model = Tag::class;
protected static ?string $navigationGroup = 'Articles and Media';
protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make("name")
                ->required()
                ->maxLength(255)
                ->live(onBlur: true)
                ->afterStateUpdated(
                    fn(
                        string $operation,
                        $state,
                        Forms\Set $set
                    ) => $operation === "create"
                        ? $set("slug", \Str::slug($state))
                        : null
                ),

            Forms\Components\TextInput::make("slug")
                ->required()
                ->maxLength(255)
                ->unique(Tag::class, "slug", ignoreRecord: true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make("name")
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make("slug")
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make("created_at")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make("updated_at")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            "index" => Pages\ListTags::route("/"),
            "create" => Pages\CreateTag::route("/create"),
            "edit" => Pages\EditTag::route("/{record}/edit"),
        ];
    }
}