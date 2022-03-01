<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_id');
            $table->string('pendidikan_magister');
            $table->string('pendidikan_doktor');
            $table->string('bidang_keahlian');
            $table->string('kesesuaian_ps');
            $table->string('jabatan_akademik');
            $table->string('sertifikat_pendidikan_profesi');
            $table->string('sertifikat_kompetensi');
            $table->string('mata_kuliah_akreditasi_diampu');
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
        Schema::dropIfExists('sdm_dosens');
    }
}
