<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaktuTungguLulusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('waktu_tunggu_lulusans', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah_lulusan');
            $table->string('jumlah_lulusan_terlacak');
            $table->string('jumlah_lulusan_dipesan');
            $table->string('program');
            $table->string('waktu_tunggu_3_6');
            $table->string('waktu_tunggu_3_18');
            $table->string('waktu_tunggu_6');
            $table->string('waktu_tunggu_18');
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
        Schema::dropIfExists('waktu_tunggu_lulusans');
    }
}
