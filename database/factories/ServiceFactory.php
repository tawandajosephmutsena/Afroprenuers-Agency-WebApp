<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->words(3, true),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 100, 10000),
            'duration' => $this->faker->numberBetween(1, 90),
            'service_type' => $this->faker->randomElement(['SEO', 'Branding', 'Social Media', 'Web Development', 'Content Marketing']),
            'target_audience' => $this->faker->randomElement(['SMEs', 'Startups', 'Enterprise', 'Local Business', 'E-commerce']),
            'deliverables' => $this->faker->paragraphs(2, true),
            'status' => $this->faker->boolean(80), // 80% chance of being active
        ];
    }
}