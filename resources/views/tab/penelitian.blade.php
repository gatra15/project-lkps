@extends('partials.sidebar')
@extends('layouts.main')

@section('content')

<div class="content-header">
    <div class="container-fluid">
            <h1>PENELITIAN</h1>
    </div>
</div>

<!-- MENU ATAS -->
<div class="content">
    <div class="container-fluid">
            <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="mahasiswa-tab" data-toggle="tab" href="#mahasiswa" role="tab" aria-controls="mahasiswa" aria-selected="true">Penelitian DTPS yang Melibatkan Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="rujukan-tab" data-toggle="tab" href="#rujukan" role="tab" aria-controls="rujukan" aria-selected="false">Penelitian DTPS yang menjadi rujukan tema tesis/disertasi</a>
            </li>
          </ul>
          
    </div>
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="mahasiswa" role="tabpanel" aria-labelledby="mahasiswa-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
                            Deskripsi
                        </a>
                    </p>
                    <div class="collapse" id="des1">
                        <div class="card card-body">
                            <p>
                                Tuliskan judul penelitian/PkM DTPS yang terintegrasi ke dalam pembelajaran/ pengembangan matakuliah dalam 3 tahun terakhir dengan mengikuti format Tabel 5.b berikut ini.
                            </p>
                            Keterangan: <br>
                            1) Judul penelitian dan PkM tercatat di unit/lembaga yang mengelola kegiatan penelitian/PkM di tingkat Perguruan Tinggi/UPPS. <br>
                            2) Bentuk integrasi dapat berupa tambahan materi perkuliahan, studi kasus, Bab/ Subbab dalam buku ajar, atau bentuk lain yang relevan.
                        </div> 
                    </div>
                    {{-- CONTENT --}}
    
                    <div id="printElement container-fluid">
                        <table id='form-print' class="table text-center table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                                    <th class="align-middle" scope="col" rowspan="2">Tema Penelitian Sesuai Roadmap</th>
                                    <th class="align-middle" scope="col" rowspan="2">Nama Mahasiswa</th>
                                    <th class="align-middle" scope="col" rowspan="2">Judul Kegiatan</th>
                                    <th class="align-middle" scope="col" rowspan="2">Tahun</th>

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

{{-- AKHIR CONTENT --}}
                </div>
                <div class="tab-pane fade" id="rujukan" role="tabpanel" aria-labelledby="rujukan-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
                            Deskripsi
                        </a>
                    </p>
                    <div class="collapse" id="des2">
                        <div class="card card-body">
                            <p>
                                Tuliskan judul penelitian/PkM DTPS yang terintegrasi ke dalam pembelajaran/ pengembangan matakuliah dalam 3 tahun terakhir dengan mengikuti format Tabel 5.b berikut ini.
                            </p>
                            Keterangan: <br>
                            1) Judul penelitian dan PkM tercatat di unit/lembaga yang mengelola kegiatan penelitian/PkM di tingkat Perguruan Tinggi/UPPS. <br>
                            2) Bentuk integrasi dapat berupa tambahan materi perkuliahan, studi kasus, Bab/ Subbab dalam buku ajar, atau bentuk lain yang relevan.
                        </div> 
                    </div>
                    {{-- CONTENT --}}
    
                    <div id="printElement container-fluid">
                        <table id='form-print' class="table text-center table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                                    <th class="align-middle" scope="col" rowspan="2">Tema Penelitian Sesuai Roadmap</th>
                                    <th class="align-middle" scope="col" rowspan="2">Nama Mahasiswa</th>
                                    <th class="align-middle" scope="col" rowspan="2">Judul Tesis/ Disertai</th>
                                    <th class="align-middle" scope="col" rowspan="2">Tahun</th>

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

{{-- AKHIR CONTENT --}}
                </div>
              </div>
        </div>
    </div>

@endsection