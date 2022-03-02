@extends('partials.sidebar')
@extends('layouts.main')

@section('content')

<!-- JUDUL -->
<div class="content-header">
    <div class="container-fluid">
            <h1>PKM</h1>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
            <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#" role="tab" aria-controls="kualitas" aria-selected="true">PkM DTPS yang Melibatkan Mahasiswa</a>
            </li>
        </ul>
    </div>

    <!-- ISI BODY  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-pane active" id="kerjasama" role="tabpanel">
                <p class="d-flex justify-content-between">
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Deskripsi
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        Tambah data
                    </button>
                </p>
                <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <p>Tuliskan kerjasama tridharma di Unit Pengelola Program Studi (UPPS) dalam 3 tahun terakhir dengan mengikuti format Tabel 1 berikut ini.</p>
                    Keterangan:
                    <ol>
                        <li>Beri tanda V pada kolom yang sesuai</li>
                        <li>Diisi dengan judul kegiatan kerjasama yang sudah terimplementasikan, melibatkan sumber daya dan memberikan manfaat bagi Program Studi yang diakreditasi.</li>
                        <li>Bukti kerjasama dapat berupa Surat Penugasan, Surat Perjanjian Kerjasama (SPK), 
                            bukti-bukti pelaksanaan (laporan, hasil kerjasama, luaran kerjasama), atau bukti lain 
                            yang relevan. Dokumen Memorandum of Understanding (MoU), Memorandum of 
                            Agreement (MoA), atau dokumen sejenis yang memayungi pelaksanaan kerjasama,
                            tidak dapat dijadikan bukti realisasi kerjasama</li>
                    </ol>
    
                </div> 

</div>
</div>
{{-- CONTENT --}}
    
<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                <th class="align-middle" scope="col" rowspan="2">Tema PkM Sesuai Roadmap</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Mahasiswa</th>
                <th class="align-middle" scope="col" rowspan="2">Judul Kegiatan</th>
                <th class="align-middle" scope="col" rowspan="2">Tahun</th>

            </tr>
    
        </thead>

        <tbody class="text-dark">
            <tr>
                <td>Eko</td>
                <td>Eko</td>
                <td>Eko</td>
                <td>Eko</td>
                <td>Eko</td>
            </tr>
            {{-- @foreach ($mahasiswa_asing as $mhs)
                <tr>
                    @for ($i = 0; $i < $count; $i++)
                    <td>{{ $i }}</td>
                    @endfor
                   <td>{{ $mhs->daya_tampung }}</td> 
                   <td>{{ $mhs->c_pendaftar }}</td> 
                   <td>{{ $mhs->c_lulus_seleksi }}</td> 
                   <td>{{ $mhs->mahasiswa_reguler }}</td> 
                   <td>{{ $mhs->mahasiswa_transfer }}</td> 
                   <td>{{ $mhs->mahasiswa_aktif_reguler }}</td> 
                   <td>{{ $mhs->mahasiswa_aktif_transfer }}</td>
                </tr>
            @endforeach --}}
    </table> 
</div>

{{-- AKHIR CONTENT --}}
</div>
@endsection