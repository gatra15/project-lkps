@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
{{-- JUDUL --}}
<div class="content-header">
    <div class="container-fluid">
            <h1>PENDIDIKAN</h1>
    </div>
</div>

<!-- CARD HEADER -->
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

{{-- TAB PANEL NAV --}}
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="kurikulum-tab" data-toggle="tab" href="#kurikulum" role="tab" aria-controls="kurikulum" aria-selected="true">Kurikulum</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="integrasi-tab" data-toggle="tab" href="#integrasi" role="tab" aria-controls="integrasi" aria-selected="false">Intergrasi Keg. Penelitian/PkM dan Pembelajaran</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="kepuasan-tab" data-toggle="tab" href="#kepuasan" role="tab" aria-controls="kepuasan" aria-selected="false">Kepuasan Mahasiswa</a>
            </li>
        </ul>
    </div>

    <!-- ISI BODY  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">

    {{-- KURIKULUM AWAL --}}
    @include('tab.pendidikantab.kurikulum')
    {{-- KURIKULUM AKHIR --}}

    {{-- INTEGRASI AWAL --}}
    @include('tab.pendidikantab.integrasi')
    {{-- INTEGRASI AKHIR --}}

    {{-- KEPUASAN AWAL --}}
    @include('tab.pendidikantab.kepuasan')
    {{-- KEPUASAN AKHIR --}}


                

</div> 
</div>
</div>

{{-- AKHIR CONTENT --}}
</div>
    </div>
        </div>
@endsection