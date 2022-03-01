<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKinerjaLulusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kinerja_lulusans', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_lulus');
            $table->string('jumlah_lulusan');
            $table->string('jumlah_lulusan_terlacak');
            $table->string('tempat_wilayah_tidak_berizin');
            $table->string('tempat_nasional_berizin');
            $table->string('internasional');
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
        Schema::dropIfExists('kinerja_lulusans');
    }
}
