<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIdentitasPengusulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('identitas_pengusuls', function (Blueprint $table) {
            $table->id();
            $table->string('perguruan_tinggi');
            $table->string('unit_pengelola');
            $table->string('jenis_program');
            $table->string('prodi');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('email_website');
            $table->string('no_sk1');
            $table->string('tanggal_sk_pendirian');
            $table->string('pejabat_penandatanganan');
            $table->string('no_sk2');
            $table->string('tanggal_sk_pembukaan');
            $table->string('pejabat_pembukaan');
            $table->string('sk_pembukaan');
            $table->string('tahun_pertama');
            $table->string('peningkatan_terbaru');
            $table->string('nomor_sk_banpt');
            $table->string('created_by')->nullable(true);
            $table->timestamp('updated_by')->nullable(true);
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
        Schema::dropIfExists('identitas_pengusuls');
    }
}
