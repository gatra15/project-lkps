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
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                    Tambah data
                                </button>
                            </p>
                            <div class="collapse" id="des1">
                                <div class="card card-body">
                                    <p>
                                        Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS dengan mengikuti format Tabel 3.a.1) berikut ini
                                    </p>
                                </div> 
                            </div>
                            {{-- CONTENT --}}
                                
                            <div id="printElement container-fluid">
                                <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
                                    <thead>
                                        <tr>
        
                                            <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                                            <th class="align-middle" scope="col" rowspan="2">NIDN/ NIDK</th>
                                            <th th scope="col" colspan="2" >Pendidikan Pasca Sarjana</th>
                                            <th class="align-middle" scope="col" rowspan="2">Bidang Keahlian</th>
                                            <th class="align-middle" scope="col" rowspan="2" >Kesesuaian dengan Kompetensi Inti PS</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Jabatan Akademik</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Sertifikat Pendidik Profesional</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Sertifikat Kompetensi /Profesi/ Industri</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS yang Diakreditasi</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</th>  
                                            <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS Lain</th>  
                                        </tr>
                                        <tr>
                                            <th scope="col">Magister /Magister Terapan/ Spesialis</th>
                                            <th scope="col">Doktor /Doktor Terapan/ Spesialis</th>       
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
                        <div class="tab-pane fade show" id="penelitian" role="tabpanel" aria-labelledby="penelitian-tab">
                            <p class="d-flex justify-content-between">
                                <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
                                    Deskripsi
                                </a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
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
                            {{-- CONTENT --}}
                                
                            <p>Content 2</p>
                            {{-- End Content --}}
                        </div>
                        {{-- End Tab --}}
                        {{-- Tab --}}
                        <div class="tab-pane fade show" id="pkm" role="tabpanel" aria-labelledby="pkm-tab">
                            <p class="d-flex justify-content-between">
                                <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
                                    Deskripsi
                                </a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
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
                            {{-- CONTENT --}}
                                
                            <p>Content 3</p>
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