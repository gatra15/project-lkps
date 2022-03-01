<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapaianPembelajaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capaian_pembelajarans', function (Blueprint $table) {
            $table->id();
            $table->string('tahun_lulus');
            $table->string('jumlah_lulusan');
            $table->string('ipk_min');
            $table->string('ipk_avg');
            $table->string('ipk_max');
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
        Schema::dropIfExists('capaian_pembelajarans');
    }
}

