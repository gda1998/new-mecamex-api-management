<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AppliedService>
 */
class AppliedServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'car_id' => \App\Models\Car::inRandomOrder()->first(),
            'applied_by' => \App\Models\User::inRandomOrder()->where('role_id', 3)->first(), // 3 = Mechanic role
            'start_date' => fake()->dateTimeBetween('-1 week', 'now'),
            'end_date' => fake()->dateTimeBetween('now', '+1 week'),
        ];
    }
}
