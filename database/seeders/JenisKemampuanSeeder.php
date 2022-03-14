<?php

namespace Database\Seeders;

use App\Models\JenisKemampuan;
use App\Models\KepuasanPengguna;
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

        // kepuasan
        KepuasanPengguna::create([
            'kemampuan_id' => 1, 
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik',
        ]);
        KepuasanPengguna::create([
            'kemampuan_id' => 2, 
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik',
        ]);
        KepuasanPengguna::create([
            'kemampuan_id' => 3, 
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik',
        ]);
        KepuasanPengguna::create([
            'kemampuan_id' => 4, 
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik',
        ]);
        KepuasanPengguna::create([
            'kemampuan_id' => 5, 
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik',
        ]);
        KepuasanPengguna::create([
            'kemampuan_id' => 6, 
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik',
        ]);
        KepuasanPengguna::create([
            'kemampuan_id' => 7, 
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik',
        ]);
    }


}
