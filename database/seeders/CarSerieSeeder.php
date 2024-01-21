<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carSeries = [
            [ 'year' => '2010', 'car_model_id' => 1 ],
            [ 'year' => '2011', 'car_model_id' => 1 ],
            [ 'year' => '2012', 'car_model_id' => 2 ],
            [ 'year' => '2013', 'car_model_id' => 2 ],
            [ 'year' => '2013', 'car_model_id' => 3 ],
            [ 'year' => '2015', 'car_model_id' => 3 ],
            [ 'year' => '2010', 'car_model_id' => 4 ],
            [ 'year' => '2011', 'car_model_id' => 4 ],
            [ 'year' => '2012', 'car_model_id' => 5 ],
            [ 'year' => '2013', 'car_model_id' => 5 ],
            [ 'year' => '2013', 'car_model_id' => 6 ],
            [ 'year' => '2015', 'car_model_id' => 6 ],
            [ 'year' => '2010', 'car_model_id' => 7 ],
            [ 'year' => '2011', 'car_model_id' => 7 ],
            [ 'year' => '2012', 'car_model_id' => 8 ],
            [ 'year' => '2013', 'car_model_id' => 8 ],
            [ 'year' => '2013', 'car_model_id' => 9 ],
            [ 'year' => '2015', 'car_model_id' => 9 ],
            [ 'year' => '2010', 'car_model_id' => 10 ],
            [ 'year' => '2011', 'car_model_id' => 10 ],
            [ 'year' => '2012', 'car_model_id' => 11 ],
            [ 'year' => '2013', 'car_model_id' => 11 ],
            [ 'year' => '2013', 'car_model_id' => 12 ],
            [ 'year' => '2015', 'car_model_id' => 12 ],
            [ 'year' => '2010', 'car_model_id' => 13 ],
            [ 'year' => '2011', 'car_model_id' => 13 ],
        ];

        foreach ($carSeries as $carSerie) {
            \App\Models\CarSerie::create($carSerie);
        }
    }
}
