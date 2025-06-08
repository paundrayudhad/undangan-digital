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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();

            // Kolom untuk Foto Mempelai
            $table->string('groom_photo')->nullable();
            $table->string('bride_photo')->nullable();

            // Kolom untuk Galeri Kolom (4 Foto)
            $table->string('gallery_kolom_1')->nullable();
            $table->string('gallery_kolom_2')->nullable();
            $table->string('gallery_kolom_3')->nullable();
            $table->string('gallery_kolom_4')->nullable();

            // Kolom untuk Galeri Potrait (2 Foto)
            $table->string('gallery_potrait_1')->nullable();
            $table->string('gallery_potrait_2')->nullable();

            // Kolom untuk Galeri "Forever Journey" (6 Foto)
            $table->string('gallery_journey_1')->nullable();
            $table->string('gallery_journey_2')->nullable();
            $table->string('gallery_journey_3')->nullable();
            $table->string('gallery_journey_4')->nullable();
            $table->string('gallery_journey_5')->nullable();
            $table->string('gallery_journey_6')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
