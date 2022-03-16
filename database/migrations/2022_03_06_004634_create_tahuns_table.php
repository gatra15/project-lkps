<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTahunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tahuns', function (Blueprint $table) {
            $table->id();
            $table->string('relasi')->nullable(true);
            $table->integer('ts')->nullable(true);
            $table->integer('ts_1')->nullable(true);
            $table->integer('ts_2')->nullable(true);
            $table->integer('ts_3')->nullable(true);
            $table->integer('ts_4')->nullable(true);
            $table->integer('ts_5')->nullable(true);
            $table->integer('ts_6')->nullable(true);
            $table->integer('tahun_laporan');
            $table->string('prodi');
            $table->string('created_by')->nullable(true);
            $table->string('updated_by')->nullable(true);
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
        Schema::dropIfExists('tahuns');
    }
}
