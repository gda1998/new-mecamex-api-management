<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceDetail>
 */
class ServiceDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'service_id' => \App\Models\Service::inRandomOrder()->first(),
            'applied_service_id' => \App\Models\AppliedService::inRandomOrder()->first(),
            'cost' => fake()->randomFloat(2, 1, 1000),
        ];
    }
}
