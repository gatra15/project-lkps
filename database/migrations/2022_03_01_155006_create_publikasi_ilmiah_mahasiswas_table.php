<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublikasiIlmiahMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publikasi_ilmiah_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('media_publikasi');
            $table->string('jumlah_ts2');
            $table->string('jumlah_ts1');
            $table->string('jumlah_ts');
            $table->string('jumlah');
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
        Schema::dropIfExists('publikasi_ilmiah_mahasiswas');
    }
}
