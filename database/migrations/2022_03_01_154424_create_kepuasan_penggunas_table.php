<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepuasanPenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepuasan_penggunas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kemampuan');
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
        Schema::dropIfExists('kepuasan_penggunas');
    }
}
