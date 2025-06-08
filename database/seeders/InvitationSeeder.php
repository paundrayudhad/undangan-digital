<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Invitation;

class InvitationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data lama untuk menghindari duplikat jika seeder dijalankan lagi
        Invitation::truncate();

        Invitation::create([
            // Foto Mempelai (sesuai path di blade asli)
            'groom_photo' => 'assets/images/galleries/369331-gallery-uvG90fPgEV.png',
            'bride_photo' => 'assets/images/galleries/369331-gallery-20WuL0Rm0j.png',

            // Galeri Kolom
            'gallery_kolom_1' => 'assets/images/galleries/369331-gallery-hUyuDCbOPJ.jpg',
            'gallery_kolom_2' => 'assets/images/galleries/369331-gallery-K3FYeKw59N.jpg',
            'gallery_kolom_3' => 'assets/images/galleries/369331-gallery-Bvqv6jxPBo.jpg',
            'gallery_kolom_4' => 'assets/images/galleries/369331-gallery-kmYUgGAqxT.jpg',

            // Galeri Potrait
            'gallery_potrait_1' => 'assets/images/galleries/369331-gallery-U6DhmneawB.jpg',
            'gallery_potrait_2' => 'assets/images/galleries/369331-gallery-fKj1M5mhdi.jpg',

            // Galeri "Forever Journey"
            'gallery_journey_1' => 'assets/images/galleries/369331-gallery-oenpr1vr46.jpg',
            'gallery_journey_2' => 'assets/images/galleries/369331-gallery-CMcFWt3jQN.jpg',
            'gallery_journey_3' => 'assets/images/galleries/369331-gallery-LaFvldeZSm.jpg',
            'gallery_journey_4' => 'assets/images/galleries/369331-gallery-3VT4m0SToE.jpg',
            'gallery_journey_5' => 'assets/images/galleries/369331-gallery-rLFVOqa8ea.jpg',
            'gallery_journey_6' => 'assets/images/galleries/369331-gallery-DJF78fp9mN.jpg',
        ]);
    }
}
