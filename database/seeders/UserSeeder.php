<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // if (App::environment('local', 'development')) {
        //     echo 'Ejecutando los seeders para desarrollo';
        // }
        // if (App::environment('testing')) {
        //     echo 'Ejecutando los seeders para pruebas';
        // }
        \App\Models\User::factory()->count(30)->create();
    }
}
