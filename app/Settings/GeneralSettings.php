<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public ?string $site_logo = null;
    public ?string $site_favicon = null;
    public ?string $site_name = null;
    public ?string $site_description = null;

    // Group the settings to make it manageable and distinguishable
    public static function group(): string
    {
        return 'general';
    }
}