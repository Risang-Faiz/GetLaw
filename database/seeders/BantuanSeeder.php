<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Bantuan;

class BantuanSeeder extends Seeder
{
    public function run()
    {
        Bantuan::create([
            'nama' => 'Jane Doe',
            'email' => 'jane.doe@example.com',
            'kebutuhan_bantuan' => 'Membutuhkan bantuan untuk kasus perceraian.',
        ]);
    }
}

