@extends('layouts.table')
<div id="printElement container-fluid">
    <table width="90%" id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">NO</th>
                <th class="align-middle" scope="col" rowspan="2">Jenis Penggunaan</th>
                <th scope="col" colspan="4">Unit Pengelola Program Studi (Rp.)</th>
                <th scope="col" colspan="4">Program Studi (Rp.)</th>
            </tr>
            <tr>
                <th scope="col">TS-2</th>
                <th scope="col">TS-1</th>
                <th scope="col">TS</th>
                <th scope="col">Rata-rata</th>
                <th scope="col">TS-2</th>
                <th scope="col">TS-1</th>
                <th scope="col">TS</th>
                <th scope="col">Rata-rata</th>
            </tr>
            <tr>
                <th class="text-left putih"></th>
                <th class="text-left putih"> Biaya Operasional Pendidikan </th>
                <th class="text-left putih"></th>
                <th class="text-left putih"></th>
                <th class="text-left putih"></th>
                <th class="text-left putih"></th>
                <th class="text-left putih"></th>
                <th class="text-left putih"></th>
                <th class="text-left putih"></th>
                <th class="text-left putih"></th>
            </tr>
    
        </thead>

        <tbody class="text-dark">
        {{-- ISI TABEL --}}
        <tr>
            <td>1</td>
            <td>a. Biaya Dosen (Gaji, Honor)</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Biaya operasional kemahasiswaan
                (penalaran, minat, bakat, dan
                kesejahteraan).</td>
        </tr>
        <tr>
            <td colspan="2" class="text-center"> <b>Jumlah </b></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        <thead>
            <tr>
                <th class="align-middle text-center" scope="col" rowspan="1">NO</th>
                <th class="align-middle text-center" scope="col" rowspan="1">Jenis Penggunaan</th>
                <th class="align-middle text-center" scope="col">TS-2</th>
                <th class="align-middle text-center" scope="col">TS-1</th>
                <th class="align-middle text-center" scope="col">TS</th>
                <th class="align-middle text-center" scope="col">Rata-rata</th>
                <th class="align-middle text-center" scope="col">TS-2</th>
                <th class="align-middle text-center" scope="col">TS-1</th>
                <th class="align-middle text-center" scope="col">TS</th>
                <th class="align-middle text-center" scope="col">Rata-rata</th>
            </tr>
        </thead>

        <tbody class="text-dark">
            {{-- ISI TABEL --}}
            <tr>
                <td>3</td>
                <td>Biaya Penelitian</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Biaya PKM</td>
            </tr>
            <tr>
                <td colspan="2" class="text-center"> <b>Jumlah </b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>

        <thead>
            <tr>
                <th class="align-middle text-center" scope="col" rowspan="1">NO</th>
                <th class="align-middle text-center" scope="col" rowspan="1">Jenis Penggunaan</th>
                <th class="align-middle text-center" scope="col">TS-2</th>
                <th class="align-middle text-center" scope="col">TS-1</th>
                <th class="align-middle text-center" scope="col">TS</th>
                <th class="align-middle text-center" scope="col">Rata-rata</th>
                <th class="align-middle text-center" scope="col">TS-2</th>
                <th class="align-middle text-center" scope="col">TS-1</th>
                <th class="align-middle text-center" scope="col">TS</th>
                <th class="align-middle text-center" scope="col">Rata-rata</th>
            </tr>
        </thead>

        <tbody class="text-dark">
            {{-- ISI TABEL --}}
            <tr>
                <td>5</td>
                <td>Biaya Investasi</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Biaya PKM</td>
            </tr>

            <tr>
                <td colspan="2" class="text-center"> <b>Jumlah </b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td colspan="2" class="text-center"> <b>TOTAL </b></td>
            </tr>
            </tbody>

        </table> 
    </div>