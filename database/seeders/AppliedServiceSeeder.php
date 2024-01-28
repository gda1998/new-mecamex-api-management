<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppliedServiceSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->isOnLocal() && $this->count = 300;
        \App\Models\AppliedService::factory()->count($this->count)->create();
    }
}
