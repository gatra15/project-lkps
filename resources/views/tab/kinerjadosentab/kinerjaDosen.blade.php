@extends('partials.sidebar')
@extends('layouts.main')

@section('content')

{{-- TITLE --}}
<div class="content-header">
    <div class="container-fluid">
            <h1>TAB KINERJA DOSEN</h1>
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

          @if ($message = Session::get('error'))
          <div class="alert alert-danger">
              <strong>{{ $message }}</strong>
          </div>
            @endif

    {{-- TAB HEADER --}}
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
              <a class="nav-link" id="publikasi-tab" data-toggle="tab" href="#publikasi" role="tab" aria-controls="publikasi aria-selected="false">Publikasi Ilmiah DTPS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="karya-tab" data-toggle="tab" href="#karya" role="tab" aria-controls="karya" aria-selected="false">Karya ilmiah DTPS yang disitasi dalam 3 tahun terakhir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="luaran-tab" data-toggle="tab" href="#luaran" role="tab" aria-controls="luaran" aria-selected="false">Luaran Penelitian/PkM Lainnya oleh DTPS</a>
            </li>
        </ul>
    </div>

    {{-- CARD BODY --}}
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">

                
                
    {{-- AWAL PENGAKUAN DTPS --}}
    @include('tab.kinerjadosentab.pengakuandtps')   
    {{-- AKHIR PENGAKUAN DTPS --}}

    {{-- AWAL PENELITIAN DTPS --}}
     @include('tab.kinerjadosentab.penelitiandtps')            
    {{-- AWAL PENELITIAN DTPS --}}

    {{-- AWAL PKM --}}
    @include('tab.kinerjadosentab.pkm')
    {{-- AKHIR PKM --}}

    {{-- AWAL PUBLIKASI --}}
    @include('tab.kinerjadosentab.publikasidtps')        
    {{-- AKHIR PUBLIKASI  --}}
    
    {{-- AWAL KARYA ILMIAH --}}
    @include('tab.kinerjadosentab.karyailmiahdtps')     
    {{-- AKHIR KARYA ILMIAH --}}
    
    {{-- AWAL LUARAN DTPS --}}
    @include('tab.kinerjadosentab.luarandtps')
    {{-- AKHIR LUARAN DTPS --}}

    {{-- CLOSE TAG HEADER CARD + BODY CARD --}}
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>

    @endsection