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
            $table->foreignId('sarana_id');
            $table->foreignId('biaya_id')->nullable(true);
            $table->integer('unit_pengelola_ts')->nullable(true);
            $table->float('unit_pengelola_average')->nullable(true);
            $table->integer('ps_ts')->nullable(true);
            $table->float('ps_average')->nullable(true);
            $table->string('tahun_laporan');
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
        Schema::dropIfExists('sarana_danas');
    }
}
