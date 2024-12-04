<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Konsultasi;

class KonsultasiSeeder extends Seeder
{
    public function run()
    {
        Konsultasi::create([
            'nama' => 'John Doe',
            'email' => 'john.doe@example.com',
            'permasalahan' => 'Saya menghadapi kasus hukum terkait kepemilikan tanah.',
        ]);
    }
}

