<?php

namespace Database\Seeders;

use App\Models\AppliedService;
use App\Models\UsedProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsedProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UsedProduct::factory()->count(300)->create();

        $appliedServices = AppliedService::whereNotIn('id', function($query) {
            $query->select('applied_service_id')->from(with(new UsedProduct)->getTable());
        })->get();

        foreach ($appliedServices as $appliedService) {
            UsedProduct::factory()->count(rand(1, 5))->create([
                'applied_service_id' => $appliedService->id,
            ]);
        }
    }
}
