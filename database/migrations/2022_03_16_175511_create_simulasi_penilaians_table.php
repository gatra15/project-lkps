<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulasiPenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulasi_penilaians', function (Blueprint $table) {
            $table->id();
            $table->float('point_1')->nullable(true);
            $table->float('point_1_akhir')->nullable(true);
            $table->float('point_2')->nullable(true);
            $table->float('point_2_akhir')->nullable(true);
            $table->float('point_3')->nullable(true);
            $table->float('point_3_akhir')->nullable(true);
            $table->float('point_4')->nullable(true);
            $table->float('point_4_akhir')->nullable(true);
            $table->float('point_5')->nullable(true);
            $table->float('point_5_akhir')->nullable(true);
            $table->float('point_6a')->nullable(true);
            $table->float('point_6a_akhir')->nullable(true);
            $table->float('point_6b')->nullable(true);
            $table->float('point_6b_akhir')->nullable(true);
            $table->float('point_7a')->nullable(true);
            $table->float('point_7a_akhir')->nullable(true);
            $table->float('point_7b')->nullable(true);
            $table->float('point_7b_akhir')->nullable(true);
            $table->float('point_8')->nullable(true);
            $table->float('point_8_akhir')->nullable(true);
            $table->float('point_9a')->nullable(true);
            $table->float('point_9a_akhir')->nullable(true);
            $table->float('point_9b')->nullable(true);
            $table->float('point_9b_akhir')->nullable(true);
            $table->float('point_10')->nullable(true);
            $table->float('point_10_akhir')->nullable(true);

            $table->float('point_11')->nullable(true);
            $table->float('point_11_akhir')->nullable(true);
            $table->float('point_12')->nullable(true);
            $table->float('point_12_akhir')->nullable(true);
            $table->float('point_13')->nullable(true);
            $table->float('point_13_akhir')->nullable(true);
            $table->float('point_14')->nullable(true);
            $table->float('point_14_akhir')->nullable(true);
            $table->float('point_15a')->nullable(true);
            $table->float('point_15a_akhir')->nullable(true);
            $table->float('point_15b')->nullable(true);
            $table->float('point_15b_akhir')->nullable(true);
            $table->float('point_16a')->nullable(true);
            $table->float('point_16a_akhir')->nullable(true);
            $table->float('point_16b')->nullable(true);
            $table->float('point_16b_akhir')->nullable(true);
            $table->float('point_17')->nullable(true);
            $table->float('point_17_akhir')->nullable(true);
            $table->float('point_18')->nullable(true);
            $table->float('point_18_akhir')->nullable(true);
            $table->float('point_19')->nullable(true);
            $table->float('point_19_akhir')->nullable(true);
            $table->float('point_20')->nullable(true);
            $table->float('point_20_akhir')->nullable(true);
            
            $table->float('point_21')->nullable(true);
            $table->float('point_21_akhir')->nullable(true);
            $table->float('point_22')->nullable(true);
            $table->float('point_22_akhir')->nullable(true);
            $table->float('point_23')->nullable(true);
            $table->float('point_23_akhir')->nullable(true);
            $table->float('point_24')->nullable(true);
            $table->float('point_24_akhir')->nullable(true);
            $table->float('point_25')->nullable(true);
            $table->float('point_25_akhir')->nullable(true);
            $table->float('point_26')->nullable(true);
            $table->float('point_26_akhir')->nullable(true);
            $table->float('point_27')->nullable(true);
            $table->float('point_27_akhir')->nullable(true);
            $table->float('point_28')->nullable(true);
            $table->float('point_28_akhir')->nullable(true);
            $table->float('point_29')->nullable(true);
            $table->float('point_29_akhir')->nullable(true);
            $table->float('point_30')->nullable(true);
            $table->float('point_30_akhir')->nullable(true);

            $table->float('point_31a')->nullable(true);
            $table->float('point_31a_akhir')->nullable(true);
            $table->float('point_31b')->nullable(true);
            $table->float('point_31b_akhir')->nullable(true);
            $table->float('point_32')->nullable(true);
            $table->float('point_32_akhir')->nullable(true);
            $table->float('point_33')->nullable(true);
            $table->float('point_33_akhir')->nullable(true);
            $table->float('point_34')->nullable(true);
            $table->float('point_34_akhir')->nullable(true);
            $table->float('point_35')->nullable(true);
            $table->float('point_35_akhir')->nullable(true);
            $table->float('point_36')->nullable(true);
            $table->float('point_36_akhir')->nullable(true);
            $table->float('point_37')->nullable(true);
            $table->float('point_37_akhir')->nullable(true);
            $table->float('point_38a')->nullable(true);
            $table->float('point_38a_akhir')->nullable(true);
            $table->float('point_38b')->nullable(true);
            $table->float('point_38b_akhir')->nullable(true);
            $table->float('point_38c')->nullable(true);
            $table->float('point_38c_akhir')->nullable(true);
            $table->float('point_39')->nullable(true);
            $table->float('point_39_akhir')->nullable(true);
            $table->float('point_40a')->nullable(true);
            $table->float('point_40a_akhir')->nullable(true);
            $table->float('point_40b')->nullable(true);
            $table->float('point_40b_akhir')->nullable(true);

            $table->float('point_41a')->nullable(true);
            $table->float('point_41a_akhir')->nullable(true);
            $table->float('point_41b')->nullable(true);
            $table->float('point_41b_akhir')->nullable(true);
            $table->float('point_41c')->nullable(true);
            $table->float('point_41c_akhir')->nullable(true);
            $table->float('point_41d')->nullable(true);
            $table->float('point_41d_akhir')->nullable(true);
            $table->float('point_41e')->nullable(true);
            $table->float('point_41e_akhir')->nullable(true);
            $table->float('point_42')->nullable(true);
            $table->float('point_42_akhir')->nullable(true);
            $table->float('point_43')->nullable(true);
            $table->float('point_43_akhir')->nullable(true);
            $table->float('point_44a')->nullable(true);
            $table->float('point_44a_akhir')->nullable(true);
            $table->float('point_44b')->nullable(true);
            $table->float('point_44b_akhir')->nullable(true);
            $table->float('point_44c')->nullable(true);
            $table->float('point_44c_akhir')->nullable(true);
            $table->float('point_45')->nullable(true);
            $table->float('point_45_akhir')->nullable(true);
            $table->float('point_46')->nullable(true);
            $table->float('point_46_akhir')->nullable(true);
            $table->float('point_47a')->nullable(true);
            $table->float('point_47a_akhir')->nullable(true);
            $table->float('point_47b')->nullable(true);
            $table->float('point_47b_akhir')->nullable(true);
            $table->float('point_48')->nullable(true);
            $table->float('point_48_akhir')->nullable(true);
            $table->float('point_49')->nullable(true);
            $table->float('point_49_akhir')->nullable(true);
            $table->float('point_50')->nullable(true);
            $table->float('point_50_akhir')->nullable(true);

            $table->float('point_51')->nullable(true);
            $table->float('point_51_akhir')->nullable(true);
            $table->float('point_52')->nullable(true);
            $table->float('point_52_akhir')->nullable(true);
            $table->float('point_53')->nullable(true);
            $table->float('point_53_akhir')->nullable(true);
            $table->float('point_54')->nullable(true);
            $table->float('point_54_akhir')->nullable(true);
            $table->float('point_55')->nullable(true);
            $table->float('point_55_akhir')->nullable(true);
            $table->float('point_56')->nullable(true);
            $table->float('point_56_akhir')->nullable(true);
            $table->float('point_57')->nullable(true);
            $table->float('point_57_akhir')->nullable(true);
            $table->float('point_58')->nullable(true);
            $table->float('point_58_akhir')->nullable(true);
            $table->float('point_59')->nullable(true);
            $table->float('point_59_akhir')->nullable(true);
            $table->float('point_60')->nullable(true);
            $table->float('point_60_akhir')->nullable(true);

            $table->float('point_61')->nullable(true);
            $table->float('point_61_akhir')->nullable(true);
            $table->float('point_62')->nullable(true);
            $table->float('point_62_akhir')->nullable(true);
            $table->float('point_63')->nullable(true);
            $table->float('point_63_akhir')->nullable(true);
            $table->float('point_64')->nullable(true);
            $table->float('point_64_akhir')->nullable(true);
            $table->float('point_65')->nullable(true);
            $table->float('point_65_akhir')->nullable(true);
            $table->float('point_66')->nullable(true);
            $table->float('point_66_akhir')->nullable(true);
            $table->float('point_67')->nullable(true);
            $table->float('point_67_akhir')->nullable(true);
            $table->float('point_68')->nullable(true);
            $table->float('point_68_akhir')->nullable(true);
            $table->float('point_69')->nullable(true);
            $table->float('point_69_akhir')->nullable(true);

            $table->integer('tahun_laporan');
            $table->boolean('is_approved')->default(false);
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
        Schema::dropIfExists('simulasi_penilaians');
    }
}
