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
        Schema::create('used_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applied_service_id')->references('id')->on('applied_services');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->integer('quantity');
            $table->decimal('price');
            $table->dateTime('used_at');
            $table->timestamps();

            $table->comment('The products used in the services applied to the cars.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('used_products');
    }
};
