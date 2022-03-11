<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmKinerjaDosenPkmDtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_kinerja_dosen_pkm_dtps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sumber_id');
            $table->integer('jumlah_ts1')->nullable(true);
            $table->integer('jumlah_ts2')->nullable(true);
            $table->integer('jumlah_ts')->nullable(true);
            $table->integer('jumlah')->nullable(true);
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
        Schema::dropIfExists('sdm_kinerja_dosen_pkm_dtps');
    }
}
