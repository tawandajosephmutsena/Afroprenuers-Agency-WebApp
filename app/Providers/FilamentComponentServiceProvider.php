<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Facades\Filament;

class FilamentComponentServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Filament::registerRenderHook(
            'scripts.start',
            function () {
                return '<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>';
            }
        );
    }

    public function register()
    {
        //
    }
}