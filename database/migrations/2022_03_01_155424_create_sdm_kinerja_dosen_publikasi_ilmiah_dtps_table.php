<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmKinerjaDosenPublikasiIlmiahDtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_kinerja_dosen_publikasi_ilmiah_dtps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('media_id');
            $table->integer('jumlah_ts')->nullable(true);
            $table->integer('jumlah')->nullable(true);
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
        Schema::dropIfExists('sdm_kinerja_dosen_publikasi_ilmiah_dtps');
    }
}
