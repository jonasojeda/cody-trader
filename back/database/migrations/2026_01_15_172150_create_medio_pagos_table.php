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
        Schema::create('medio_pagos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('descripcion', 255)->nullable();
            $table->string('reference_code', 50)->nullable();
            $table->string('qr_pay', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medio_pagos');
    }
};
