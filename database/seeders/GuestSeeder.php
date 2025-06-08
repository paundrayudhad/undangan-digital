<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Guest;

class GuestSeeder extends Seeder
{
    public function run(): void
    {
        Guest::create([
            'display_name' => 'Agus Setiawan',
            'slug' => 'agus',
        ]);

        Guest::create([
            'display_name' => 'Budi & Keluarga',
            'slug' => 'budi',
        ]);
    }
}
