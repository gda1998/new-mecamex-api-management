<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->numerify('Service ####'),
            'slug' => fake()->slug(3),
            'description' => fake()->sentence(),
            'current_cost' => fake()->randomFloat(2, 1, 1000),
        ];
    }
}
