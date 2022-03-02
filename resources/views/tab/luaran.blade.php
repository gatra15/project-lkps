@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
            <h1>LUARAN DAN CAPAIAN TRIDHARMA</h1>
    </div>
</div>

<!-- MENU ATAS -->
<div class="content">
    <div class="container-fluid">
            <div class="card">
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
        </ul>
    </div>

    <!-- ISI BODY  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="capaian" role="tabpanel" aria-labelledby="capaian-tab">
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
                                Tuliskan data Indeks Prestasi Kumulatif (IPK) lulusan dalam 3 tahun terakhir dengan mengikuti format Tabel 8.a berikut ini. Data dilengkapi dengan jumlah lulusan pada setiap tahun kelulusan.
                            </p>
                            Keterangan: <br>
                            TS = Tahun akademik penuh terakhir saat pengajuan usulan akreditasi.
                        </div> 
                    </div>
{{-- CONTENT --}}
    
<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">Tahun Lulus</th>
                <th class="align-middle" scope="col" rowspan="2">Jumlah Lulusan</th>
                <th scope="col" colspan="3">Indeks Prestasi Kumulatif (IPK)</th>
            </tr>
            <tr>
                <th scope="col">Min.</th>
                <th scope="col">Rata-rata</th>
                <th scope="col">Maks.</th>
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
                <div class="tab-pane fade" id="prestasi" role="tabpanel" aria-labelledby="prestasi-tab">
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
                                Tuliskan prestasi akademik/non-akademik yang dicapai mahasiswa Program Studi dalam 5 tahun terakhir dengan mengikuti format Tabel 8.b.1) berikut ini. Data dilengkapi dengan keterangan kegiatan yang diikuti (nama kegiatan, tahun, tingkat, dan prestasi yang dicapai).
                            </p>
                        </div> 
                    </div>
{{-- CONTENT --}}
    
<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">Nama Kegiatan</th>
                <th class="align-middle" scope="col" rowspan="2">Tahun Perolehan</th>
                <th  scope="col" colspan="3">Tingkat</th>
                <th class="align-middle" scope="col" rowspan="2">Prestasi yang Dicapai</th>
            </tr>
            <tr>
                <th  scope="col">Lokal/ Wilayah</th>
                <th  scope="col">Nasional</th>
                <th  scope="col">Internasional</th>
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
                <div class="tab-pane fade" id="efektifitas" role="tabpanel" aria-labelledby="efektifitas-tab">
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
                                Tuliskan masa studi lulusan untuk dengan mengikuti format Tabel 8.c berikut ini. <br>
                                Tabel 8.c. Masa Studi Lulusan Program Studi <br>
                                Diisi oleh pengusul dari Program Studi pada Program Sarjana/Sarjana Terapan
                            </p>
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
                <div class="tab-pane fade" id="daya-saing" role="tabpanel" aria-labelledby="dayaSaing-tab">
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
                                Tuliskan data masa tunggu lulusan untuk mendapatkan pekerjaan pertama dalam 3 tahun, mulai TS-4 sampai dengan TS-2, dengan mengikuti format Tabel 8.d.1) berikut ini. Data diambil dari hasil studi penelusuran lulusan.
                            </p>
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
                <div class="tab-pane fade" id="kinerja" role="tabpanel" aria-labelledby="kinerja-tab">
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
                                <u>Tabel 8.e.1) berikut ini diisi oleh pengusul dari Program Studi pada program Diploma Tiga/Sarjana/Sarjana Terapan.</u><br>
                                Tuliskan tingkat/ukuran tempat kerja/berwirausaha lulusan dalam 3 tahun, mulai TS-4 sampai dengan TS-2, dengan mengikuti format Tabel 8.e.1) berikut ini. Data diambil dari hasil studi penelusuran lulusan. <br><br>
                                <u>Tabel 8.e.2) berikut ini diisi oleh pengusul dari Program Studi pada program Diploma Tiga/Sarjana/Sarjana Terapan/Magister/Magister Terapan.</u><br>
                                Tuliskan hasil pengukuran kepuasan pengguna lulusan berdasarkan aspek-aspek: 1) etika, 2) keahlian pada bidang ilmu (kompetensi utama), 3) kemampuan berbahasa asing, 4) penggunaan teknologi informasi, 5) kemampuan berkomunikasi, 6) kerjasama dan 7) pengembangan diri, dengan mengikuti format Tabel 8.e.2) berikut ini. Data diambil dari hasil studi penelusuran lulusan.

                            </p>
                        </div> 
                    </div>
{{-- CONTENT --}}
    
<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">Tahun Lulus</th>
                <th class="align-middle" scope="col" rowspan="2">Jumlah Lulusan</th>
                <th class="align-middle" scope="col" rowspan="2">Jumlah Lulusan yang Terlacak</th>
                <th scope="col" colspan="3">Jumlah Lulusan Terlacak yang Bekerja berdasarkan Tingkat/Ukuran Tempat Kerja/Berwirausaha</th>
            </tr>
            <tr>
                <th scope="col">Lokal/
                    Wilayah/
                    Berwirausaha
                    tidak Berizin</th>
                <th scope="col">Nasional/
                    Berwirausaha
                    Berizin</th>
                <th scope="col">Multinasiona/
                    Internasional</th>
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
                <div class="tab-pane fade" id="luaran" role="tabpanel" aria-labelledby="luaran-tab">
                    <p class="d-flex justify-content-between">
                        <a class="btn btn-primary" data-toggle="collapse" href="#des6" role="button" aria-expanded="false" aria-controls="des6">
                            Deskripsi
                        </a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Tambah data
                        </button>
                    </p>
                    <div class="collapse" id="des6">
                        <div class="card card-body">
                            <p>
                                <u>Tabel 8.f.1) berikut ini diisi oleh pengusul dari Program Studi pada program Sarjana/Magister/Doktor.</u><br>
                                Tuliskan jumlah publikasi ilmiah mahasiswa, yang dihasilkan secara mandiri atau bersama DTPS, dalam 3 tahun terakhir dengan mengikuti format Tabel 8.f.1) berikut ini. Judul publikasi harus relevan dengan bidang program studi.

                            </p>
                        </div> 
                    </div>
{{-- CONTENT --}}
    
<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">Media Publikasi</th>
                <th scope="col" colspan="3">Jumlah Judul</th>
                <th class="align-middle" scope="col" rowspan="2">Jumlah</th>
            </tr>
            <tr>
                <th scope="col">TS-2</th>
                <th scope="col">TS-1</th>
                <th scope="col">TS</th>
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