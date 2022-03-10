<?php

namespace Database\Seeders;

use App\Models\MediaPublikasi;
use App\Models\SdmKinerjaDosenPublikasiIlmiahDtps;
use Illuminate\Database\Seeder;

class MediaPublikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MediaPublikasi::create([
            'media' => 'Jumlah nasional tidak terakreditasi',
        ]);
        MediaPublikasi::create([
            'media' => 'Jumlah nasional terakreditasi',
        ]);
        MediaPublikasi::create([
            'media' => 'Jumlah internasional',
        ]);
        MediaPublikasi::create([
            'media' => 'Jumlah internasional bereputasi',
        ]);
        MediaPublikasi::create([
            'media' => 'Seminar wilayah/lokal/penrguruan tinggi',
        ]);
        MediaPublikasi::create([
            'media' => 'Seminar nasional',
        ]);
        MediaPublikasi::create([
            'media' => 'Seminar internasional',
        ]);
        MediaPublikasi::create([
            'media' => 'Tulisan di media massa wilayah',
        ]);
        MediaPublikasi::create([
            'media' => 'Tulisan di media massa nasional',
        ]);
        MediaPublikasi::create([
            'media' => 'Tulisan di media massa internasional',
        ]);
        SdmKinerjaDosenPublikasiIlmiahDtps::create([
            'media_id' => 1,
            'tahun_laporan' => '2022',
            'prodi' => 'a',
            'created_by' => 'a',
        ]);
        SdmKinerjaDosenPublikasiIlmiahDtps::create([
            'media_id' => 2,
            'tahun_laporan' => '2022',
            'prodi' => 'a',
            'created_by' => 'a',
        ]);
        SdmKinerjaDosenPublikasiIlmiahDtps::create([
            'media_id' => 3,
            'tahun_laporan' => '2022',
            'prodi' => 'a',
            'created_by' => 'a',
        ]);
        SdmKinerjaDosenPublikasiIlmiahDtps::create([
            'media_id' => 4,
            'tahun_laporan' => '2022',
            'prodi' => 'a',
            'created_by' => 'a',
        ]);
        SdmKinerjaDosenPublikasiIlmiahDtps::create([
            'media_id' => 5,
            'tahun_laporan' => '2022',
            'prodi' => 'a',
            'created_by' => 'a',
        ]);
        SdmKinerjaDosenPublikasiIlmiahDtps::create([
            'media_id' => 6,
            'tahun_laporan' => '2022',
            'prodi' => 'a',
            'created_by' => 'a',
        ]);
        SdmKinerjaDosenPublikasiIlmiahDtps::create([
            'media_id' => 7,
            'tahun_laporan' => '2022',
            'prodi' => 'a',
            'created_by' => 'a',
        ]);
        SdmKinerjaDosenPublikasiIlmiahDtps::create([
            'media_id' => 8,
            'tahun_laporan' => '2022',
            'prodi' => 'a',
            'created_by' => 'a',
        ]);
        SdmKinerjaDosenPublikasiIlmiahDtps::create([
            'media_id' => 9,
            'tahun_laporan' => '2022',
            'prodi' => 'a',
            'created_by' => 'a',
        ]);
        SdmKinerjaDosenPublikasiIlmiahDtps::create([
            'media_id' => 10,
            'tahun_laporan' => '2022',
            'prodi' => 'a',
            'created_by' => 'a',
        ]);
    }
}
