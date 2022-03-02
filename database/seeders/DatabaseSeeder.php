<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Option2;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserTableSeeder::class
        ]);

        $prodi = [
            'Teknik Komputer',
            'Teknik Industri',
            'Teknik Mesin',
        ];

        foreach ($prodi as $prodis) {
            Option2::create(['prodi' => $prodis]);
       }

       $tahun = [
        '2010','2011','2012','2013','2014','2015','2016','2017','2018','2019','2020','2021','2022'
    ];

    foreach ($tahun as $tahuns) {
        Option::create(['tahun_laporan' => $tahuns]);
   }

    }
}
