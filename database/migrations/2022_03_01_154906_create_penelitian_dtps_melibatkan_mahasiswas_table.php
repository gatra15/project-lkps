<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitianDtpsMelibatkanMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitian_dtps_melibatkan_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('tema');
            $table->string('nama_mahasiswa');
            $table->string('judul');
            $table->string('tahun');
            $table->string('type_penelitian');
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
        Schema::dropIfExists('penelitian_dtps_melibatkan_mahasiswas');
    }
}
