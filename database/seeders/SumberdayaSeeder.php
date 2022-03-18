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
        
    }
}
