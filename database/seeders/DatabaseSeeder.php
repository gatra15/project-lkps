<?php

namespace Database\Seeders;

use App\Models\MediaPublikasi;
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
            UserTableSeeder::class,
            MahasiswaSeeder::class,
            SumberdayaSeeder::class,
            MediaPublikasiSeeder::class,
        ]);

    }
}
