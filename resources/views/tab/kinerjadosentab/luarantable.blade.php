@extends('layouts.table')
<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
        <tr>

        <th class="align-middle" scope="col" rowspan="1">No</th>
        <th class="align-middle" scope="col" rowspan="1">Judul Luaran Penelitian/PkM</th>
        <th class="align-middle" scope="col" rowspan="1">Tahun</th>
        <th class="align-middle" scope="col" rowspan="1">Keterangan</th>
        <th class="align-middle" scope="col" rowspan="1"> Opsi </th>                                               
        </tr>
        </thead>

        {{-- HK 1 --}}
        <thead>
            <tr>
                <th class="putih align-middle text-center" rowspan="3"> I </th>
                <th class="putih align-middle text-left" rowspan="3"> <b>HKI</b><sup>1)</sup>: <br>
                    a) Paten, <br>
                    b) Paten Sederhana</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>No</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody class="text-dark">
            {{-- TABLE CONTENT --}}
            {{-- foreach --}}
            {{-- if --}}
            <tr>
                <td>1</td>
                <td>eko </td>
                <td>1</td>
                <td>1</td>
            </tr>
            {{-- endforeach --}}
            {{-- endif --}}
            

            <tr>
                <td class="bold text-center" rowspan="1" colspan="2"> <b>Jumlah</b></td>
                <td class="bold text-left" rowspan="1" colspan="1"> <b>N<sub>A</sub>=</b></td>
                <td class="bold text-center" rowspan="1" colspan="1"></td>
                <td></td>
            </tr>
        </tbody>

        {{-- HK 2 --}}
        <thead>
            <tr>
                <th class="putih align-middle text-center" rowspan="3"> II </th>
                <th class="putih align-middle text-left" rowspan="3"> <b>HKI</b><sup>2)</sup>: <br>
                    a) Hak Cipta, <br>
                    b) Desain Produk Industri, <br>
                    c) Perlindungan Varietas Tanaman (Sertifikat <br>
                    Perlindungan Varietas Tanaman, Sertifikat <br>
                    Pelepasan Varietas, Sertifikat Pendaftaran <br>
                    Varietas), <br>
                    d) Desain Tata Letak Sirkuit Terpadu, <br>
                    e) dll.)</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>No</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody class="text-dark">
                {{-- TABLE CONTENT --}}
                {{-- foreach --}}
                {{-- if --}}
                <tr>
                    <td>1</td>
                    <td>eko </td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                {{-- endforeach --}}
                {{-- endif --}}

            <tr>
                <td class="bold text-center" rowspan="1" colspan="2"> <b>Jumlah</b></td>
                <td class="bold text-left" rowspan="1" colspan="1"> <b>N<sub>B</sub>=</b></td>
                <td class="bold text-center" rowspan="1" colspan="1"></td>
                <td></td>
            </tr>
        </tbody>

        {{-- HK 3 --}}
        <thead>
            <tr>
                <th class="putih align-middle text-center" rowspan="3"> III </th>
                <th class="putih align-middle text-left" rowspan="3"> 
                    Teknologi Tepat Guna, Produk (Produk <br>
                    Terstandarisasi, Produk Tersertifikasi), Karya <br>
                    Seni, Rekayasa Sosial <br>
                    
                </th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>No</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody class="text-dark">
                {{-- TABLE CONTENT --}}
                {{-- foreach --}}
                {{-- if --}}
                <tr>
                    <td>1</td>
                    <td>eko </td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                {{-- endforeach --}}
                {{-- endif --}}

            <tr>
                <td class="bold text-center" rowspan="1" colspan="2"> <b>Jumlah</b></td>
                <td class="bold text-left" rowspan="1" colspan="1"> <b>N<sub>B</sub>=</b></td>
                <td class="bold text-center" rowspan="1" colspan="1"></td>
                <td></td>
            </tr>
        </tbody>

        {{-- HK 4 --}}
        <thead>
            <tr>
                <th class="putih align-middle text-center" rowspan="3"> IV </th>
                <th class="putih align-middle text-left" rowspan="3"> 
                    Buku ber-ISBN, <i>Book Chapter</i> 
                </th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>No</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody class="text-dark">
                {{-- TABLE CONTENT --}}
                {{-- foreach --}}
                {{-- if --}}
                <tr>
                    <td>1</td>
                    <td>eko </td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                {{-- endforeach --}}
                {{-- endif --}}

            <tr>
                <td class="bold text-center" rowspan="1" colspan="2"> <b>Jumlah</b></td>
                <td class="bold text-left" rowspan="1" colspan="1"> <b>N<sub>B</sub>=</b></td>
                <td class="bold text-center" rowspan="1" colspan="1"></td>
                <td></td>
            </tr>
        </tbody>
     
    </table> 
</div>