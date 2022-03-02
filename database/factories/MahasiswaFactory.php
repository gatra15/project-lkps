<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tahun_akademik' => $this->faker->title,
            'daya_tampung' => $this->faker->title,
            'c_pendaftar' => $this->faker->title,
            'c_lulus_seleksi' => $this->faker->title,
            'mahasiswa_reguler' => $this->faker->title,
            'mahasiswa_transfer' => $this->faker->title,
            'mahasiswa_aktif_reguler' => $this->faker->title,
            'mahasiswa_aktif_transfer' => $this->faker->title,
            'tahun_laporan' => $this->faker->title,
            'prodi' => $this->faker->title,
            'created_by' => $this->faker->title,
        ];
    }
}
