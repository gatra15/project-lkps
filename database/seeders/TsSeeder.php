<?php

namespace Database\Seeders;

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
    }
}
