@extends('layouts.table')
<div id="print-table2">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
        <tr>

        <th class="align-middle" scope="col" rowspan="1">No</th>
        <th class="align-middle" scope="col" rowspan="1">Judul Luaran Penelitian/PkM</th>
        <th class="align-middle" scope="col" rowspan="1">Tahun</th>
        <th class="align-middle" scope="col" rowspan="1">Keterangan</th>
        <th class="align-middle" scope="col" rowspan="1">Bukti</th>
        @hasrole('perwakilan')
        <th class="align-middle" scope="col" rowspan="1"> Opsi </th>           
        @endhasrole                                    
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
                @hasrole('perwakilan')
                <th class="putih align-middle"><ul class="action-list align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-warning align-middle" data-toggle="modal" data-target="#modalluarantambah"><i class="fas fa-plus"></i></a></li>
                </th>
                @endrole
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
                <td>
                    @if ($data->bukti == 'Tidak ada file yang ditambahkan' )
                    <a class="btn btn-warning" href="{{ asset('storage/'.$data->bukti) }}"> 
                        Belum ada File <i class="fas fa-exclamation-triangle"></i>
                    </a>     
                    @else
                    <a class="btn btn-success" href="{{ asset('storage/'.$data->bukti) }}"> 
                        File <i class="fas fa-file-archive"></i>
                    </a>
                    @endif
                </td>
                @hasrole('perwakilan')
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenluaranedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/luaran-dtps/{{ $data->id }}" data-toggle="modal" data-target="#modaldosenluarandelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
            </tr>
            @endif
            @endforeach
            
            

            <tr>
                <td class="bold text-center" rowspan="1" colspan="2"> <b>Jumlah</b></td>
                <td class="bold text-left" rowspan="1" colspan="1"> <b>N<sub>A</sub>= {{ $luaran['na'] }}</b></td>
                <td class="bold text-center" rowspan="1" colspan="1"></td>
                <td></td>
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
                @hasrole('perwakilan')
                <th class="putih align-middle"><ul class="action-list align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-warning align-middle" data-toggle="modal" data-target="#modalluarantambah2"><i class="fas fa-plus"></i></a></li></th>
                @endhasrole
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
                <td>
                    @if ($data->bukti == 'Tidak ada file yang ditambahkan' )
                    <a class="btn btn-warning" href="{{ asset('storage/'.$data->bukti) }}"> 
                        Belum ada File <i class="fas fa-exclamation-triangle"></i>
                    </a>     
                    @else
                    <a class="btn btn-success" href="{{ asset('storage/'.$data->bukti) }}"> 
                        File <i class="fas fa-file-archive"></i>
                    </a>
                    @endif
                </td>
                @hasrole('perwakilan')
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenluaranedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/luaran-dtps/{{ $data->id }}" data-toggle="modal" data-target="#modaldosenluarandelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
            </tr>
            @endif
            @endforeach

            <tr>
                <td class="bold text-center" rowspan="1" colspan="2"> <b>Jumlah</b></td>
                <td class="bold text-left" rowspan="1" colspan="1"> <b>N<sub>B</sub>= {{ $luaran['nb'] }}</b></td>
                <td class="bold text-center" rowspan="1" colspan="1"></td>
                <td></td>
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
                @hasrole('perwakilan')
                <th class="putih align-middle"><ul class="action-list align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-warning align-middle" data-toggle="modal" data-target="#modalluarantambah3"><i class="fas fa-plus"></i></a></li></th>
                @endhasrole
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
                <td>
                    @if ($data->bukti == 'Tidak ada file yang ditambahkan' )
                    <a class="btn btn-warning" href="{{ asset('storage/'.$data->bukti) }}"> 
                        Belum ada File <i class="fas fa-exclamation-triangle"></i>
                    </a>     
                    @else
                    <a class="btn btn-success" href="{{ asset('storage/'.$data->bukti) }}"> 
                        File <i class="fas fa-file-archive"></i>
                    </a>
                    @endif
                </td>
                @hasrole('perwakilan')
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenluaranedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/luaran-dtps/{{ $data->id }}" data-toggle="modal" data-target="#modaldosenluarandelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
            </tr>
            @endif
            @endforeach

            <tr>
                <td class="bold text-center" rowspan="1" colspan="2"> <b>Jumlah</b></td>
                <td class="bold text-left" rowspan="1" colspan="1"> <b>N<sub>C</sub>= {{ $luaran['nc'] }}</b></td>
                <td class="bold text-center" rowspan="1" colspan="1"></td>
                <td></td>
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
                @hasrole('perwakilan')
                <th class="putih align-middle"><ul class="action-list align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-warning align-middle" data-toggle="modal" data-target="#modalluarantambah4"><i class="fas fa-plus"></i></a></li></th>
                @endhasrole
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
                <td>
                    @if ($data->bukti == 'Tidak ada file yang ditambahkan' )
                    <a class="btn btn-warning" href="{{ asset('storage/'.$data->bukti) }}"> 
                        Belum ada File <i class="fas fa-exclamation-triangle"></i>
                    </a>     
                    @else
                    <a class="btn btn-success" href="{{ asset('storage/'.$data->bukti) }}"> 
                        File <i class="fas fa-file-archive"></i>
                    </a>
                    @endif
                </td>
                @hasrole('perwakilan')
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenluaranedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/luaran-dtps/{{ $data->id }}" data-toggle="modal" data-target="#modaldosenluarandelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
            </tr>
            @endif
            @endforeach

            <tr>
                <td class="bold text-center" rowspan="1" colspan="2"> <b>Jumlah</b></td>
                <td class="bold text-left" rowspan="1" colspan="1"> <b>N<sub>D</sub>= {{ $luaran['nd'] }}</b></td>
                <td class="bold text-center" rowspan="1" colspan="1"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
     
    </table> 
</div>