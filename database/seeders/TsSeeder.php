<?php

namespace Database\Seeders;

use App\Models\CapaianPembelajaran;
use App\Models\Mahasiswa;
use App\Models\TS;
use Illuminate\Database\Seeder;

class TsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TS::create([
            'name' => 'TS-6'
        ]);
        TS::create([
            'name' => 'TS-5'
        ]);
        TS::create([
            'name' => 'TS-4'
        ]);
        TS::create([
            'name' => 'TS-3'
        ]);
        TS::create([
            'name' => 'TS-2'
        ]);
        TS::create([
            'name' => 'TS-1'
        ]);
        TS::create([
            'name' => 'TS'
        ]);

        // mahasiswa
        Mahasiswa::create([
            'tahun_id' => 3,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        Mahasiswa::create([
            'tahun_id' => 4,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        Mahasiswa::create([
            'tahun_id' => 5,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        Mahasiswa::create([
            'tahun_id' => 6,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        Mahasiswa::create([
            'tahun_id' => 7,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);

        // Efektifitas
        

        // capaian pembelajara
        CapaianPembelajaran::create([
            'tahun_id' => 5,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        CapaianPembelajaran::create([
            'tahun_id' => 6,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        CapaianPembelajaran::create([
            'tahun_id' => 7,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
    }
}
