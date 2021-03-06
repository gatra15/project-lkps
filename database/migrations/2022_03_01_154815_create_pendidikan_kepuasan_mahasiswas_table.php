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
            $table->foreignId('aspek_id');
            $table->string('sangat_baik')->nullable(true);
            $table->string('baik')->nullable(true);
            $table->string('cukup')->nullable(true);
            $table->string('kurang')->nullable(true);
            $table->string('rencana_tindak_lanjut')->nullable(true);
            $table->integer('tahun_laporan');
            $table->string('prodi');
            $table->string('created_by')->nullable(true);
            $table->string('updated_by')->nullable(true);
            $table->timestamp('created_at')->nullable(true);
            $table->timestamp('updated_at')->nullable(true);
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
