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
        Schema::create('course_contents', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('academy');

            $table->decimal('price', 10, 2);
            $table->string('currency', 3)->default('USD');

            // JSON con texto + icono (lucide)
            $table->json('description');

            // JSON con lista de contenidos
            $table->json('content');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_contents');
    }
};
