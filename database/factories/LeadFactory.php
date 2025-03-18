<?php

namespace Database\Factories;

use App\Models\Lead;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadFactory extends Factory
{
    protected $model = Lead::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->unique()->companyEmail(),
            'phone' => $this->faker->phoneNumber(),
            'source' => $this->faker->randomElement(['website', 'referral', 'social_media', 'direct']),
            'status' => $this->faker->randomElement(['new', 'contacted', 'qualified', 'proposal', 'negotiation', 'won', 'lost']),
            'description' => $this->faker->paragraph(),
            'assigned_to' => User::factory(),
        ];
    }
}