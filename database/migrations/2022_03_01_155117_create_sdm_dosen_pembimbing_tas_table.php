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
            $table->integer('jumlah_ps_akreditasi_ts2');
            $table->integer('jumlah_ps_akreditasi_ts1');
            $table->integer('jumlah_ps_akreditasi_ts');
            $table->float('jumlah_ps_akreditasi_average');
            $table->integer('jumlah_ps_lain_ts2');
            $table->integer('jumlah_ps_lain_ts1');
            $table->integer('jumlah_ps_lain_ts');
            $table->float('jumlah_ps_lain_average');
            $table->float('average');
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
        Schema::dropIfExists('sdm_dosen_pembimbing_tas');
    }
}
