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
        Schema::create('car_brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->foreignId('car_type_id')->references('id')->on('car_types');
            $table->timestamps();

            $table->comment('The car makes available in the system. Example: Ford, Toyota, etc.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_brands');
    }
};
