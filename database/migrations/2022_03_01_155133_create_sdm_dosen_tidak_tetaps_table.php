<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmDosenTidakTetapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_dosen_tidak_tetaps', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_id');
            $table->string('pendidikan_pasca_sarjana');
            $table->string('bidang_keahlian');
            $table->string('jabatan_akademik');
            $table->string('sertifikat_pendidikan_profesi');
            $table->string('sertifikat_profesi');
            $table->string('mata_kuliah_diampu_ps_akreditasi');
            $table->string('kesesuaian_mata_kuliah_diampu');
            $table->string('mata_kuliah_diampu_ps_lain');
            $table->string('tahun_laporan');
            $table->string('prodi');
            $table->string('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sdm_dosen_tidak_tetaps');
    }
}
