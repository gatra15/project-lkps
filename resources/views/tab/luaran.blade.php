@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
            <h1>LUARAN DAN CAPAIAN TRIDHARMA</h1>
    </div>
</div>

<!-- CARD HEAD -->
<div class="content">
    <div class="container-fluid">
            <div class="card">

{{-- TAB PANEL --}}
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="capaian-tab" data-toggle="tab" href="#capaian" role="tab" aria-controls="capaian" aria-selected="true">Capaian Pembelajaran</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="prestasi-tab" data-toggle="tab" href="#prestasi" role="tab" aria-controls="prestasi" aria-selected="false">Prestasi Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="efektifitas-tab" data-toggle="tab" href="#efektifitas" role="tab" aria-controls="efektifitas" aria-selected="false">Efektivitas dan Produktivitas Pendidikan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="dayaSaing-tab" data-toggle="tab" href="#daya-saing" role="tab" aria-controls="daya-saing" aria-selected="false">Daya Saing Lulusan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="kinerja-tab" data-toggle="tab" href="#kinerja" role="tab" aria-controls="kinerja" aria-selected="false">Kinerja Lulusan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="luaran-tab" data-toggle="tab" href="#luaran" role="tab" aria-controls="luaran" aria-selected="false">Luaran Penelitian dan PkM Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="kesesuaian-tab" data-toggle="tab" href="#kesesuaian" role="tab" aria-controls="kesesuaian" aria-selected="false">Kesesuaian Bidang Kerja Lulusan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="kepuasan-tab" data-toggle="tab" href="#kepuasan" role="tab" aria-controls="kepuasan" aria-selected="false">Kepuasan Pengguna</a>
            </li>
        </ul>
    </div>

    <!-- CARD BODY  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">

                {{-- CAPAIAN AWAL --}}
                    @include('tab.luarantab.capaian')
                {{-- CAPAIAN AKHIR --}}
                
                {{-- PRESTASI AWAL --}}
                    @include('tab.luarantab.prestasi')
                {{-- PRESTASI AKHIR --}}

                {{-- EFEK AWAL --}}
                    @include('tab.luarantab.efektivitas')
                {{-- EFEK AKHIR --}}

                {{-- DAYA AWAL --}}
                    @include('tab.luarantab.daya')
                {{-- DAYA AKHIR --}}

                {{-- KINERJA AWAL --}}
                    @include('tab.luarantab.kinerja')
                {{-- KINERJA AKHIR --}}

                {{-- LUARAN  AWAL --}}
                    @include('tab.luarantab.luaran')
                {{-- LUARAN AKHIR --}}

                {{-- KESESUAIAN AWAL --}}
                    @include('tab.luarantab.kesesuaian')
                {{-- KESESUAIAN AKHIR --}}

                {{-- KESESUAIAN AWAL --}}
                    @include('tab.luarantab.kepuasan')
                {{-- KESESUAIAN AKHIR --}}

                
                
                


                


        </div>
        </div>
        </div>
</div>
</div>
</div>
@endsection