<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    protected $model = Task::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'status' => $this->faker->randomElement(['todo', 'in_progress', 'review', 'completed']),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high', 'urgent']),
            'due_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'completed_at' => null,
            'order' => $this->faker->numberBetween(0, 100),
            'progress' => $this->faker->numberBetween(0, 100),
            'attachments' => null,
        ];
    }
}