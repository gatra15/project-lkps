@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h2>DASHBOARD</h2>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true"> Daftar </a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-pane active" id="dashboard" role="tabpanel">
                
                <form action="/dashboard" method="post">
                    @csrf
                <div class="mb-5 pb-2">
                    <label for="exampleInputEmail1" class="form-label h3">Pilih Tahun Laporan</label> 
                    <div id="emailHelp" class="form-text">Pilih tahun untuk melihat atau input data laporan.</div>
                    <select id="tahun_laporan" name="tahun_laporan" class="form-control form-control-lg mb-3" aria-label=".form-control-lg" onchange="this.form.submit()">
                    @php
                        $years = range(2014, strftime("%Y", time()));
                    @endphp
                    <option>Pilih Tahun</option>
                    <?php foreach($years as $year) : ?>
                        <option {{ session('tahun_laporan') == $year ? 'selected' : '' }} value="{{ $year }}">{{ $year }}</option>
                    <?php endforeach; ?>
                    </select>
                </div>
            
                @hasanyrole('dekan|asesor')
                
                <div class="mb-5 pb-2">
                    <label for="exampleInputEmail1" class="form-label h3">Pilih Prodi</label> 
                    <div id="emailHelp" class="form-text">Pilih prodi untuk melihat atau input data laporan.</div>
                    <select id="prodi" name="prodi" class="form-control form-control-lg mb-3" aria-label=".form-control-lg" onchange="this.form.submit()">
                    <option>Pilih Prodi</option> 
                        @foreach($prodi as $prodis) 
                     
                    <option {{ session('prodi') == $prodis->name ? 'selected' : '' }} value="{{ $prodis->name }}">{{ $prodis->name }}</option>
                       @endforeach
                </div>

                @endhasanyrole
            </form>

            </div>
        </div>
    </div>
</div>
</div>
</div>

@endsection