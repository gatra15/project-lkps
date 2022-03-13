<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSdmDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sdm_dosens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dosen');
            $table->string('nidn_nidk');
            $table->string('pendidikan_pasca_sarjana_magister');
            $table->string('pendidikan_pasca_sarjana_doktor');
            $table->string('bidang_keahlian');
            $table->string('kesesuaian_ps');
            $table->string('jabatan_akademik');
            $table->string('sertifikat_pendidik_profesi');
            $table->string('sertifikat_kompetensi');
            $table->string('mata_kuliah_akreditasi_diampu');
            $table->string('kesesuaian_mata_kuliah_diampu');
            $table->string('mata_kuliah_diampu_ps_lain');
            $table->string('slug');
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
        Schema::dropIfExists('sdm_dosens');
    }
}
