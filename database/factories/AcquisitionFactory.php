<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Acquisition>
 */
class AcquisitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'acquired_at' => fake()->dateTimeBetween('-1 year', 'now'),
            'document' => fake()->filePath(),
            'created_by' => \App\Models\User::inRandomOrder()->where('role_id', 2)->first(), // 2 = Storer role
        ];
    }
}
