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
              <a class="nav-link" id="dosbingTA-tab" data-toggle="tab" href="#dosbing-ta" role="tab" aria-controls="dosbing-ta" aria-selected="false">Dosen Pembimbing Utama TA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="ewmp-tab" data-toggle="tab" href="#ewmp" role="tab" aria-controls="ewmp" aria-selected="false">EWMP Dosen Tetap Perguruan Tinggi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="dosTTetap-tab" data-toggle="tab" href="#dosen-ttetap" role="tab" aria-controls="dosen-ttetap" aria-selected="false">Dosen Tidak Tetap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="dosIndustri-tab" data-toggle="tab" href="#dosen-industri" role="tab" aria-controls="dosen-industri" aria-selected="false">Dosen Industri/Praktisi</a>
            </li>
        </ul>
    </div>

    <!-- ISI BODY  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">


        {{-- AWAL DOSEN TETAP --}}
            @include('tab.profildosentab.dosentetap')
        {{-- AKHIR DOSEN TETAP --}}

        {{-- AWAL DOSEN PEMBIMBING TA --}}
            @include('tab.profildosentab.dosenpembimbingta')
        {{-- AKHIR DOSEN PEMBIMBING TA --}}

        {{-- AWAL EWMP --}}
            @include('tab.profildosentab.ewmp')
        {{-- AKHIR EWMP --}}

        {{-- AWAL DOSEN TIDAK TETAP --}}
            @include('tab.profildosentab.dosentidaktetap') 
        {{-- AKHIR DOSEN TITAK TETAP --}}

        {{-- AWAL INDUSTRI --}}
            @include('tab.profildosentab.dosenindustri') 
        {{-- AKHIR INDUSTRI --}}
                

    </div>
    </div>
    </div>

</div>
</div>
</div>

@endsection