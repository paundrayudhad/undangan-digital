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
        Schema::create('wedding_settings', function (Blueprint $table) {
            $table->id();
            
            // Nama Mempelai
            $table->string('groom_name_full');
            $table->string('groom_name_short');
            $table->string('bride_name_full');
            $table->string('bride_name_short');

            // Orang Tua
            $table->string('groom_father');
            $table->string('groom_mother');
            $table->string('bride_father');
            $table->string('bride_mother');

            // Detail Acara Akad
            $table->dateTime('ceremony_datetime');
            $table->string('ceremony_venue');
            $table->text('ceremony_address');
            $table->string('ceremony_map_url')->nullable();

            // Detail Acara Resepsi
            $table->dateTime('reception_datetime');
            $table->string('reception_venue');
            $table->text('reception_address');
            $table->string('reception_map_url')->nullable();
            
            // Konten Tambahan
            $table->text('story_text')->nullable();
            $table->json('gallery_images')->nullable(); // Untuk menyimpan daftar gambar
            $table->string('audio_url')->nullable(); // Untuk musik latar

            // Informasi Hadiah
            $table->text('gift_address')->nullable();
            $table->json('gift_banks')->nullable(); // Untuk menyimpan rekening bank

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedding_settings');
    }
};