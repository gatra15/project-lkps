<div class="tab-pane fade show active" id="pengakuan" role="tabpanel" aria-labelledby="pengakuan-tab">
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
            Tuliskan pengakuan/rekognisi atas kepakaran/prestasi/kinerja DTPS yang diterima
            dalam 3 tahun terakhir dengan mengikuti format Tabel berikut ini : <br> <br>
            <b>Keterangan</b> <br>
            <sup>1)</sup> Pengakuan atau rekognisi atas kepakaran/prestasi/kinerja dapat berupa: <br>
            a) menjadi visiting lecturer atau visiting scholar di program studi/perguruan tinggi
            terakreditasi A/Unggul atau program studi/perguruan tinggi internasional bereputasi. <br>
            b) menjadi keynote speaker/invited speaker pada pertemuan ilmiah tingkat nasional/
            internasional. <br>
            c) menjadi editor atau mitra bestari pada jurnal nasional terakreditasi/jurnal
            internasional bereputasi di bidang yang sesuai dengan bidang program studi. <br>
            d) menjadi staf ahli/narasumber di lembaga tingkat wilayah/nasional/internasional
            pada bidang yang sesuai dengan bidang program studi (untuk pengusul dari
            program studi pada program Sarjana/Magister/Doktor), atau menjadi tenaga
            ahli/konsultan di lembaga/industri tingkat wilayah/nasional/ internasional pada
            bidang yang sesuai dengan bidang program studi (untuk pengusul dari program
            studi pada program Diploma Tiga/Sarjana Terapan/Magister Terapan/Doktor
            Terapan). <br>
            e) mendapat penghargaan atas prestasi dan kinerja ditingkat wilayah /nasional /internasional. <br>
            <sup>2)</sup> Diisi dengan tanda centang V pada kolom yang sesuai.
        </p>
    </div> 
</div>
    
<!-- Modal Tambah Data Pengakuan DTPS -->
    <div class="modal fade" id="modaldosentetap" tabindex="-1" aria-labelledby="modaldosentetap" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosentetap">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            {{-- @include('partials.profildosenmodal.dosentetap') --}}
        </div>
        </div>
        </div>

{{-- CONTENT --}}
    
    <div id="printElement container-fluid">
        <table id='form-print' class="table text-center table-bordered table-condensed">
            <thead>
                <tr>

                    <th class="align-middle" scope="col" rowspan="2">No</th>
                    <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                    <th class="align-middle" scope="col" rowspan="2">Bidang Keahlian</th>
                    <th class="align-middle" scope="col" rowspan="2" >Rekognisi dan Bukti Pendukung <sup>1)</sup></th>
                    <th scope="col" colspan="3">Tingkat <sup>2)</sup></th>
                    <th class="align-middle" scope="col" rowspan="2" >Tahun</th>                    
                    <th class="align-middle" scope="col" rowspan="2" >Opsi</th>                    
                </tr>
                <tr>
                    <th scope="col">Wilayah</th>
                    <th scope="col">Nasional</th>
                    <th scope="col">Internasional</th>
                </tr>
        
            </thead>

            <tbody class="text-dark">
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
                --}}

                <!-- Modal Edit Data Pengakuan DTPS -->
            <div class="modal fade" id="modaldosentetapedit" tabindex="-1" aria-labelledby="modaldosentetapedit" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modaldosentetapedit">Edit Data Dosen Tetap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    {{-- @include('partials.profildosenmodal.dosentetapedit') --}}
                </div>
                </div>
                </div>
        
                <!-- Modal Delete Data Pengakuan DTPS -->
                <div class="modal fade" id="modaldosentetapdelete" tabindex="-1" aria-labelledby="modaldosentetapdelete" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modaldosentetapdelete">Yakin?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    {{-- @include('partials.profildosenmodal.dosentetapdelete') --}}
                </div>
                </div>
                </div>

                <tr>
                    <td colspan="4" class="text-center"><b>Jumlah</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                {{-- @endforeach  --}}
        </table> 
    </div>
</div>