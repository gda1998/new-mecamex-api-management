<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $servicesStatus = [
            [ 'name' => 'Pending | Pendiente' ],
            [ 'name' => 'In Progress | En proceso' ],
            [ 'name' => 'Finished | Finalizado' ],
            [ 'name' => 'Cancelled | Cancelado' ],
        ];

        foreach ($servicesStatus as $serviceStatus) {
            \App\Models\ServiceStatus::create($serviceStatus);
        }
    }
}
