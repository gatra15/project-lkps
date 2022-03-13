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
            $table->integer('ps_akreditasi');
            $table->integer('ps_lain_dalam_pt');
            $table->integer('ps_lain_luar_pt');
            $table->integer('penelitian');
            $table->integer('pkm');
            $table->integer('penunjang');
            $table->integer('sks');
            $table->float('average_per_sks');
            $table->string('slug');
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
        Schema::dropIfExists('sdm_ekuivalen_waktu_mengajar_penuh_dosen_tetaps');
    }
}
