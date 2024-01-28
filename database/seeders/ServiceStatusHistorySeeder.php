<?php

namespace Database\Seeders;

use App\Models\AppliedService;
use App\Models\ServiceStatusHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceStatusHistorySeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->isOnLocal() && $this->count = 150;
        ServiceStatusHistory::factory()->count($this->count)->create();

        $appliedServices = AppliedService::whereNotIn('id', function($query) {
            $query->select('applied_service_id')->from(with(new ServiceStatusHistory)->getTable());
        })->get();

        foreach ($appliedServices as $appliedService) {
            ServiceStatusHistory::factory()->count(rand(1, 3))->create([
                'applied_service_id' => $appliedService->id,
            ]);
        }
    }
}
