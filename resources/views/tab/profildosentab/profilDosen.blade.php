@extends('partials.sidebar')
@extends('layouts.main')

@section('content')

<!-- JUDUL -->
<div class="content-header">
    <div class="container-fluid">
            <h1>PROFIL DOSEN</h1>
    </div>
</div>

<!-- TAB MENU -->
<div class="content">
    <div class="container-fluid">
        <div class="card">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
            @endif

            @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
            </div>
            @endif
    {{-- Card Header --}}
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="dosTetap-tab" data-toggle="tab" href="#dosen-tetap" role="tab" aria-controls="dosen-tetap" aria-selected="true">Dosen Tetap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="dosbingTA-tab" data-toggle="tab" href="#dosbing-ta" role="tab" aria-controls="dosbing-ta" aria-selected="true">Dosen Pembimbing Utama TA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="ewmp-tab" data-toggle="tab" href="#ewmp" role="tab" aria-controls="ewmp" aria-selected="false">EWMP Dosen Tetap Perguruan Tinggi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="dosTTetap-tab" data-toggle="tab" href="#dosen-ttetap" role="tab" aria-controls="dosen-ttetap" aria-selected="false">Dosen Tidak Tetap</a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link" id="dosIndustri-tab" data-toggle="tab" href="#dosen-industri" role="tab" aria-controls="dosen-industri" aria-selected="false">Dosen Industri/Praktisi</a>
            </li> --}}
        </ul>
    </div>

    <!-- ISI BODY  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">

    {{-- AWAL DOSEN TETAP --}}
    <div class="tab-pane fade show active" id="dosen-tetap" role="tabpanel" aria-labelledby="dosTetap-tab">
        <p class="d-flex justify-content-between">
            <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
                Deskripsi
            </a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosentetap">
                Tambah data
            </button>
        </p>  
            @include('tab.profildosentab.dosentetap')
        </div>
    {{-- AKHIR DOSEN TETAP --}}
        <div class="tab-pane fade" id="dosbing-ta" role="tabpanel" aria-labelledby="dosbingTA-tab">
            <p class="d-flex justify-content-between">
                <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
                    Deskripsi
                </a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah data
                </button>
            </p>
        {{-- AWAL DOSEN PEMBIMBING TA --}}
            @include('tab.profildosentab.dosenpembimbingta')
        {{-- AKHIR DOSEN PEMBIMBING TA --}}
        </div>
        {{-- AWAL EWMP --}}
        <div class="tab-pane fade" id="ewmp" role="tabpanel" aria-labelledby="ewmp-tab">
            <p class="d-flex justify-content-between">
                <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
                    Deskripsi
                </a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenewmp">
                    Tambah data
                </button>
            </p>
        
            @include('tab.profildosentab.ewmp')
        {{-- AKHIR EWMP --}}
        </div>
        <div class="tab-pane fade" id="dosen-ttetap" role="tabpanel" aria-labelledby="dosTTetap-tab">
            <p class="d-flex justify-content-between">
                <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
                    Deskripsi
                </a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah data
                </button>
            </p>
        {{-- AWAL DOSEN TIDAK TETAP --}}
            @include('tab.profildosentab.dosentidaktetap') 
        {{-- AKHIR DOSEN TITAK TETAP --}}
        </div>
        <div class="tab-pane fade" id="dosen-industri" role="tabpanel" aria-labelledby="dosIndustri-tab">
            <p class="d-flex justify-content-between">
                <a class="btn btn-primary" data-toggle="collapse" href="#des5" role="button" aria-expanded="false" aria-controls="des5">
                    Deskripsi
                </a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah data
                </button>
            </p>
        {{-- AWAL INDUSTRI --}}
            @include('tab.profildosentab.dosenindustri') 
        {{-- AKHIR INDUSTRI --}}
        </div>        

    </div>
    </div>
    </div>

</div>
</div>
</div>

@endsection