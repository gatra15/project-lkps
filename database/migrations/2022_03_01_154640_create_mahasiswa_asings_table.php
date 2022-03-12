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
            $table->string('program_studi');
            $table->string('mahasiswa_aktif_ts_2');
            $table->string('mahasiswa_aktif_ts_1');
            $table->string('mahasiswa_aktif_ts');
            $table->string('mahasiswa_asing_ft_ts_2');
            $table->string('mahasiswa_asing_ft_ts_1');
            $table->string('mahasiswa_asing_ft_ts');
            $table->string('mahasiswa_asing_pt_ts_2');
            $table->string('mahasiswa_asing_pt_ts_1');
            $table->string('mahasiswa_asing_pt_ts');
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
