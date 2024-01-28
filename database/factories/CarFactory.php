<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_plate' => fake()->isbn10(),
            'car_serie_id' => \App\Models\CarSeries::inRandomOrder()->first(),
            'owner_id' => \App\Models\User::inRandomOrder()->where('role_id', 4)->first(), // 4 = Client role
        ];
    }
}
