<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SumberDaya;

class SumberDayaSeeder extends Seeder
{
    public function run()
    {
        SumberDaya::create([
            'judul' => 'Panduan Hukum Online',
            'deskripsi' => 'Panduan lengkap mengenai hukum di Indonesia yang tersedia secara online.',
            'link' => 'https://www.sumberdaya.com',
        ]);
    }
}

