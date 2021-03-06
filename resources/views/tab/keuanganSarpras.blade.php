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
                @include('layouts.alert')        
                @hasrole('perwakilan')
                @foreach ($ts as $data)
                @if ($data->alert == 'success')
                <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
                    element tabel ke - {{ $loop->iteration }} {{ $data->comment }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif ($data->alert == 'warning')
                <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
                    {{ $data->comment }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @else
                <div class="alert alert-secondary alert-fixed alert-dismissible fade show center-block"  role="alert">
                    element tabel ke - {{ $loop->iteration }} belum ada respon dari dekan.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                @endif
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
@foreach ($ts_all as $data)
     
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

        <div class="modal fade" id="modaltolaksaran-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.keuangansaprasmodal.tolak')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalappsaran-{{ $data->id }}" tabindex="-1" aria-labelledby="modalappsaran" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modalappsaran"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.keuangansaprasmodal.app')
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