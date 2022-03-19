<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('upps', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_program');
            $table->string('program_studi');
            $table->string('status_peringkat');
            $table->string('no_sk');
            $table->date('tanggal_kadaluarsa');
            $table->string('jumlah_mahasiswa');
            $table->integer('tahun_laporan');
            $table->string('prodi');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('upps');
    }
}
