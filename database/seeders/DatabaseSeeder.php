<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CarType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Users seeders
            RoleSeeder::class,
            UserSeeder::class,

            // Cars seeders
            CarTypeSeeder::class,
            CarBrandSeeder::class,
            CarModelSeeder::class,
            CarSerieSeeder::class,
            CarSeeder::class,
            
            // Service seeders
            ServiceStatusSeeder::class,
            ServiceSeeder::class,
            AppliedServiceSeeder::class,
            ServiceStatusHistorySeeder::class,
            ServiceDetailSeeder::class,

            // Product seeders
            ProductSeeder::class,
            UsedProductSeeder::class,

            // Acquisition seeders
            AcquisitionSeeder::class,
            AcquisitionDetailSeeder::class,
        ]);
    }
}
