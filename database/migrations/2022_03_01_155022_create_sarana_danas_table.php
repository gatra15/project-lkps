<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaranaDanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sarana_danas', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_penggunaan');
            $table->string('unit_pengelola_ts2');
            $table->string('unit_pengelola_ts1');
            $table->string('unit_pengelola_ts');
            $table->string('unit_pengelola_average');
            $table->string('ps_ts2');
            $table->string('ps_ts1');
            $table->string('ps_ts');
            $table->string('ps_average');
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
        Schema::dropIfExists('sarana_danas');
    }
}
