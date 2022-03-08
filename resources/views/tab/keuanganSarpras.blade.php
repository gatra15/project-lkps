@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
{{-- JUDUL --}}
<div class="content-header">
    <div class="container-fluid">
            <h1>KEUANGAN, SARANA, DAN PRASARANA</h1>
    </div>
</div>

<!-- HEAD CARD -->
<div class="content">
    <div class="container-fluid">
            <div class="card">

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
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalsapras">
                        Tambah data
                    </button>
                    {{-- Button CSV dkk disini --}}

                    {{-- <a class="btn btn-primary" href="{{ url('/download-pdf')}}">Download PDF</a> --}}
                </p>
            
                <!-- Modal Tambah Data Sarana dan Prasarana-->
                <div class="modal fade" id="modalsapras" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Keuangan Sarana dan Prasarana </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @include('partials.keuangansaprasmodal.kesapras')
                    </div>
                    </div>
                </div>
            
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
</div>

{{-- AKHIR CONTENT --}}
    </div>
    </div>
    </div>
</div>
</div>
</div>
@endsection