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
            $table->string('waktu_tunggu_6');
            $table->string('waktu_tunggu_6_18');
            $table->string('waktu_tunggu_18');
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
        Schema::dropIfExists('waktu_tunggu_lulusans');
    }
}
