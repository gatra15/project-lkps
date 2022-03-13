<?php

namespace Database\Seeders;

use App\Models\JenisKemampuan;
use Illuminate\Database\Seeder;

class JenisKemampuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisKemampuan::create([
            'text' => 'Etika',
        ]);
        JenisKemampuan::create([
            'text' => 'Keahlian pada bidang ilmu (kompetensi utama)',
        ]);
        JenisKemampuan::create([
            'text' => 'Kemampuan berbahasa asing',
        ]);
        JenisKemampuan::create([
            'text' => 'Penggunaan teknologi informasi',
        ]);
        JenisKemampuan::create([
            'text' => 'Kemampuan berkomunikasi',
        ]);
        JenisKemampuan::create([
            'text' => 'Kerjasama tim',
        ]);
        JenisKemampuan::create([
            'text' => 'Pengembangan diri',
        ]);
    }
}
