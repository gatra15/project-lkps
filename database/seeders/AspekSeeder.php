<?php

namespace Database\Seeders;

use App\Models\Aspek;
use App\Models\PendidikanKepuasanMahasiswa;
use Illuminate\Database\Seeder;

class AspekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aspek::create([
            'aspek' => 'Keandalan (reliability): <br> kemampuan dosen, tenaga kependidikan, dan pengelola dalam memberikan pelayanan.',
            'nama' => 'Keandalan (reliability)'
        ]);
        Aspek::create([
            'aspek' => 'Daya tanggap (responsiveness): <br> kemauan dari dosen, tenaga kependidikan,dan pengelola dalam membantu mahasiswa dan memberikan jasa dengan cepat.',
            'nama' => 'Daya tanggap (responsiveness)'
        ]);
        Aspek::create([
            'aspek' => 'Kepastian (assurance): <br>kemampuan dosen, tenaga kependidikan,dan pengelola untuk memberi keyakinan kepada mahasiswa bahwa pelayanan yang diberikan telah sesuai dengan ketentuan.',
            'nama' => 'Kepastian (assurance)'
        ]);
        Aspek::create([
            'aspek' => 'Empati (empathy): <br> kesediaan/kepedulian dosen, tenaga kependidikan, dan pengelola untuk memberi perhatian kepada mahasiswa.',
            'nama' => 'Empati (empathy)'
        ]);
        Aspek::create([
            'aspek' => 'Tangible: penilaian mahasiswa terhadap kecukupan, aksesibitas, kualitas sarana dan prasarana.',
            'nama' => 'Tangible'
        ]);

        // Kepuasan Mahasiswa
        PendidikanKepuasanMahasiswa::create([
            'aspek_id' => 1,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        PendidikanKepuasanMahasiswa::create([
            'aspek_id' => 2,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        PendidikanKepuasanMahasiswa::create([
            'aspek_id' => 3,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        PendidikanKepuasanMahasiswa::create([
            'aspek_id' => 4,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
        PendidikanKepuasanMahasiswa::create([
            'aspek_id' => 5,
            'tahun_laporan' => 2022,
            'prodi' => 'Teknik Industri',
        ]);
    }
}
