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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('highlight');
            $table->string('tag');
            $table->text('description');
            $table->string('primary_btn_text');
            $table->string('primary_btn_link');
            $table->string('secondary_btn_text');
            $table->string('secondary_btn_link');
            $table->string('image');
            $table->string('floating_card_title');
            $table->string('floating_card_description');
            $table->string('floating_card_icon');
            $table->json('indicators');
            $table->boolean('expiration')->default(false);
            $table->dateTime('expiration_date')->nullable();
            $table->dateTime('activation_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
