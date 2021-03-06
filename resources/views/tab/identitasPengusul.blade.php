@extends('partials.sidebar')
@extends('layouts.main')

@section('content')

{{-- JUDUL --}}
<div class="content-header">
    <div class="container-fluid">
            <h1>TAB IDENTITAS</h1>
    </div>
</div>

{{-- CARD HEAD --}}
<div class="content">
    <div class="container-fluid">
        <div class="card">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

{{-- CARD TAB --}}
<div class="card-header">
    @hasrole('perwakilan')
    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="identitas-tab" data-toggle="tab" href="#identitas" role="tab" aria-controls="identitas" aria-selected="true">Identitas Pengusul</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="identitasisi-tab" data-toggle="tab" href="#identitasisi" role="tab" aria-controls="identitasisi" aria-selected="false">Daftar Identitas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="upps-tab" data-toggle="tab" href="#upps" role="tab" aria-controls="upps" aria-selected="false">Daftar Prodi di UPPS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="penyusun-tab" data-toggle="tab" href="#penyusun" role="tab" aria-controls="penyusun" aria-selected="false">Tim Penyusun</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab" aria-controls="daftar" aria-selected="false">Daftar Tim Penyusun</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="evaluasi-tab" data-toggle="tab" href="#evaluasi" role="tab" aria-controls="evaluasi" aria-selected="false">Laporan Evaluasi Diri</a>
        </li>
    </ul>
    @endhasrole
    
    @hasanyrole('dekan|asesor')
    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="identitasisi-tab" data-toggle="tab" href="#identitasisi" role="tab" aria-controls="identitasisi" aria-selected="false">Daftar Identitas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="upps-tab" data-toggle="tab" href="#upps" role="tab" aria-controls="upps" aria-selected="false">Daftar Prodi di UPPS</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="daftar-tab" data-toggle="tab" href="#daftar" role="tab" aria-controls="daftar" aria-selected="false">Daftar Tim Penyusun</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="evaluasi-tab" data-toggle="tab" href="#evaluasi" role="tab" aria-controls="evaluasi" aria-selected="false">Laporan Evaluasi Diri</a>
        </li>
    </ul>
    @endhasanyrole
</div>

{{-- ISI CONTENT --}}

<div class="card-body">
    <div class="tab-content mt-3">
        <div class="tab-content" id="myTabContent">
            
            @hasanyrole('dekan|asesor')
            @include('tab.identitastab.identitasisi')
            @include('tab.identitastab.upps')
            @include('tab.identitastab.penyusunisi')
            @include('tab.identitastab.evaluasi')
            @endhasanyrole

            @hasrole('perwakilan')
            @include('tab.identitastab.identitas')

            @include('tab.identitastab.identitasisi')

            @include('tab.identitastab.upps')

            @include('tab.identitastab.timpenyusun')
            
            @include('tab.identitastab.penyusunisi')
          
            @include('tab.identitastab.evaluasi')
            @endhasrole
          
           
        </div>  
    </div>
</div>
        </div>  
    </div>
</div>
@endsection