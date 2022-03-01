@extends('partials/sidebar')
@extends('layouts.main')

@section('content')
<!-- JUDUL -->
<div class="content-header">
    <div class="container-fluid">
            <h1>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</h1>
    </div>
</div>


<div class="content">
<div class="container-fluid">
        <div class="card">
<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#kerjasama" role="tab"  aria-controls="kerjasama" aria-selected="true">Kerjasama</a>
        </li>
    </ul>
</div>

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
    
    <table class="table">
        <thead>

            <tr>
                <th scope="col">No</th>
                <th scope="col">Lembaga Mitra</th>
                <th scope="col">Judul Kegiatan Kerjasama</th>
                <th scope="col">Manfaat bagi PS yang Diakretasi</th>
                <th scope="col">Waktu dan Durasi</th>
                <th scope="col">Bukti Kerjasama</th>
            </tr>

        </thead>

        <tbody>
            @foreach ($kerjasama as $kerja)
            <tr>
                <td>{{ $kerja->id }}</td>
                <td>{{ $kerja->lembaga_mitra }}</td>
                <td>{{ $kerja->judul_kegiatan }}</td>
                <td>{{ $kerja->manfaat }}</td>
                <td>{{ $kerja->waktu_durasi }}</td>
                <td>{{ $kerja->bukti_kerjasama }}</td>
                <td>{{ $kerja->tahun_laporan }}</td>
                <td>{{ $kerja->prodi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table> 

    {{-- AKHIR CONTENT --}}

        </div>
    </div>
</div>
@endsection