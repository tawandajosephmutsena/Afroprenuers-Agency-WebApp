<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    protected $model = Project::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->catchPhrase(),
            'description' => $this->faker->paragraph(),
            'start_date' => $this->faker->dateTimeBetween('-1 month', '+1 month'),
            'end_date' => $this->faker->dateTimeBetween('+2 months', '+6 months'),
            'progress' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->randomElement(['planning', 'in_progress', 'on_hold', 'completed']),
        ];
    }
}