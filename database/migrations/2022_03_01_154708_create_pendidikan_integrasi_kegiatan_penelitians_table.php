<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanIntegrasiKegiatanPenelitiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_integrasi_kegiatan_penelitians', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('nama_dosen');
            $table->string('mata_kuliah');
            $table->string('bentuk_integrasi');
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
        Schema::dropIfExists('pendidikan_integrasi_kegiatan_penelitians');
    }
}
