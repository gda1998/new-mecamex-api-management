<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carTypes = [
            ['name' => 'Car | Auto'],
            ['name' => 'Truck | Tráiler'],
            ['name' => 'Motorcycle | Motocicleta'],
            ['name' => 'Van | Camioneta'],
            ['name' => 'Bus | Autobús'],
            ['name' => 'Pickup | Camioneta de carga'],
            ['name' => 'SUV | Camioneta deportiva'],
            ['name' => 'Other | Otro'],
        ];

        foreach ($carTypes as $carType) {
            \App\Models\CarType::create($carType);
        }
    }
}
