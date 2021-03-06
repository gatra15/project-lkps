<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKesesuaianBidangKerjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesesuaian_bidang_kerjas', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_lulusan')->nullable(true);
            $table->integer('jumlah_lulusan_terlacak')->nullable(true);
            $table->string('kesesuaian_rendah')->nullable(true);
            $table->string('kesesuaian_sedang')->nullable(true);
            $table->string('kesesuaian_tinggi')->nullable(true);
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
        Schema::dropIfExists('kesesuaian_bidang_kerjas');
    }
}
