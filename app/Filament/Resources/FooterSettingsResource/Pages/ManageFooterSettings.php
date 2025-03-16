<?php

namespace App\Filament\Resources\FooterSettingsResource\Pages;

use App\Filament\Resources\FooterSettingsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageFooterSettings extends ManageRecords
{
    protected static string $resource = FooterSettingsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}