<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceStatusHistory>
 */
class ServiceStatusHistoryFactory extends Factory
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
            'status_id' => \App\Models\ServiceStatus::inRandomOrder()->first(),
        ];
    }
}
