@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
<!-- JUDUL -->
<body>
<div class="content-header">
    <div class="container-fluid">
            <h1>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</h1>
    </div>
</div>


<div class="content">
    <div class="container-fluid">
        <div class="card">
            {{-- Card Header --}}
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

            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pendidikan-tab" data-toggle="tab" href="#pendidikan" role="tab" aria-controls="pendidikan" aria-selected="true">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="penelitian-tab" data-toggle="tab" href="#penelitian" role="tab" aria-controls="penelitian" aria-selected="false">Penelitian</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pkm-tab" data-toggle="tab" href="#pkm" role="tab" aria-controls="pkm" aria-selected="false">Pengabdian Kepada Masyarakat</a>
                    </li>
                </ul>
            </div>
            {{-- End Card Header --}}
            
            {{-- Card Body --}}
            <div class="card-body">
                <div class="tab-content mt-3">
                    <div class="tab-content" id="myTabContent">

                        {{-- Tab --}}
                        
                        @include('tab.tatapamongtab.pendidikan')
 
                        {{-- End Tab --}}
                        {{-- Tab --}}
                        <div class="tab-pane fade show" id="penelitian" role="tabpanel" aria-labelledby="penelitian-tab">
                            <p class="d-flex justify-content-between">
                                <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
                                    Deskripsi
                                </a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpenelitian">
                                    Tambah data 
                                </button>
                            </p>
                            <a href="{{ url('/download-excel') }}" class="btn btn-success">Excel</a>
                            <a href="{{ url('/download-csv') }}" class="btn btn-success">CSV</a>
                            <div class="collapse" id="des2">
                                <div class="card card-body">
                                    <p>
                                        Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS dengan mengikuti format Tabel 3.a.1) berikut ini
                                    </p>
                                </div> 
                            </div>
                        <!-- Modal Tambah Data Penelitian-->
                        <div class="modal fade" id="modalpenelitian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penelitian</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                @include('partials.tatapamongmodal.penelitian')
                            </div>
                            </div>
                        </div>

                            <div id="printElement container-fluid">
                                <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
                                    <thead>
                                        <tr>

                                            <th scope="col" class="align-middle" rowspan="2">Tema</th>
                                            <th class="align-middle" scope="col" rowspan="2">Lembaga Mitra</th>
                                            <th scope="col" colspan="3">Tingkat</th>
                                            <th class="align-middle" scope="col" rowspan="2" >Judul Kegiatan Kerjasama</th>
                                            <th class="align-middle" scope="col" rowspan="2">Manfaat Bagi PS yang Diakreditasi</th>
                                            <th class="align-middle" scope="col" rowspan="2" >Waktu dan Durasi</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Bukti Kerjasama</th>
                                            <th class="align-middle" scope="col" rowspan="2" >Action</th>   
                                        </tr>
                                        <tr>
                                            <th scope="col">Internasional</th>
                                            <th scope="col">Nasional</th>       
                                            <th scope="col">Lokal/Wilayahs</th>       
                                        </tr>
                                
                                    </thead>
        
                                    <tbody class="text-dark">
                                        <tr>
                                            @foreach ($kerjasama as $indikator)
                                            @if ($indikator->tridharma == 'Penelitian')
                                            <tr>
                                                <td>Penelitian</td>
                                                <td>{{ $indikator->lembaga_mitra }}</td>
                                                <td>{{ $indikator->tingkat == 'Internasional' ? 'V' : '' }}</td>
                                                <td>{{ $indikator->tingkat == 'Nasional' ? 'V' : '' }}</td>
                                                <td>{{ $indikator->tingkat == 'Lokal' ? 'V' : '' }}</td>
    
                                                <td>{{ $indikator->judul_kegiatan }}</td>
                                                <td>{{ $indikator->manfaat }}</td>
                                                <td>{{ $indikator->waktu_durasi }}</td>
                                                <td>{{ $indikator->bukti_kerjasama }}</td>
                                                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                                                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpenelitianedit-{{ $indikator->id }}"><i class="fas fa-edit"></i></a></li>
                                                    <li>
                                                        <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpenelitiandelete-{{ $indikator->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                                                </ul></td>
                                            </tr>
    
                                            <!-- Modal Edit Data Penelitian -->
                                            <div class="modal fade" id="modalpenelitianedit-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">edit data {{ $indikator->tridharma }}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    @include('partials.tatapamongmodal.penelitianedit')
                                                </div>
                                                </div>
                                            </div>
    
    
                                             <!-- Modal Delete Data Penelitian -->
                                             <div class="modal fade" id="modalpenelitiandelete-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Yakin?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>
                                                    @include('partials.tatapamongmodal.penelitiandelete')
                                                    
                                                </div>
                                                </div>
                                            </div>

                                            @endif
                                            @endforeach

                                        
                                        <tr>
                                            <td colspan="10" class="text-left"><b>Jumlah Penelitian : {{ $jmlpenelitian }}</b></td>
                                        </tr>
                                </table> 
                            </div>
                            {{-- End Content --}}

                        </div>
                        {{-- End Tab --}}
                        {{-- Tab --}}
                        <div class="tab-pane fade show" id="pkm" role="tabpanel" aria-labelledby="pkm-tab">
                            <p class="d-flex justify-content-between">
                                <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
                                    Deskripsi
                                </a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpkm">
                                    Tambah data
                                </button>
                            </p>
                            <a href="{{ url('/download-excel') }}" class="btn btn-success">Excel</a>
                            <a href="{{ url('/download-csv') }}" class="btn btn-success">CSV</a>
                            <div class="collapse" id="des3">
                                <div class="card card-body">
                                    <p>
                                        Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS dengan mengikuti format Tabel 3.a.1) berikut ini
                                    </p>
                                </div> 
                            </div>

                <!-- Modal Tambah Data Pkm -->
                <div class="modal fade" id="exampleModalLabel" tabindex="-1" aria-labelledby="modalpkm" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data PKM</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @include('partials.tatapamongmodal.pkm')
                    </div>
                    </div>
                </div>
                
                <div id="printElement container-fluid">
                    <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th scope="col" class="align-middle" rowspan="2">Tema</th>
                                <th class="align-middle" scope="col" rowspan="2">Lembaga Mitra</th>
                                <th scope="col" colspan="3">Tingkat</th>
                                <th class="align-middle" scope="col" rowspan="2" >Judul Kegiatan Kerjasama</th>
                                <th class="align-middle" scope="col" rowspan="2">Manfaat Bagi PS yang Diakreditasi</th>
                                <th class="align-middle" scope="col" rowspan="2" >Waktu dan Durasi</th>  
                                <th class="align-middle" scope="col" rowspan="2" >Bukti Kerjasama</th>
                                <th class="align-middle" scope="col" rowspan="2" >Action</th>   
                            </tr>
                            <tr>
                                <th scope="col">Internasional</th>
                                <th scope="col">Nasional</th>       
                                <th scope="col">Lokal/Wilayahs</th>       
                            </tr>
                    
                        </thead>

                        <tbody class="text-dark">
                            <tr>
                                
                                
                                @foreach ($kerjasama as $indikator)
                                @if ($indikator->tridharma == 'Pengabdian Kepada Masyarakat')
                                <tr>
                                    <td>Pengabdian Kepada Masyarakat</td>
                                    <td>{{ $indikator->lembaga_mitra }}</td>
                                    <td>{{ $indikator->tingkat == 'Internasional' ? 'V' : '' }}</td>
                                    <td>{{ $indikator->tingkat == 'Nasional' ? 'V' : '' }}</td>
                                    <td>{{ $indikator->tingkat == 'Lokal' ? 'V' : '' }}</td>

                                    <td>{{ $indikator->judul_kegiatan }}</td>
                                    <td>{{ $indikator->manfaat }}</td>
                                    <td>{{ $indikator->waktu_durasi }}</td>
                                    <td>{{ $indikator->bukti_kerjasama }}</td>
                                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpkmedit-{{ $indikator->id }}"><i class="fas fa-edit"></i></a></li>
                                        <li>
                                            <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpkmdelete-{{ $indikator->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                                    </ul></td>
                                </tr>

                                <!-- Modal Edit Data Pkm -->
                                <div class="modal fade" id="modalpkmedit-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">edit data {{ $indikator->tridharma }}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        @include('partials.tatapamongmodal.pkmedit')
                                    </div>
                                    </div>
                                </div>


                                 <!-- Modal Delete Data Pkm -->
                                 <div class="modal fade" id="modalpkmdelete-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Yakin?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        </div>
                                        @include('partials.tatapamongmodal.pkmdelete')
                                        
                                    </div>
                                    </div>
                                </div>

                                @endif
                                @endforeach
                            </tr>
                            <tr>
                                <td colspan="10" class="text-left"><b>Jumlah PKM : {{ $jmlpkm }}</b></td>
                            </tr>
                    </table> 
                </div>
                {{-- End Content --}}

                            {{-- End Content --}}
                        </div>
                        {{-- End Tab --}}
                    </div>
                </div>
            </div>
            {{-- End Card Body --}}
        </div>
    </div>
</div>
</body>
@endsection