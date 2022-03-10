<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tahun_id');
            $table->string('daya_tampung')->nullable(true);
            $table->string('c_pendaftar')->nullable(true);
            $table->string('c_lulus_seleksi')->nullable(true);
            $table->string('mahasiswa_reguler')->nullable(true);
            $table->string('mahasiswa_transfer')->nullable(true);
            $table->string('mahasiswa_aktif_reguler')->nullable(true);
            $table->string('mahasiswa_aktif_transfer')->nullable(true);
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
        Schema::dropIfExists('mahasiswas');
    }
}
