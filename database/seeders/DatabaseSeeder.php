<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Run Shield seeder first
        $this->call([
            ShieldSeeder::class,
            DemoDataSeeder::class,
            CurrencySeeder::class,
        ]);
    }
}
