<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiNonAkademikMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi_non_akademik_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kegiatan');
            $table->string('tahun_perolehan');
            $table->string('tingkat');
            $table->string('prestasi');
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
        Schema::dropIfExists('prestasi_non_akademik_mahasiswas');
    }
}
