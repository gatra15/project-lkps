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
            $table->foreignId('kemampuan_id');
            $table->integer('sangat_baik')->nullable(true);
            $table->integer('baik')->nullable(true);
            $table->integer('cukup')->nullable(true);
            $table->integer('kurang')->nullable(true);
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
        Schema::dropIfExists('kepuasan_penggunas');
    }
}
