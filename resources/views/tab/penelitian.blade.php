@extends('partials/sidebar')
@extends('layouts.main')

@section('content')

<div class="content-header">
    <div class="container-fluid">
            <h1>PENELITIAN</h1>
    </div>
</div>

<!-- MENU ATAS -->
<div class="content">
    <div class="container-fluid">
            <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="mahasiswa-tab" data-toggle="tab" href="#mahasiswa" role="tab" aria-controls="mahasiswa" aria-selected="true">Penelitian DTPS yang Melibatkan Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="rujukan-tab" data-toggle="tab" href="#rujukan" role="tab" aria-controls="rujukan" aria-selected="false">Penelitian DTPS yang menjadi rujukan tema tesis/disertasi</a>
            </li>
          </ul>
          
    </div>
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="mahasiswa" role="tabpanel" aria-labelledby="mahasiswa-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
                            Deskripsi
                        </a>
                    </p>
                    <div class="collapse" id="des1">
                        <div class="card card-body">
                            <p>
                                Tuliskan judul penelitian/PkM DTPS yang terintegrasi ke dalam pembelajaran/ pengembangan matakuliah dalam 3 tahun terakhir dengan mengikuti format Tabel 5.b berikut ini.
                            </p>
                            Keterangan: <br>
                            1) Judul penelitian dan PkM tercatat di unit/lembaga yang mengelola kegiatan penelitian/PkM di tingkat Perguruan Tinggi/UPPS. <br>
                            2) Bentuk integrasi dapat berupa tambahan materi perkuliahan, studi kasus, Bab/ Subbab dalam buku ajar, atau bentuk lain yang relevan.
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
        {{-- @foreach ($kerjasama as $kerja)
        <tr>

        </tr>
        @endforeach --}}
    </tbody>
</table> 

{{-- AKHIR CONTENT --}}
                </div>
                <div class="tab-pane fade" id="rujukan" role="tabpanel" aria-labelledby="rujukan-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
                            Deskripsi
                        </a>
                    </p>
                    <div class="collapse" id="des2">
                        <div class="card card-body">
                            <p>
                                Tuliskan judul penelitian/PkM DTPS yang terintegrasi ke dalam pembelajaran/ pengembangan matakuliah dalam 3 tahun terakhir dengan mengikuti format Tabel 5.b berikut ini.
                            </p>
                            Keterangan: <br>
                            1) Judul penelitian dan PkM tercatat di unit/lembaga yang mengelola kegiatan penelitian/PkM di tingkat Perguruan Tinggi/UPPS. <br>
                            2) Bentuk integrasi dapat berupa tambahan materi perkuliahan, studi kasus, Bab/ Subbab dalam buku ajar, atau bentuk lain yang relevan.
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
        {{-- @foreach ($kerjasama as $kerja)
        <tr>

        </tr>
        @endforeach --}}
    </tbody>
</table> 

{{-- AKHIR CONTENT --}}
                </div>
              </div>
        </div>
    </div>

@endsection