<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->numerify('Product #####'),
            'slug' => fake()->slug(2),
            'description' => fake()->sentence(),
            'current_price' => fake()->randomFloat(2, 1, 1000),
            'stock' => fake()->numberBetween(1, 200),
            'image' => fake()->filePath(),
        ];
    }
}
