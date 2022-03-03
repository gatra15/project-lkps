@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
<!-- JUDUL -->
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
                        <div class="tab-pane fade show active" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
                            <p class="d-flex justify-content-between">
                                <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
                                    Deskripsi
                                </a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikan">
                                    Tambah data
                                </button>
                            </p>
                            <a href="{{ url('/download-excel') }}" class="btn btn-success">Excel</a>
                            <a href="{{ url('/download-csv') }}" class="btn btn-success">CSV</a>
                            <div class="collapse" id="des1">
                                <div class="card card-body">
                                    <p>
                                        Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS dengan mengikuti format Tabel 3.a.1) berikut ini
                                    </p>
                                </div> 
                            </div>
                            
                <!-- Modal -->
                <div class="modal fade" id="modalpendidikan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @include('partials.tatapamongmodal.pendidikan')
                    </div>
                    </div>
                </div>
                            {{-- CONTENT --}}
                                
                            <div id="printElement container-fluid">
                                <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
                                    <thead>
                                        <tr>
        
                                            <th class="align-middle" scope="col" rowspan="2">Lembaga Mitra</th>
                                            <th scope="col" colspan="3">Tingkat</th>
                                            <th class="align-middle" scope="col" rowspan="2" >Judul Kegiatan Kerjasama</th>
                                            <th class="align-middle" scope="col" rowspan="2">Manfaat Bagi PS yang Diakreditasi</th>
                                            <th class="align-middle" scope="col" rowspan="2" >Waktu dan Durasi</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Bukti Kerjasama</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Opsi</th>  
                                        </tr>
                                        <tr>
                                            <th scope="col">Internasional</th>
                                            <th scope="col">Nasional</th>       
                                            <th scope="col">Lokal/Wilayahs</th>       
                                        </tr>
                                
                                    </thead>
                                
                                    
                               
                                    <tbody class="text-dark">
                                        @foreach ($kerjasama as $indikator)
                                        <tr>
                                            <td>{{ $indikator->lembaga_mitra }}</td>
                                            <td>{{ $indikator->tingkat == 'Internasional' ? 'V' : '' }}</td>
                                            <td>{{ $indikator->tingkat == 'Nasional' ? 'V' : '' }}</td>
                                            <td>{{ $indikator->tingkat == 'Lokal' ? 'V' : '' }}</td>

                                            <td>{{ $indikator->judul_kegiatan }}</td>
                                            <td>{{ $indikator->manfaat }}</td>
                                            <td>{{ $indikator->waktu_durasi }}</td>
                                            <td>{{ $indikator->bukti_kerjasama }}</td>
                                            <td><ul class="action-list d-flex justify-content-center" id="action">
                                                <li><a href="#" class="btn btn-primary m-1"><i class="fas fa-edit"></i></a></li>
                                                <li><a href="#" class="btn btn-danger m-1"><i class="fas fa-trash"></i></a></li>
                                            </ul></td>
                                        </tr>
                                        @endforeach
                                        {{-- @foreach ($mahasiswa_asing as $mhs)
                                            <tr>
                                                @for ($i = 0; $i < $count; $i++)
                                                <td>{{ $i }}</td>
                                                @endfor
                                            <td>{{ $mhs->daya_tampung }}</td> 
                                            <td>{{ $mhs->c_pendaftar }}</td> 
                                            <td>{{ $mhs->c_lulus_seleksi }}</td> 
                                            <td>{{ $mhs->mahasiswa_reguler }}</td> 
                                            <td>{{ $mhs->mahasiswa_transfer }}</td> 
                                            <td>{{ $mhs->mahasiswa_aktif_reguler }}</td> 
                                            <td>{{ $mhs->mahasiswa_aktif_transfer }}</td>
                                            </tr>
                                        @endforeach --}}
                                </table> 
                            </div>
                            {{-- End Content --}}
                        </div>
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
                            <div class="collapse" id="des2">
                                <div class="card card-body">
                                    <p>
                                        Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS dengan mengikuti format Tabel 3.a.1) berikut ini
                                    </p>
                                </div> 
                            </div>
                        <!-- Modal -->
                <div class="modal fade" id="modalpenelitian" tabindex="-1" aria-labelledby="modalpenelitian" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="modalpenelitian">Tambah Data Penelitian</h5>
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
        
                                            <th class="align-middle" scope="col" rowspan="2">Lembaga Mitra</th>
                                            <th scope="col" colspan="3">Tingkat</th>
                                            <th class="align-middle" scope="col" rowspan="2" >Judul Kegiatan Kerjasama</th>
                                            <th class="align-middle" scope="col" rowspan="2">Manfaat Bagi PS yang Diakreditasi</th>
                                            <th class="align-middle" scope="col" rowspan="2" >Waktu dan Durasi</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Bukti Kerjasama</th>  
                                        </tr>
                                        <tr>
                                            <th scope="col">Internasional</th>
                                            <th scope="col">Nasional</th>       
                                            <th scope="col">Lokal/Wilayahs</th>       
                                        </tr>
                                
                                    </thead>
        
                                    <tbody class="text-dark">
                                        <tr>
                                            <td>Eko</td>
                                            <td>Eko</td>
                                            <td>Eko</td>
                                            <td>Eko</td>
                                            <td>Eko</td>
                                        </tr>
                                        {{-- @foreach ($mahasiswa_asing as $mhs)
                                            <tr>
                                                @for ($i = 0; $i < $count; $i++)
                                                <td>{{ $i }}</td>
                                                @endfor
                                            <td>{{ $mhs->daya_tampung }}</td> 
                                            <td>{{ $mhs->c_pendaftar }}</td> 
                                            <td>{{ $mhs->c_lulus_seleksi }}</td> 
                                            <td>{{ $mhs->mahasiswa_reguler }}</td> 
                                            <td>{{ $mhs->mahasiswa_transfer }}</td> 
                                            <td>{{ $mhs->mahasiswa_aktif_reguler }}</td> 
                                            <td>{{ $mhs->mahasiswa_aktif_transfer }}</td>
                                            </tr>
                                        @endforeach --}}
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
                            <div class="collapse" id="des3">
                                <div class="card card-body">
                                    <p>
                                        Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS dengan mengikuti format Tabel 3.a.1) berikut ini
                                    </p>
                                </div> 
                            </div>

                <!-- Modal -->
                <div class="modal fade" id="modalpkm" tabindex="-1" aria-labelledby="modalpenelitian" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="modalpkm">Tambah Data PKM</h5>
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
        
                                            <th class="align-middle" scope="col" rowspan="2">Lembaga Mitra</th>
                                            <th scope="col" colspan="3">Tingkat</th>
                                            <th class="align-middle" scope="col" rowspan="2" >Judul Kegiatan Kerjasama</th>
                                            <th class="align-middle" scope="col" rowspan="2">Manfaat Bagi PS yang Diakreditasi</th>
                                            <th class="align-middle" scope="col" rowspan="2" >Waktu dan Durasi</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Bukti Kerjasama</th>  
                                        </tr>
                                        <tr>
                                            <th scope="col">Internasional</th>
                                            <th scope="col">Nasional</th>       
                                            <th scope="col">Lokal/Wilayahs</th>       
                                        </tr>
                                
                                    </thead>
        
                                    <tbody class="text-dark">
                                        <tr>
                                            <td>Eko</td>
                                            <td>Eko</td>
                                            <td>Eko</td>
                                            <td>Eko</td>
                                            <td>Eko</td>
                                        </tr>
                                        {{-- @foreach ($mahasiswa_asing as $mhs)
                                            <tr>
                                                @for ($i = 0; $i < $count; $i++)
                                                <td>{{ $i }}</td>
                                                @endfor
                                            <td>{{ $mhs->daya_tampung }}</td> 
                                            <td>{{ $mhs->c_pendaftar }}</td> 
                                            <td>{{ $mhs->c_lulus_seleksi }}</td> 
                                            <td>{{ $mhs->mahasiswa_reguler }}</td> 
                                            <td>{{ $mhs->mahasiswa_transfer }}</td> 
                                            <td>{{ $mhs->mahasiswa_aktif_reguler }}</td> 
                                            <td>{{ $mhs->mahasiswa_aktif_transfer }}</td>
                                            </tr>
                                        @endforeach --}}
                                </table> 
                            </div>

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
@endsection