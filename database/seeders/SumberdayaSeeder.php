<?php

namespace Database\Seeders;

use App\Models\Sumberdaya;
use Illuminate\Database\Seeder;
use App\Models\SdmKinerjaDosenPenelitianDtps;
use App\Models\SdmKinerjaDosenPkmDtps;

class SumberdayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sumberdaya::create([
            'sumberdaya' => 'a) Perguruan Tinggi <br>
            b) Mandiri <sup>2)</sup> ',
        ]);
        Sumberdaya::create([
            'sumberdaya' => 'Lembaga Dalam Negeri (Luar Negeri) ',
        ]);
        Sumberdaya::create([
            'sumberdaya' => 'Lembaga Luar Negeri ',
        ]);
        SdmKinerjaDosenPenelitianDtps::create([
            'sumber_id' => 1,
            'jumlah_ts2' => null ,
            'jumlah_ts1' => null,
            'jumlah_ts' => null,
            'jumlah' => null,
            'tahun_laporan' => '2022',
            'prodi' => 'Teknik Industri',
            'created_by' => 'Teknik Industri',
        ]);
        SdmKinerjaDosenPenelitianDtps::create([
            'sumber_id' => 2,
            'jumlah_ts2' => null ,
            'jumlah_ts1' => null,
            'jumlah_ts' => null,
            'jumlah' => null,
            'tahun_laporan' => '2022',
            'prodi' => 'Teknik Industri',
            'created_by' => 'Teknik Industri',
        ]);
        SdmKinerjaDosenPenelitianDtps::create([
            'sumber_id' => 2,
            'jumlah_ts2' => null ,
            'jumlah_ts1' => null,
            'jumlah_ts' => null,
            'jumlah' => null,
            'tahun_laporan' => '2022',
            'prodi' => 'Teknik Industri',
            'created_by' => 'Teknik Industri',
        ]);
        SdmKinerjaDosenPkmDtps::create([
            'sumber_id' => 1,
            'jumlah_ts2' => null ,
            'jumlah_ts1' => null,
            'jumlah_ts' => null,
            'jumlah' => null,
            'tahun_laporan' => '2022',
            'prodi' => 'Teknik Industri',
            'created_by' => 'Teknik Industri',
        ]);
        SdmKinerjaDosenPkmDtps::create([
            'sumber_id' => 2,
            'jumlah_ts2' => null ,
            'jumlah_ts1' => null,
            'jumlah_ts' => null,
            'jumlah' => null,
            'tahun_laporan' => '2022',
            'prodi' => 'Teknik Industri',
            'created_by' => 'Teknik Industri',
        ]);
        SdmKinerjaDosenPkmDtps::create([
            'sumber_id' => 2,
            'jumlah_ts2' => null ,
            'jumlah_ts1' => null,
            'jumlah_ts' => null,
            'jumlah' => null,
            'tahun_laporan' => '2022',
            'prodi' => 'Teknik Industri',
            'created_by' => 'Teknik Industri',
        ]);
    }
}
