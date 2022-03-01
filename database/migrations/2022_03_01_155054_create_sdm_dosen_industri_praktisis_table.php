<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmDosenIndustriPraktisisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_dosen_industri_praktisis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_id');
            $table->string('perusahaan');
            $table->string('pendidikan_tertinggi');
            $table->string('bidang_keahlian');
            $table->string('sertifikat_profesi');
            $table->string('mata_kuliah_diampu');
            $table->string('sks');
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
        Schema::dropIfExists('sdm_dosen_industri_praktisis');
    }
}
