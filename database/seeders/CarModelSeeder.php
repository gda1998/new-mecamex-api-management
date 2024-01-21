<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carModels = [
            [ 'name' => 'Jetta', 'car_brand_id' => 15 ],
            [ 'name' => 'Golf', 'car_brand_id' => 15 ],
            [ 'name' => 'Sentra', 'car_brand_id' => 11 ],
            [ 'name' => 'Versa', 'car_brand_id' => 11 ],
            [ 'name' => 'Civic', 'car_brand_id' => 6 ],
            [ 'name' => 'Accord', 'car_brand_id' => 6 ],
            [ 'name' => 'Cruze', 'car_brand_id' => 3 ],
            [ 'name' => 'Spark', 'car_brand_id' => 3 ],
            [ 'name' => 'Fiesta', 'car_brand_id' => 4 ],
            [ 'name' => 'Focus', 'car_brand_id' => 4 ],
            [ 'name' => 'Uno', 'car_brand_id' => 5 ],
            [ 'name' => 'Mobi', 'car_brand_id' => 5 ],
            [ 'name' => 'Clio', 'car_brand_id' => 12 ],
            [ 'name' => 'Kwid', 'car_brand_id' => 12 ],
            [ 'name' => 'Yaris', 'car_brand_id' => 14 ],
            [ 'name' => 'Corolla', 'car_brand_id' => 14 ],
            [ 'name' => 'Vento', 'car_brand_id' => 15 ],
            [ 'name' => 'Polo', 'car_brand_id' => 15 ],
            [ 'name' => 'Aveo', 'car_brand_id' => 3 ],
            [ 'name' => 'Sonic', 'car_brand_id' => 3 ],
            [ 'name' => 'March', 'car_brand_id' => 11 ],
            [ 'name' => 'Kicks', 'car_brand_id' => 11 ],
            [ 'name' => 'Tsuru', 'car_brand_id' => 11 ],
            [ 'name' => 'Altima', 'car_brand_id' => 11 ],
            [ 'name' => 'Tiida', 'car_brand_id' => 11 ],
            [ 'name' => 'Tida', 'car_brand_id' => 11 ],
        ];

        foreach ($carModels as $carModel) {
            \App\Models\CarModel::create($carModel);
        }
    }
}
