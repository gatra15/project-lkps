@extends('partials/sidebar')
@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
            <h1>KINERJA DOSEN</h1>
    </div>
</div>
<!-- MENU ATAS  -->
<div class="content">
    <div class="container-fluid">
            <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pengakuan-tab" data-toggle="tab" href="#pengakuan" role="tab" aria-controls="pengakuan" aria-selected="true">Pengakuan/Rekognisi DTPS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="penelitian-tab" data-toggle="tab" href="#penelitian" role="tab" aria-controls="penelitian" aria-selected="false">Penelitian DTPS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pengabdian-tab" data-toggle="tab" href="#pengabdian" role="tab" aria-controls="pengabdian" aria-selected="false">Pengabdian kepada Masyarakat (PkM) DTPS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pagelaran-tab" data-toggle="tab" href="#pagelaran" role="tab" aria-controls="pagelaran" aria-selected="false">Pagelaran/pameran/presentasi/publikasi Ilmiah DTPS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="karya-tab" data-toggle="tab" href="#karya" role="tab" aria-controls="karya" aria-selected="false">Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="produk-tab" data-toggle="tab" href="#produk" role="tab" aria-controls="produk" aria-selected="false">Produk/jasa DTPS yang diadopsi oleh industri/masyarakat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="luaran-tab" data-toggle="tab" href="#luaran" role="tab" aria-controls="luaran" aria-selected="false">Luaran Penelitian/PkM Lainnya oleh DTPS</a>
            </li>
        </ul>
    </div>

    <!-- ISI BODY  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="pengakuan" role="tabpanel" aria-labelledby="pengakuan-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des1">
                        <div class="card card-body">
                            <p>
                                Pengakuan/Rekognisi DTPS
                            </p>
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
                <div class="tab-pane fade" id="penelitian" role="tabpanel" aria-labelledby="penelitian-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des2">
                        <div class="card card-body">
                            <p>
                                Penelitian DTPS
                            </p>
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
                <div class="tab-pane fade" id="pengabdian" role="tabpanel" aria-labelledby="pengabdian-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des3">
                        <div class="card card-body">
                            <p>
                                Pengabdian kepada Masyarakat (PkM) DTPS
                            </p>
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
                <div class="tab-pane fade" id="pagelaran" role="tabpanel" aria-labelledby="pagelaran-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des4">
                        <div class="card card-body">
                            <p>
                                Pagelaran/pameran/presentasi/publikasi Ilmiah DTPS
                            </p>
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
                <div class="tab-pane fade" id="karya" role="tabpanel" aria-labelledby="karya-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des5" role="button" aria-expanded="false" aria-controls="des5">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des5">
                        <div class="card card-body">
                            <p>
                                Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir
                            </p>
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
                <div class="tab-pane fade" id="produk" role="tabpanel" aria-labelledby="produk-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des6" role="button" aria-expanded="false" aria-controls="des6">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des6">
                        <div class="card card-body">
                            <p>
                                Produk/jasa DTPS yang diadopsi oleh industri/masyarakat
                            </p>
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
                <div class="tab-pane fade" id="luaran" role="tabpanel" aria-labelledby="luaran-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des7" role="button" aria-expanded="false" aria-controls="des7">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des7">
                        <div class="card card-body">
                            <p>
                                Luaran Penelitian/PkM Lainnya oleh DTPS
                            </p>
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
@endsection