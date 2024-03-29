<?php

namespace Database\Seeders;

use App\Models\AppliedService;
use App\Models\ServiceDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceDetailSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->isOnLocal() && $this->count = 600;
        ServiceDetail::factory()->count($this->count)->create();

        $appliedServices = AppliedService::whereNotIn('id', function($query) {
            $query->select('applied_service_id')->from(with(new ServiceDetail)->getTable());
        })->get();

        foreach ($appliedServices as $appliedService) {
            ServiceDetail::factory()->count(rand(1, 5))->create([
                'applied_service_id' => $appliedService->id,
            ]);
        }
    }
}
