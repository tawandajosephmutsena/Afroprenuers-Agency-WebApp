<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    public function run(): void
    {
        $currencies = [
            [
                'id' => 147,  // Match the ID being used
                'name' => 'US Dollar',
                'code' => 'USD',
                'symbol' => '$',
                'is_default' => true,
                'exchange_rate' => 1.0000,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more currencies if needed
        ];

        DB::table('currencies')->insert($currencies);
    }
}
