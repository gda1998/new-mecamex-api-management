<?php

namespace Database\Seeders;

use App\Models\Acquisition;
use App\Models\AcquisitionDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AcquisitionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AcquisitionDetail::factory()->count(500)->create();

        $acquisitions = Acquisition::whereNotIn('id', function($query) {
            $query->select('id')->from(with(new AcquisitionDetail)->getTable());
        })->get();

        foreach ($acquisitions as $acquisition) {
            AcquisitionDetail::factory()->count(rand(1, 5))->create([
                'acquisition_id' => $acquisition->id,
            ]);
        }
    }
}
