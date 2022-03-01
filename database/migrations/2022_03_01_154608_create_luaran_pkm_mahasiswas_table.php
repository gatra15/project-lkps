<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLuaranPkmMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('luaran_pkm_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('type_luaran');
            $table->string('judul');
            $table->string('tahun');
            $table->string('keterangan');
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
        Schema::dropIfExists('luaran_pkm_mahasiswas');
    }
}
