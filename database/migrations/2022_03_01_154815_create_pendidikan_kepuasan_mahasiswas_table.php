<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanKepuasanMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_kepuasan_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('aspek');
            $table->string('sangat_baik');
            $table->string('baik');
            $table->string('cukup');
            $table->string('kurang');
            $table->string('rencana_tindak_lanjut');
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
        Schema::dropIfExists('pendidikan_kepuasan_mahasiswas');
    }
}
