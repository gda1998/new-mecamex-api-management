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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('car_plate')->unique();
            $table->foreignId('car_serie_id')->references('id')->on('car_series');
            $table->foreignId('owner_id')->references('id')->on('users');
            $table->timestamps();

            $table->comment('The cars from the users.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
