<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmKinerjaDosenProdukDtpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_kinerja_dosen_produk_dtps', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('produk');
            $table->string('deskripsi');
            $table->string('bukti');
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
        Schema::dropIfExists('sdm_kinerja_dosen_produk_dtps');
    }
}
