<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendidikanKurikulumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendidikan_kurikulums', function (Blueprint $table) {
            $table->id();
            $table->string('semester');
            $table->string('kode_mata_kuliah');
            $table->string('nama_mata_kuliah');
            $table->string('mata_kuliah_kompetensial');
            $table->string('bobot_kuliah');
            $table->string('bobot_seminar');
            $table->string('bobot_praktikum');
            $table->string('konversi_kredit_jam');
            $table->string('capaian_sikap');
            $table->string('capaian_pengetahuan');
            $table->string('capaian_ketrampilan_umum');
            $table->string('capaian_ketrampilan_khusus');
            $table->string('document_rencana_pembelajaran');
            $table->string('unit_penyelenggara');
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
        Schema::dropIfExists('pendidikan_kurikulums');
    }
}
