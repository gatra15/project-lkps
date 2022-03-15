@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
{{-- JUDUL --}}
<div class="content-header">
    <div class="container-fluid">
            <h1>TAB KEUANGAN, SARANA, DAN PRASARANA</h1>
    </div>
</div>

<!-- HEAD CARD -->
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

{{-- CARD HEAD & TAB LINK --}}
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#" role="tab" aria-controls="kualitas" aria-selected="true">Keuangan, Sarana, dan Prasarana</a>
            </li>
        </ul>
    </div>

    <!-- CARD BODY  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">

            {{-- BUTTON  --}}
            <div class="tab-pane active" id="kerjasama" role="tabpanel">
                <p class="d-flex justify-content-between">
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Deskripsi
                    </a>
                </p>
                @can('download file')
                <a href="/keuangan-sarana-prasarana/download/excel" class="btn btn-success">Excel</a>
                <a href="/keuangan-sarana-prasarana/download/csv" class="btn btn-success">CSV</a>
                <input type="button" class="btn btn-primary" onclick="printDiv('print-table')" value="Print Document" />
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
                    Cara Download PDF
                </button>
                @endcan
            
                <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <p>
                    Tuliskan data penggunaan dana  yang dikelola oleh UPPS dan data penggunaan dana yang dialokasikan ke program studi yang diakreditasi dalam <b>3 tahun terakhir</b> dengan mengikuti format berikut ini.
                    </p>
                </div>
                </div>
{{-- CONTENT --}}

{{-- AWAL TABLE --}}
@include('tab.kesaprastab.kesaprastable')
{{-- AKHIR TABLE --}}


{{-- AKHIR CONTENT --}}

@foreach ($keuangan as $data)
     
        <!-- Modal Edit -->
        <div class="modal fade" id="modalsaranaedit-{{ $data->id }}" tabindex="-1" aria-labelledby="modalsaranaedit" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalsaranaedit">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.keuangansaprasmodal.kesaprasedit')
            </div>
            </div>
        </div>
        <!-- Modal De;ete -->
        <div class="modal fade" id="modalsaranadelete-{{ $data->id }}" tabindex="-1" aria-labelledby="modalmahasiswadelete" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalmahasiswadelete">Hapus Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.keuangansaprasmodal.kesaprasdelete')
            </div>
            </div>
        </div>
        
@endforeach
    </div>
    </div>
    </div>
</div>
</div>
</div>
@endsection