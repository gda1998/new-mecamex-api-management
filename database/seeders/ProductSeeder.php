<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends BaseSeeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->isOnLocal() && $this->count = 100;
        \App\Models\Product::factory()->count($this->count)->create();
    }
}
