<?php

namespace Database\Seeders;

use App\Models\BiayaOperasionalPendidikan;
use App\Models\JenisPenggunaan;
use App\Models\SaranaDana;
use Illuminate\Database\Seeder;

class JenisPenggunaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisPenggunaan::create([
            'text' => 'Biaya Operasional Pendidikan',
        ]);
        JenisPenggunaan::create([
            'text' => 'Biaya operasional kemahasiswaan (penalaran, minat, bakat, dan kesejahteraan).',
        ]);
        JenisPenggunaan::create([
            'text' => 'Biaya Penelitian',
        ]);
        JenisPenggunaan::create([
            'text' => 'Biaya PkM.',
        ]);
        JenisPenggunaan::create([
            'text' => 'Biaya Investasi SDM',
        ]);
        JenisPenggunaan::create([
            'text' => 'Biaya Investasi Sarana',
        ]);
        JenisPenggunaan::create([
            'text' => 'Biaya Investasi Prasarana',
        ]);

        // Biaya
        BiayaOperasionalPendidikan::create([
            'text' => 'a. Biaya Dosen (Gaji, Honor)',
        ]);
        BiayaOperasionalPendidikan::create([
            'text' => 'b. Biaya Tenaga Kependidikan (Gaji, Honor)',
        ]);
        BiayaOperasionalPendidikan::create([
            'text' => 'c. Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)',
        ]);
        BiayaOperasionalPendidikan::create([
            'text' => 'd. Biaya Operasional Tidak Langsung (Listrik, Gas, Air, Pemeliharaan Gedung, Pemeliharaan Sarana, Uang Lembur, Telekomunikasi, Konsumsi, Transport Lokal, Pajak, Asuransi, dll.)',
        ]);

        // Sarana Dana
        SaranaDana::create([
            'sarana_id' => 1,
            'biaya_id'=> 1,
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);
        SaranaDana::create([
            'sarana_id' => 1,
            'biaya_id'=> 2,
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);
        SaranaDana::create([
            'sarana_id' => 1,
            'biaya_id'=> 3,
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);
        SaranaDana::create([
            'sarana_id' => 1,
            'biaya_id'=> 4,
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);
        SaranaDana::create([
            'sarana_id' => 2,
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);
        SaranaDana::create([
            'sarana_id' => 3,
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);
        SaranaDana::create([
            'sarana_id' => 4,
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);
        SaranaDana::create([
            'sarana_id' => 5,
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);
        SaranaDana::create([
            'sarana_id' => 6,
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);
        SaranaDana::create([
            'sarana_id' => 7,
            'tahun_laporan' => 2020,
            'prodi' => 'Teknik Industri',
        ]);
    }
}
