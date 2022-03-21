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
            $table->float('point_1');
            $table->float('point_1_akhir');
            $table->float('point_2');
            $table->float('point_2_akhir');
            $table->float('point_3');
            $table->float('point_3_akhir');
            $table->float('point_4');
            $table->float('point_4_akhir');
            $table->float('point_5');
            $table->float('point_5_akhir');
            $table->float('point_6a');
            $table->float('point_6a_akhir');
            $table->float('point_6b');
            $table->float('point_6b_akhir');
            $table->float('point_7a');
            $table->float('point_7a_akhir');
            $table->float('point_7b');
            $table->float('point_7b_akhir');
            $table->float('point_8');
            $table->float('point_8_akhir');
            $table->float('point_9a');
            $table->float('point_9a_akhir');
            $table->float('point_9b');
            $table->float('point_9b_akhir');
            $table->float('point_10');
            $table->float('point_10_akhir');

            $table->float('point_11');
            $table->float('point_11_akhir');
            $table->float('point_12');
            $table->float('point_12_akhir');
            $table->float('point_13');
            $table->float('point_13_akhir');
            $table->float('point_14');
            $table->float('point_14_akhir');
            $table->float('point_15a');
            $table->float('point_15a_akhir');
            $table->float('point_15b');
            $table->float('point_15b_akhir');
            $table->float('point_16a');
            $table->float('point_16a_akhir');
            $table->float('point_16b');
            $table->float('point_16b_akhir');
            $table->float('point_17');
            $table->float('point_17_akhir');
            $table->float('point_18');
            $table->float('point_18_akhir');
            $table->float('point_19');
            $table->float('point_19_akhir');
            $table->float('point_20');
            $table->float('point_20_akhir');
            
            $table->float('point_21');
            $table->float('point_21_akhir');
            $table->float('point_22');
            $table->float('point_22_akhir');
            $table->float('point_23');
            $table->float('point_23_akhir');
            $table->float('point_24');
            $table->float('point_24_akhir');
            $table->float('point_25');
            $table->float('point_25_akhir');
            $table->float('point_26');
            $table->float('point_26_akhir');
            $table->float('point_27');
            $table->float('point_27_akhir');
            $table->float('point_28');
            $table->float('point_28_akhir');
            $table->float('point_29');
            $table->float('point_29_akhir');
            $table->float('point_30');
            $table->float('point_30_akhir');

            $table->float('point_31a');
            $table->float('point_31a_akhir');
            $table->float('point_31b');
            $table->float('point_31b_akhir');
            $table->float('point_32');
            $table->float('point_32_akhir');
            $table->float('point_33');
            $table->float('point_33_akhir');
            $table->float('point_34');
            $table->float('point_34_akhir');
            $table->float('point_35');
            $table->float('point_35_akhir');
            $table->float('point_36');
            $table->float('point_36_akhir');
            $table->float('point_37');
            $table->float('point_37_akhir');
            $table->float('point_38a');
            $table->float('point_38a_akhir');
            $table->float('point_38b');
            $table->float('point_38b_akhir');
            $table->float('point_38c');
            $table->float('point_38c_akhir');
            $table->float('point_39');
            $table->float('point_39_akhir');
            $table->float('point_40a');
            $table->float('point_40a_akhir');
            $table->float('point_40b');
            $table->float('point_40b_akhir');

            $table->float('point_41a');
            $table->float('point_41a_akhir');
            $table->float('point_41b');
            $table->float('point_41b_akhir');
            $table->float('point_41c');
            $table->float('point_41c_akhir');
            $table->float('point_41d');
            $table->float('point_41d_akhir');
            $table->float('point_41e');
            $table->float('point_41e_akhir');
            $table->float('point_42');
            $table->float('point_42_akhir');
            $table->float('point_43');
            $table->float('point_43_akhir');
            $table->float('point_44a');
            $table->float('point_44a_akhir');
            $table->float('point_44b');
            $table->float('point_44b_akhir');
            $table->float('point_44c');
            $table->float('point_44c_akhir');
            $table->float('point_45');
            $table->float('point_45_akhir');
            $table->float('point_46');
            $table->float('point_46_akhir');
            $table->float('point_47a');
            $table->float('point_47a_akhir');
            $table->float('point_47b');
            $table->float('point_47b_akhir');
            $table->float('point_48');
            $table->float('point_48_akhir');
            $table->float('point_49');
            $table->float('point_49_akhir');
            $table->float('point_50');
            $table->float('point_50_akhir');

            $table->float('point_51');
            $table->float('point_51_akhir');
            $table->float('point_52');
            $table->float('point_52_akhir');
            $table->float('point_53');
            $table->float('point_53_akhir');
            $table->float('point_54');
            $table->float('point_54_akhir');
            $table->float('point_55');
            $table->float('point_55_akhir');
            $table->float('point_56');
            $table->float('point_56_akhir');
            $table->float('point_57');
            $table->float('point_57_akhir');
            $table->float('point_58');
            $table->float('point_58_akhir');
            $table->float('point_59');
            $table->float('point_59_akhir');
            $table->float('point_60');
            $table->float('point_60_akhir');

            $table->float('point_61');
            $table->float('point_61_akhir');
            $table->float('point_62');
            $table->float('point_62_akhir');
            $table->float('point_63');
            $table->float('point_63_akhir');
            $table->float('point_64');
            $table->float('point_64_akhir');
            $table->float('point_65');
            $table->float('point_65_akhir');
            $table->float('point_66');
            $table->float('point_66_akhir');
            $table->float('point_67');
            $table->float('point_67_akhir');
            $table->float('point_68');
            $table->float('point_68_akhir');
            $table->float('point_69');
            $table->float('point_69_akhir');

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
        Schema::dropIfExists('simulasi_penilaians');
    }
}
