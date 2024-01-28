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
        Schema::create('applied_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->references('id')->on('cars');
            $table->foreignId('applied_by')->references('id')->on('users');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->timestamps();

            $table->comment('The services applied to the cars.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applied_services');
    }
};
