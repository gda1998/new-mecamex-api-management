<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AcquisitionDetail>
 */
class AcquisitionDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'acquisition_id' => \App\Models\Acquisition::inRandomOrder()->first(),
            'product_id' => \App\Models\Product::inRandomOrder()->first(),
            'quantity' => fake()->numberBetween(1, 100),
            'price' => fake()->randomFloat(2, 1, 1000),
        ];
    }
}
