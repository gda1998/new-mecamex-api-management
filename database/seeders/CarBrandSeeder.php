<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carBrands = [
            [ 'name' => 'Audi', 'car_type_id' => 1 ],
            [ 'name' => 'BMW', 'car_type_id' => 1 ],
            [ 'name' => 'Chevrolet', 'car_type_id' => 1 ],
            [ 'name' => 'Ford', 'car_type_id' => 1 ],
            [ 'name' => 'Fiat', 'car_type_id' => 1 ],
            [ 'name' => 'Honda', 'car_type_id' => 1 ],
            [ 'name' => 'Hyundai', 'car_type_id' => 1 ],
            [ 'name' => 'Mazda', 'car_type_id' => 1 ],
            [ 'name' => 'Mitsubishi Motors', 'car_type_id' => 1 ],
            [ 'name' => 'MG', 'car_type_id' => 1 ],
            [ 'name' => 'Nissan', 'car_type_id' => 1 ],
            [ 'name' => 'Renault', 'car_type_id' => 1 ],
            [ 'name' => 'Suzuki', 'car_type_id' => 1 ],
            [ 'name' => 'Toyota', 'car_type_id' => 1 ],
            [ 'name' => 'Volkswagen', 'car_type_id' => 1 ],
            [ 'name' => 'DAF', 'car_type_id' => 2 ],
            [ 'name' => 'Foton', 'car_type_id' => 2 ],
            [ 'name' => 'Peterbilt', 'car_type_id' => 2 ],
            [ 'name' => 'Scania', 'car_type_id' => 2 ],
            [ 'name' => 'Tata', 'car_type_id' => 2 ],
            [ 'name' => 'UD trucks', 'car_type_id' => 2 ],
        ];

        foreach ($carBrands as $carBrand) {
            \App\Models\CarBrand::create($carBrand);
        }
    }
}
