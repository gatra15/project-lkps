<?php

namespace Database\Seeders;

use App\Models\JenisLuaran;
use Illuminate\Database\Seeder;

class JenisLuaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JenisLuaran::create([
            'text' => '<b>HKI 1)</b>: <br>
            a) Paten, <br>
            b) Paten Sederhana'
        ]);
        JenisLuaran::create([
            'text' => '<b>HKI 1):</b> <br>
            c) Hak Cipta, <br>
            d) Desain Produk Industri, <br>
            e) Perlindungan Varietas Tanaman 
            (Sertifikat Perlindungan Varietas 
            Tanaman, Sertifikat Pelepasan 
            Varietas, Sertifikat Pendaftaran 
            Varietas), <br>
            f) Desain Tata Letak Sirkuit Terpadu, <br>
            g) dll.)'
        ]);
        JenisLuaran::create([
            'text' => 'Teknologi Tepat Guna, Produk (Produk 
            Terstandarisasi, Produk Tersertifikasi), 
            Karya Seni, Rekayasa Sosial'
        ]);
        JenisLuaran::create([
            'text' => 'Buku ber-ISBN, Book Chapter:'
        ]);
    }
}
