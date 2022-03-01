<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmDosenPembimbingTasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_dosen_pembimbing_tas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('surat_tugas');
            $table->string('jumlah_ps_akreditasi_ts2');
            $table->string('jumlah_ps_akreditasi_ts1');
            $table->string('jumlah_ps_akreditasi_ts');
            $table->string('jumlah_ps_akreditasi_average');
            $table->string('jumlah_ps_lain_ts2');
            $table->string('jumlah_ps_lain_ts1');
            $table->string('jumlah_ps_lain_ts');
            $table->string('jumlah_ps_lain_average');
            $table->string('average');
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
        Schema::dropIfExists('sdm_dosen_pembimbing_tas');
    }
}
