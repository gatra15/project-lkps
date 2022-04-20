<?php

namespace App\Exports;

use App\Models\SimulasiPenilaian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SimulasiExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        $array = [
            'point 1',
            'point 1 akhir',
            'point 2',
            'point 2 akhir',
            'point 3',
            'point 3 akhir',
            'point 4',
            'point 4 akhir',
            'point 5',
            'point 5 akhir',
            'point 6a',
            'point 6b',
            'point 6 akhir',
            'point 7a',
            'point 7b',
            'point 7 akhir',
            'point 8',
            'point 8 akhir',
            'point 9a',
            'point 9b',
            'point 9 akhir',
            'point 10',
            'point 10 akhir',

            'point 11',
            'point 11 akhir',
            'point 12',
            'point 12 akhir',
            'point 13',
            'point 13 akhir',
            'point 14a',
            'point 14b',
            'point 14 akhir',
            'point 15a',
            'point 15b',
            'point 15 akhir',
            'point 16a',
            'point 16b',
            'point 16 akhir',
            'point 17',
            'point 17 akhir',
            'point 18',
            'point 18 akhir',
            'point 19',
            'point 19 akhir',
            'point 20',
            'point 20 akhir',
            
            'point 21',
            'point 21 akhir',
            'point 22',
            'point 22 akhir',
            'point 23',
            'point 23 akhir',
            'point 24',
            'point 24 akhir',
            'point 25',
            'point 25 akhir',
            'point 26',
            'point 26 akhir',
            'point 27',
            'point 27 akhir',
            'point 28',
            'point 28 akhir',
            'point 29',
            'point 29 akhir',
            'point 30',
            'point 30 akhir',

            'point 31a',
            'point 31b',
            'point 31 akhir',
            'point 32',
            'point 32 akhir',
            'point 33',
            'point 33 akhir',
            'point 34',
            'point 34 akhir',
            'point 35',
            'point 35 akhir',
            'point 36',
            'point 36 akhir',
            'point 37',
            'point 37 akhir',
            'point 38a',
            'point 38b',
            'point 38c',
            'point 38 akhir',
            'point 39',
            'point 39 akhir',
            'point 40a',
            'point 40b',
            'point 40 akhir',

            'point 41a',
            'point 41b',
            'point 41c',
            'point 41d',
            'point 41e',
            'point 41 akhir',
            'point 42',
            'point 42 akhir',
            'point 43',
            'point 43 akhir',
            'point 44a',
            'point 44b',
            'point 44c',
            'point 44 akhir',
            'point 45',
            'point 45 akhir',
            'point 46',
            'point 46 akhir',
            'point 47a',
            'point 47b',
            'point 47 akhir',
            'point 48',
            'point 48 akhir',
            'point 49',
            'point 49 akhir',
            'point 50',
            'point 50 akhir',

            'point 51',
            'point 51 akhir',
            'point 52',
            'point 52 akhir',
            'point 53',
            'point 53 akhir',
            'point 54',
            'point 54 akhir',
            'point 55',
            'point 55 akhir',
            'point 56',
            'point 56 akhir',
            'point 57',
            'point 57 akhir',
            'point 58',
            'point 58 akhir',
            'point 59',
            'point 59 akhir',
            'point 60',
            'point 60 akhir',

            'point 61',
            'point 61 akhir',
            'point 62',
            'point 62 akhir',
            'point 63',
            'point 63 akhir',
            'point 64',
            'point 64 akhir',
            'point 65',
            'point 65 akhir',
            'point 66',
            'point 66 akhir',
            'point 67',
            'point 67 akhir',
            'point 68',
            'point 68 akhir',
            'point 69',
            'point 69 akhir',

            'tahun laporan',
            'prodi',
        ];
        return $array;
    }

    public function collection()
    {
        $array = [
            'point_1',
            'point_1_akhir',
            'point_2',
            'point_2_akhir',
            'point_3',
            'point_3_akhir',
            'point_4',
            'point_4_akhir',
            'point_5',
            'point_5_akhir',
            'point_6a',
            'point_6b',
            'point_6_akhir',
            'point_7a',
            'point_7b',
            'point_7_akhir',
            'point_8',
            'point_8_akhir',
            'point_9a',
            'point_9b',
            'point_9_akhir',
            'point_10',
            'point_10_akhir',

            'point_11',
            'point_11_akhir',
            'point_12',
            'point_12_akhir',
            'point_13',
            'point_13_akhir',
            'point_14a',
            'point_14b',
            'point_14_akhir',
            'point_15a',
            'point_15b',
            'point_15_akhir',
            'point_16a',
            'point_16b',
            'point_16_akhir',
            'point_17',
            'point_17_akhir',
            'point_18',
            'point_18_akhir',
            'point_19',
            'point_19_akhir',
            'point_20',
            'point_20_akhir',
            
            'point_21',
            'point_21_akhir',
            'point_22',
            'point_22_akhir',
            'point_23',
            'point_23_akhir',
            'point_24',
            'point_24_akhir',
            'point_25',
            'point_25_akhir',
            'point_26',
            'point_26_akhir',
            'point_27',
            'point_27_akhir',
            'point_28',
            'point_28_akhir',
            'point_29',
            'point_29_akhir',
            'point_30',
            'point_30_akhir',

            'point_31a',
            'point_31b',
            'point_31_akhir',
            'point_32',
            'point_32_akhir',
            'point_33',
            'point_33_akhir',
            'point_34',
            'point_34_akhir',
            'point_35',
            'point_35_akhir',
            'point_36',
            'point_36_akhir',
            'point_37',
            'point_37_akhir',
            'point_38a',
            'point_38b',
            'point_38c',
            'point_38_akhir',
            'point_39',
            'point_39_akhir',
            'point_40a',
            'point_40b',
            'point_40_akhir',

            'point_41a',
            'point_41b',
            'point_41c',
            'point_41d',
            'point_41e',
            'point_41_akhir',
            'point_42',
            'point_42_akhir',
            'point_43',
            'point_43_akhir',
            'point_44a',
            'point_44b',
            'point_44c',
            'point_44_akhir',
            'point_45',
            'point_45_akhir',
            'point_46',
            'point_46_akhir',
            'point_47a',
            'point_47b',
            'point_47_akhir',
            'point_48',
            'point_48_akhir',
            'point_49',
            'point_49_akhir',
            'point_50',
            'point_50_akhir',

            'point_51',
            'point_51_akhir',
            'point_52',
            'point_52_akhir',
            'point_53',
            'point_53_akhir',
            'point_54',
            'point_54_akhir',
            'point_55',
            'point_55_akhir',
            'point_56',
            'point_56_akhir',
            'point_57',
            'point_57_akhir',
            'point_58',
            'point_58_akhir',
            'point_59',
            'point_59_akhir',
            'point_60',
            'point_60_akhir',

            'point_61',
            'point_61_akhir',
            'point_62',
            'point_62_akhir',
            'point_63',
            'point_63_akhir',
            'point_64',
            'point_64_akhir',
            'point_65',
            'point_65_akhir',
            'point_66',
            'point_66_akhir',
            'point_67',
            'point_67_akhir',
            'point_68',
            'point_68_akhir',
            'point_69',
            'point_69_akhir',

            'tahun_laporan',
            'prodi',
        ];

        return SimulasiPenilaian::select($array)->get();
    }
}