<?php

namespace Database\Seeders;

use App\Models\MediaPublikasi;
use App\Models\PublikasiIlmiahMahasiswa;
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
        
    }
}
