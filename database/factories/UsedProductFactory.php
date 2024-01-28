<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsedProduct>
 */
class UsedProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'applied_service_id' => \App\Models\AppliedService::inRandomOrder()->first(),
            'product_id' => \App\Models\Product::inRandomOrder()->first(),
            'quantity' => fake()->randomNumber(3),
            'price' => fake()->randomFloat(2, 1, 1000),
            'used_at' => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
