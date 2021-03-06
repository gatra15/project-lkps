<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndikatorTataKerjasamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indikator_tata_kerjasamas', function (Blueprint $table) {
            $table->id();
            $table->string('tridharma');
            $table->string('lembaga_mitra');
            $table->string('tingkat');
            $table->string('judul_kegiatan');
            $table->string('manfaat');
            $table->string('waktu_durasi');
            $table->string('bukti_kerjasama')->nullable(true);
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
        Schema::dropIfExists('indikator_tata_kerjasamas');
    }
}
