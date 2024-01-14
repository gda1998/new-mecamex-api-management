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
        Schema::create('acquisition_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acquisition_id')->references('id')->on('acquisitions');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->integer('quantity');
            $table->decimal('price');
            $table->timestamps();

            $table->comment('The details of the acquisitions made by the company. Example: Purchase of 4 tires, 5 oil, etc.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('acquisition_details');
    }
};
