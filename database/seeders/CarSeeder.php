<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->isOnLocal() && $this->count = 100;
        \App\Models\Car::factory()->count($this->count)->create();
    }
}
