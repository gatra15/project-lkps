<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePkmDtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pkm_dtps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('tema');
            $table->string('nama_mahasiswa');
            $table->string('judul_kegiatan');
            $table->integer('tahun');
            $table->integer('tahun_laporan');
            $table->string('prodi');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pkm_dtps');
    }
}
