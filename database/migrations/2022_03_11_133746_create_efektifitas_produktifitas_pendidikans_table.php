<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEfektifitasProduktifitasPendidikansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('efektifitas_produktifitas_pendidikans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tahun_id');
            $table->integer('jumlah_mahasiswa')->nullable(true);
            $table->integer('ts3')->nullable(true);
            $table->integer('ts2')->nullable(true);
            $table->integer('ts1')->nullable(true);
            $table->integer('ts')->nullable(true);
            $table->integer('jumlah')->nullable(true);
            $table->integer('average')->nullable(true);
            $table->integer('tahun_laporan');
            $table->string('prodi');
            $table->string('created_by')->nullable(true);
            $table->string('updated_by')->nullable(true);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('efektifitas_produktifitas_pendidikans');
    }
}
