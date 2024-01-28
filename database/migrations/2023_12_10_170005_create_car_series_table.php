<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('car_series', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('year');
            $table->foreignId('car_model_id')->references('id')->on('car_models');
            $table->timestamps();

            $table->comment('The car series available in the system. Example: Volkswagen Gol Sedan 2012, Volkswagen Gol Hatchback 2012, etc.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_series');
    }
};
