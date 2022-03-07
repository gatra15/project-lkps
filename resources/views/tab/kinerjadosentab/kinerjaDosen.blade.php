@extends('partials.sidebar')
@extends('layouts.main')

@section('content')

{{-- TITLE --}}
<div class="content-header">
    <div class="container-fluid">
            <h1>KINERJA DOSEN</h1>
    </div>
</div>

{{-- CARD HEAD --}}
<div class="content">
    <div class="container-fluid">
        <div class="card">

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

    {{-- AWAL PAGELARAN --}}
    @include('tab.kinerjadosentab.pagelarandtps')        
    {{-- AKHIR PAGELARAN  --}}
    
    {{-- AWAL KARYA ILMIAH --}}
    @include('tab.kinerjadosentab.karyailmiahdtps')     
    {{-- AKHIR KARYA ILMIAH --}}
    
    {{-- AWAL PRODUK DTPS --}}
    @include('tab.kinerjadosentab.produkdtps') 
    {{-- AKHIR PRODUK DTPS --}}
    
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