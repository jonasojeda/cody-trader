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
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name');
            $table->text('brand_description');
            $table->string('contact_email');
            $table->json('social_links')->nullable(); // Guardará array de objetos: {name, url, color, icon, active}
            $table->json('navigation_links')->nullable(); // Guardará array de objetos: {label, url}
            $table->text('risk_disclaimer');
            $table->string('copyright_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('footers');
    }
};
