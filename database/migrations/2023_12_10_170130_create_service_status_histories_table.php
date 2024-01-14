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
        Schema::create('service_status_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('applied_service_id')->references('id')->on('applied_services');
            $table->foreignId('status_id')->references('id')->on('service_statuses');
            $table->timestamps();

            $table->comment('The history of the status of the applied services.');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_status_histories');
    }
};
