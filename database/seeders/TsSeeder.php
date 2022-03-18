<?php

namespace Database\Seeders;

use App\Models\CapaianPembelajaran;
use App\Models\EfektifitasProduktifitasPendidikan;
use App\Models\KesesuaianBidangKerja;
use App\Models\KinerjaLulusan;
use App\Models\Mahasiswa;
use App\Models\TS;
use App\Models\WaktuTungguLulusan;
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
            'tahun_laporan' => 2016,
            'prodi' => 'Teknik Industri',
        ]);
        Mahasiswa::create([
            'tahun_laporan' => 2017,
            'prodi' => 'Teknik Industri',
        ]);
        Mahasiswa::create([
           
            'tahun_laporan' => 2018,
            'prodi' => 'Teknik Industri',
        ]);
        Mahasiswa::create([
            'tahun_laporan' => 2019,
            'prodi' => 'Teknik Industri',
        ]);
        Mahasiswa::create([
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);

        // Efektifitas
        EfektifitasProduktifitasPendidikan::create([

            'tahun_laporan' => 2016,
            'prodi' => 'Teknik Industri',
        ]);
        EfektifitasProduktifitasPendidikan::create([

            'tahun_laporan' => 2017,
            'prodi' => 'Teknik Industri',
        ]);
        EfektifitasProduktifitasPendidikan::create([

            'tahun_laporan' => 2018,
            'prodi' => 'Teknik Industri',
        ]);
        EfektifitasProduktifitasPendidikan::create([

            'tahun_laporan' => 2019,
            'prodi' => 'Teknik Industri',
        ]);
        EfektifitasProduktifitasPendidikan::create([

            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);

        // capaian pembelajara
        // CapaianPembelajaran::create([
            
        //     'tahun_laporan' => 2022,
        //     'prodi' => 'Teknik Industri',
        // ]);
        // CapaianPembelajaran::create([
        //     'tahun_laporan' => 2022,
        //     'prodi' => 'Teknik Industri',
        // ]);
        // CapaianPembelajaran::create([
        //     'tahun_laporan' => 2020,
        //     'prodi' => 'Teknik Industri',
        // ]);

        // Daya saing
        // WaktuTungguLulusan::create([
        //     'tahun_id' => 3,
        //     'tahun_laporan' => 2022,
        //     'prodi' => 'Teknik Industri',
        // ]);
        // WaktuTungguLulusan::create([
        //     'tahun_id' => 4,
        //     'tahun_laporan' => 2022,
        //     'prodi' => 'Teknik Industri',
        // ]);
        // WaktuTungguLulusan::create([
        //     'tahun_id' => 5,
        //     'tahun_laporan' => 2022,
        //     'prodi' => 'Teknik Industri',
        // ]);
        KesesuaianBidangKerja::create([

            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        KesesuaianBidangKerja::create([

            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        KesesuaianBidangKerja::create([

            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);

        // Kinerja Lulusan
        KinerjaLulusan::create([

            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        KinerjaLulusan::create([

            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        KinerjaLulusan::create([
    
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
    }
}
