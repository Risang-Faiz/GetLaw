<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lembaga;

class LembagaSeeder extends Seeder
{
    public function run()
    {
        Lembaga::create([
            'nama' => 'Lembaga Bantuan Hukum XYZ',
            'alamat' => 'Jl. Hukum No. 123, Jakarta',
            'kontak' => '021-12345678',
        ]);
    }
}

