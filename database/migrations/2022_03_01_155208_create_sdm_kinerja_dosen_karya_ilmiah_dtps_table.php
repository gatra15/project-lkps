<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmKinerjaDosenKaryaIlmiahDtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_kinerja_dosen_karya_ilmiah_dtps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('judul');
            $table->string('jumlah_sitasi');
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
        Schema::dropIfExists('sdm_kinerja_dosen_karya_ilmiah_dtps');
    }
}
