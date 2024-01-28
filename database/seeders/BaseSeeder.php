<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class BaseSeeder extends Seeder
{
    protected int $count;

    public function __construct()
    {
        $this->count = 10;
    }

    public function isOnProduction(): bool
    {
        return App::environment('production');
    }
    public function isOnLocal(): bool
    {
        return App::environment('local', 'development');
    }

    public function isOnTesting(): bool
    {
        return App::environment('testing');
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
    }
}
