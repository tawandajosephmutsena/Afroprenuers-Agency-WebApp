<?php

namespace App\Filament\Resources\FooterSettingsResource\Pages;

use App\Filament\Resources\FooterSettingsResource;
use App\Models\FooterSettings;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class ManageFooterSettings extends EditRecord
{
    protected static string $resource = FooterSettingsResource::class;

    public function mount(string|int $record = null): void
    {
        $record = $this->getRecord();
        parent::mount($record->id);
    }

    public function getRecord(): Model
    {
        return FooterSettings::firstOrCreate(
            [],
            [
                'copyright_text' => '© ' . date('Y') . ' Your Company Name. All rights reserved.',
            ]
        );
    }
}