<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;

class BeritaSeeder extends Seeder
{
    public function run()
    {
        Berita::create([
            'judul' => 'Update Peraturan Baru',
            'konten' => 'Pemerintah mengumumkan peraturan baru yang mempengaruhi sektor hukum...',
            'tanggal' => now(),
        ]);
    }
}

