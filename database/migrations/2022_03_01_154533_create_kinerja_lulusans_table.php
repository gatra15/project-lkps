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
            $table->integer('jumlah_lulusan')->nullable(true);
            $table->integer('jumlah_lulusan_terlacak')->nullable(true);
            $table->string('tempat_wilayah_tidak_berizin')->nullable(true);
            $table->string('tempat_nasional_berizin')->nullable(true);
            $table->string('internasional')->nullable(true);
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
        Schema::dropIfExists('kinerja_lulusans');
    }
}
