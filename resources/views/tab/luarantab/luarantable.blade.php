@extends('layouts.table')
<div id="print-table2">
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
                <th class="putih align-middle"><ul class="action-list align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-warning align-middle" data-toggle="modal" data-target="#modalluarantambah"><i class="fas fa-plus"></i></a></li></th>
            </tr>
        </thead>


        <tbody class="text-dark">
            {{-- TABLE CONTENT --}}
            @foreach($luaran['data'] as $data)
            @if( $data->type_luaran == 'I')
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->tahun }}</td>
                <td>{{ $data->keterangan }}</td>
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalluaranedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/luaran-mahasiswa/{{ $data->id }}" data-toggle="modal" data-target="#modalluarandelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
            </tr>
            @endif
            @endforeach
            
            

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
                <th class="putih align-middle"><ul class="action-list align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-warning align-middle" data-toggle="modal" data-target="#modalluarantambah2"><i class="fas fa-plus"></i></a></li></th>
            </tr>
        </thead>


        <tbody class="text-dark">
                {{-- TABLE CONTENT --}}
                {{-- TABLE CONTENT --}}
            @foreach($luaran['data'] as $data)
            @if( $data->type_luaran == 'II')
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->tahun }}</td>
                <td>{{ $data->keterangan }}</td>
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalluaranedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/luaran-mahasiswa/{{ $data->id }}" data-toggle="modal" data-target="#modalluarandelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
            </tr>
            @endif
            @endforeach

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
                <th class="putih align-middle"><ul class="action-list align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-warning align-middle" data-toggle="modal" data-target="#modalluarantambah3"><i class="fas fa-plus"></i></a></li></th>
            </tr>
        </thead>


        <tbody class="text-dark">
                {{-- TABLE CONTENT --}}
                @foreach($luaran['data'] as $data)
            @if( $data->type_luaran == 'III')
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->tahun }}</td>
                <td>{{ $data->keterangan }}</td>
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalluaranedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/luaran-mahasiswa/{{ $data->id }}" data-toggle="modal" data-target="#modalluarandelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
            </tr>
            @endif
            @endforeach

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
                <th class="putih align-middle"><ul class="action-list align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-warning align-middle" data-toggle="modal" data-target="#modalluarantambah4"><i class="fas fa-plus"></i></a></li></th>
            </tr>
        </thead>

        <tbody class="text-dark">
                {{-- TABLE CONTENT --}}
                @foreach($luaran['data'] as $data)
            @if( $data->type_luaran == 'IV')
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->tahun }}</td>
                <td>{{ $data->keterangan }}</td>
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalluaranedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/luaran-mahasiswa/{{ $data->id }}" data-toggle="modal" data-target="#modalluarandelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
            </tr>
            @endif
            @endforeach

            <tr>
                <td class="bold text-center" rowspan="1" colspan="2"> <b>Jumlah</b></td>
                <td class="bold text-left" rowspan="1" colspan="1"> <b>N<sub>B</sub>=</b></td>
                <td class="bold text-center" rowspan="1" colspan="1"></td>
                <td></td>
            </tr>
        </tbody>
     
    </table> 
</div>