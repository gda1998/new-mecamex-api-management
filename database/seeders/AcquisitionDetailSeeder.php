<?php

namespace Database\Seeders;

use App\Models\Acquisition;
use App\Models\AcquisitionDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AcquisitionDetailSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->isOnLocal() && $this->count = 500;
        AcquisitionDetail::factory()->count($this->count)->create();

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
