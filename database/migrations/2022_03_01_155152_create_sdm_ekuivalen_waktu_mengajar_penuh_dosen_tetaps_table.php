<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmEkuivalenWaktuMengajarPenuhDosenTetapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_ekuivalen_waktu_mengajar_penuh_dosen_tetaps', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('dtps');
            $table->string('ps_akreditasi');
            $table->string('ps_lain_dalam_pt');
            $table->string('ps_lain_luar_pt');
            $table->string('penelitian');
            $table->string('pkm');
            $table->string('penunjang');
            $table->string('sks');
            $table->string('average_per_sks');
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
        Schema::dropIfExists('sdm_ekuivalen_waktu_mengajar_penuh_dosen_tetaps');
    }
}
