<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmKinerjaDosenPengakuanDtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_kinerja_dosen_pengakuan_dtps', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('bidang_keahlian');
            $table->string('bukti_pendukung')->nullable(true);
            $table->string('tingkat');
            $table->integer('tahun');
            $table->integer('tahun_laporan');
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
        Schema::dropIfExists('sdm_kinerja_dosen_pengakuan_dtps');
    }
}
