@extends('partials.sidebar')
@extends('layouts.main')

@section('content')

<!-- JUDUL -->
<div class="content-header">
    <div class="container-fluid">
            <h1>PROFIL DOSEN</h1>
    </div>
</div>

<!-- TAB MENU -->
<div class="content">
    <div class="container-fluid">
            <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="dosTetap-tab" data-toggle="tab" href="#dosen-tetap" role="tab" aria-controls="dosen-tetap" aria-selected="true">Dosen Tetap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="dosbingTA-tab" data-toggle="tab" href="#dosbing-ta" role="tab" aria-controls="dosbing-ta" aria-selected="false">Dosen Pembimbing Utama TA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="ewmp-tab" data-toggle="tab" href="#ewmp" role="tab" aria-controls="ewmp" aria-selected="false">EWMP Dosen Tetap Perguruan Tinggi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="dosTTetap-tab" data-toggle="tab" href="#dosen-ttetap" role="tab" aria-controls="dosen-ttetap" aria-selected="false">Dosen Tidak Tetap</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="dosIndustri-tab" data-toggle="tab" href="#dosen-industri" role="tab" aria-controls="dosen-industri" aria-selected="false">Dosen Industri/Praktisi</a>
            </li>
        </ul>
    </div>

    <!-- ISI BODY  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="dosen-tetap" role="tabpanel" aria-labelledby="dosTetap-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosentetap">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des1">
                        <div class="card card-body">
                            <p>
                            Keterangan:
                            NDT = Jumlah Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang diakreditasi.<br>
                            NDTPS = Jumlah Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang<br>
                            sesuai dengan kompetensi inti program studi yang diakreditasi.
                            1) Diisi dengan nama program studi pada pendidikan pasca sarjana (Magister/Magister Terapan dan/atau Doktor/Doktor Terapan)
                            yang pernah diikuti.<br>
                            2) Diisi dengan bidang keahlian sesuai pendidikan pasca sarjana yang relevan dengan mata kuliah yang diampu.<br>
                            3) Diisi dengan tanda centang V jika bidang keahlian sesuai dengan kompetensi inti program studi yang diakreditasi.<br>
                            4) Diisi dengan nomor Sertifikat Pendidik Profesional.<br>
                            5) Diisi dengan bidang sertifikasi dan lembaga penerbit sertifikat. Data ini diisi oleh pengusul dari program studi pada program
                            Diploma Tiga dan program Sarjana Terapan.<br>
                            6) Diisi dengan nama mata kuliah yang diampu pada program studi yang diakreditasi pada saat TS-2 s.d. TS.<br>
                            7) Diisi dengan tanda centang V jika bidang keahlian sesuai dengan mata kuliah yang diampu.<br>
                            8) Diisi dengan nama mata kuliah yang diampu pada program studi lain pada saat TS-2 s.d. TS.<br>
                            </p>
                        </div> 
                    </div>
                    </div>
                    {{-- CONTENT --}}
                        
                    <div id="printElement container-fluid">
                        <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
                            <thead>
                                <tr>

                                    <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                                    <th class="align-middle" scope="col" rowspan="2">NIDN/ NIDK</th>
                                    <th th scope="col" colspan="2" >Pendidikan Pasca Sarjana <sup>1)</sup></th>
                                    <th class="align-middle" scope="col" rowspan="2">Bidang Keahlian <sup>2)</sup></th>
                                    <th class="align-middle" scope="col" rowspan="2" >Kesesuaian dengan Kompetensi Inti PS <sup>3)</sup></th>  
                                    <th class="align-middle" scope="col" rowspan="2" >Jabatan Akademik</th>  
                                    <th class="align-middle" scope="col" rowspan="2" >Sertifikat Pendidik Profesional <sup>4)</sup></th>  
                                    <th class="align-middle" scope="col" rowspan="2" >Sertifikat Kompetensi /Profesi/ Industri <sup>5)</sup></th>  
                                    <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS yang Diakreditasi <sup>6)</sup></th>  
                                    <th class="align-middle" scope="col" rowspan="2" >Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu <sup>7)</sup></th>  
                                    <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS Lain <sup>8)</sup></th>  
                                </tr>
                                <tr>
                                    <th scope="col">Magister /Magister Terapan/ Spesialis</th>
                                    <th scope="col">Doktor /Doktor Terapan/ Spesialis</th>       
                                </tr>
                        
                            </thead>

                            <tbody class="text-dark">
                                <tr>
                                    <td>eko</td>
                                </tr>
                                 {{-- Coding Tabel Disini --}}
                                 {{-- <tr>
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
                                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosentetapedit-{{ $indikator->id }}"><i class="fas fa-edit"></i></a></li>
                                        <li>
                                            <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modadosentetapdelete-{{ $indikator->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                                    </ul></td>
                                </tr> --}}
                                <tr>
                                    <td><b>Jumlah</b></td>
                                    <td colspan="2"><b>NDT :  {{-- coding jumlah Dosen pengampu --}}</b></td>
                                    <td class="abu"></td>
                                    <td class="abu"></td>
                                    <td class="abu"></td>
                                    <td colspan="2"><b>NDTS : {{-- coding jumlah Dosen pengampu yang bidang keahliannya sesuai --}}</b></td>
                                    <td class="abu"></td>
                                    <td class="abu"></td>
                                    <td class="abu"></td>
                                    <td class="abu"></td>
                                </tr>
                <!-- Modal Edit Data Dosen Tetap -->
                <div class="modal fade" id="modaldosentetap" tabindex="-1" aria-labelledby="modaldosentetap" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="modaldosentetap">Tambah Data Dosen Tetap</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @include('partials.profildosenmodal.dosentetapedit')
                    </div>
                    </div>
                </div>
                <!-- Modal Tambah Data Dosen Tetap -->
                <div class="modal fade" id="modaldosentetap" tabindex="-1" aria-labelledby="modaldosentetap" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="modaldosentetap">Tambah Data Dosen Tetap</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @include('partials.profildosenmodal.dosentetapdelete')
                    </div>
                    </div>
                </div>
                        </table> 

                <!-- Modal Tambah Data Dosen Tetap -->
                <div class="modal fade" id="modaldosentetap" tabindex="-1" aria-labelledby="modaldosentetap" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="modaldosentetap">Tambah Data Dosen Tetap</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @include('partials.profildosenmodal.dosentetap')
                    </div>
                    </div>
                </div>
                </div>
{{-- AKHIR TAB --}}
{{-- New TAB --}}
                <div class="tab-pane fade" id="dosbing-ta" role="tabpanel" aria-labelledby="dosbingTA-tab">
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
                                Dosen Pembimbing Utama TA
                            </p>
                        </div> 
                    </div>
{{-- CONTENT --}}
    
                    <div id="printElement container-fluid">
                        <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
                            <thead>
                                <tr>

                                    <th class="align-middle" scope="col" rowspan="3">No</th>
                                    <th class="align-middle" scope="col" rowspan="3">Nama Dosen</th>
                                    <th scope="col" colspan="8" >Jumlah Mahasiswa Yang Dibimbing</th>
                                    <th class="align-middle" scope="col" rowspan="3">Rata-rata Jumlah Bimbingan di Semua Program/Semester  </th>  
                                </tr>
                                <tr>
                                    <th scope="col" colspan="4">pada PS yang Diakreditasi</th>
                                    <th scope="col" colspan="4">pada PS Lain di PT</th>       
                                </tr>
                                <tr>
                                    <th scope="col" >TS-2</th>
                                    <th scope="col" >TS-1</th>
                                    <th scope="col" >TS</th>
                                    <th scope="col" >Rata - rata</th>    
                                    <th scope="col" >TS-2</th>
                                    <th scope="col" >TS-1</th>
                                    <th scope="col" >TS</th>
                                    <th scope="col" >Rata - rata</th>    
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

                </div>
{{-- AKHIR TAB --}}
                <div class="tab-pane fade" id="ewmp" role="tabpanel" aria-labelledby="ewmp-tab">
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
                                Dosen Tidak Tetap
                            </p>
                        </div> 
                    </div>
{{-- CONTENT --}}
    
<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
        <thead>
            <tr>

                <th class="align-middle" scope="col" rowspan="3">No</th>
                <th class="align-middle" scope="col" rowspan="3">Nama Dosen(DT)</th>
                <th class="align-middle" scope="col" rowspan="3">DTPS</th>
                <th scope="col" colspan="6" >Ekuivalen Waktu Mengajar Penuh(EWMP) pada saat TS dalam satuan kredit semester (sks)</th>
                <th class="align-middle" scope="col" rowspan="3">Jumlah (SKS)</th>  
                <th class="align-middle" scope="col" rowspan="3">Rata-tara per semester (SKS)</th>  
            </tr>
            <tr>
                <th scope="col" colspan="3">pada PS yang Diakreditasi</th>
                <th class="align-middle" scope="col" rowspan="2">Penelitian</th>
                <th class="align-middle" scope="col" rowspan="2">PkM</th> 
                <th class="align-middle" scope="col" rowspan="2">Tugas Tambahan dan/atau Penunjang</th>        
            </tr>
            <tr>
                <th scope="col" >PS yang Diakreditasi</th>
                <th scope="col" >PS Lain di dalam PT</th>
                <th scope="col" >PS Lain di luar PT</th> 
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
                <div class="tab-pane fade" id="dosen-ttetap" role="tabpanel" aria-labelledby="dosTTetap-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des4">
                        <div class="card card-body">
                            <p>
                                Tuliskan data Ekuivalen Waktu Mengajar Penuh (EWMP) dari Dosen Tetap Perguruan Tinggi yang ditugaskan di program studi yang diakreditasi (DT) pada saat TS dengan mengikuti format Tabel 3.a.3) berikut ini.
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
                <th class="align-middle" scope="col" rowspan="2" >Pendidikan Pasca Sarjana</th>
                <th class="align-middle" scope="col" rowspan="2">Bidang Keahlian</th>
                <th class="align-middle" scope="col" rowspan="2" >Jabatan Akademik</th>                   
                <th class="align-middle" scope="col" rowspan="2" >Sertifikat Pendidik Profesional</th>  
                <th class="align-middle" scope="col" rowspan="2" >Sertifikat Kompetensi /Profesi/ Industri</th>  
                <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS yang Diakreditasi</th>  
                <th class="align-middle" scope="col" rowspan="2" >Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu</th>  
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
                <div class="tab-pane fade" id="dosen-industri" role="tabpanel" aria-labelledby="dosIndustri-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des5" role="button" aria-expanded="false" aria-controls="des5">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des5">
                        <div class="card card-body">
                            <p>
                                Dosen Industri/Praktisi
                            </p>
                        </div> 
                    </div>
{{-- CONTENT --}}
    
<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
        <thead>
            <tr>

                <th class="align-middle" scope="col" rowspan="2">Nama Dosen/ Industri/ Praktisi</th>
                <th class="align-middle" scope="col" rowspan="2">NIDK</th>
                <th class="align-middle" scope="col" rowspan="2" >Perusahaan Industri</th>
                <th class="align-middle" scope="col" rowspan="2">Pendidikan Tertinggi</th>
                <th class="align-middle" scope="col" rowspan="2" >Bidang Keahlian</th>                   
                <th class="align-middle" scope="col" rowspan="2" >Sertifikat Profesi/ Kompetensi/ Industri</th>  
                <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu </th>  
                <th class="align-middle" scope="col" rowspan="2" >Bobot Kredit (SKS)</th>  
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

@endsection