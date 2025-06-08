<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WeddingSetting;
use Illuminate\Support\Facades\DB;

class WeddingSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Kosongkan tabel terlebih dahulu untuk menghindari duplikat jika seeder dijalankan lagi
        DB::table('wedding_settings')->truncate();

        WeddingSetting::create([
            // Ganti dengan data Anda
            'groom_name_full' => 'Paundra Wasesa',
            'groom_name_short' => 'Paundra',
            'bride_name_full' => 'Yudha Anjaina',
            'bride_name_short' => 'Yudha',
            'groom_father' => 'Bapak Mempelai Pria',
            'groom_mother' => 'Ibu Mempelai Pria',
            'bride_father' => 'Bapak Mempelai Wanita',
            'bride_mother' => 'Ibu Mempelai Wanita',

            'ceremony_datetime' => '2024-11-09 08:00:00',
            'ceremony_venue' => 'Rumah Mempelai Wanita',
            'ceremony_address' => 'Jl. Merpati Putih No. 123, Kota Bahagia, 54321',
            'ceremony_map_url' => 'https://maps.app.goo.gl/example',

            'reception_datetime' => '2024-11-09 11:00:00',
            'reception_venue' => 'Gedung Serbaguna Sejahtera',
            'reception_address' => 'Jl. Elang Perkasa No. 45, Kota Bahagia, 54321',
            'reception_map_url' => 'https://maps.app.goo.gl/example',
            
            'story_text' => 'Ini adalah awal dari kisah cinta kami...',
            
            'gallery_images' => [
                ['image_url' => 'gallery/sample1.jpg'],
                ['image_url' => 'gallery/sample2.jpg'],
                ['image_url' => 'gallery/sample3.jpg'],
            ],

            'audio_url' => 'audio/wedding-song.mp3',

            'gift_address' => 'Jl. Cendrawasih Indah No. 77, Kota Bahagia, 54321',
            'gift_banks' => [
                [
                    'bank_name' => 'Bank ABC',
                    'account_number' => '1234567890',
                    'account_name' => 'Paundra Wasesa'
                ],
                [
                    'bank_name' => 'Bank XYZ',
                    'account_number' => '0987654321',
                    'account_name' => 'Yudha Anjaina'
                ]
            ],
        ]);
    }
}