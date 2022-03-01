<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryaIlmiahMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karya_ilmiah_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahasiswa');
            $table->string('judul');
            $table->string('jumlah_sitasi');
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
        Schema::dropIfExists('karya_ilmiah_mahasiswas');
    }
}
