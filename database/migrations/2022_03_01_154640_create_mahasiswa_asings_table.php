<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaAsingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_asings', function (Blueprint $table) {
            $table->id();
            $table->string('program_studi')->default('S1');
            $table->integer('mahasiswa_aktif_ts')->nullable(true);
            $table->integer('mahasiswa_asing_ft_ts')->nullable(true);
            $table->integer('mahasiswa_asing_pt_ts')->nullable(true);
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
        Schema::dropIfExists('mahasiswa_asings');
    }
}
