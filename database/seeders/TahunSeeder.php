<?php

namespace Database\Seeders;

use App\Models\Tahun;
use Illuminate\Database\Seeder;

class TahunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tahun::create([
            'tahun' => 'TS-4'
        ]);
        Tahun::create([
            'tahun' => 'TS-3'
        ]);
        Tahun::create([
            'tahun' => 'TS-2'
        ]);
        Tahun::create([
            'tahun' => 'TS-1'
        ]);
        Tahun::create([
            'tahun' => 'TS'
        ]);
    }
}
