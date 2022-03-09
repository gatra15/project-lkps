<div class="tab-pane fade show active" id="pengakuan" role="tabpanel" aria-labelledby="pengakuan-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpengakuan">
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
    <div class="modal fade" id="modalpengakuan" tabindex="-1" aria-labelledby="modalpengakuan" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalpengakuan">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.pengakuan')
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
                @foreach ($pengakuan as $pengakuan)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pengakuan->nama }}</td> 
                    <td>{{ $pengakuan->bidang_keahlian }}</td> 
                    <td>{{ $pengakuan->bukti_pendukung }}</td> 
                    <td>{{ $pengakuan->tingkat == 'Wilayah' ? 'V' : '' }}</td> 
                    <td>{{ $pengakuan->tingkat == 'Nasional' ? 'V' : '' }}</td> 
                    <td>{{ $pengakuan->tingkat == 'Internasional' ? 'V' : '' }}</td> 
                    <td>{{ $pengakuan->tahun }}</td> 
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpengakuanedit-{{ $pengakuan->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/kinerja-dosen/{{ $pengakuan->id }}" data-toggle="modal" data-target="#modalpengakuandelete-{{ $pengakuan->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                    </tr>

                <!-- Modal Edit Data Pengakuan DTPS -->
            <div class="modal fade" id="modalpengakuanedit-{{ $pengakuan->id }}" tabindex="-1" aria-labelledby="modalpengakuanedit" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modalpengakuanedit">Edit Data Dosen Tetap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @include('partials.kinerjadosenmodal.pengakuanedit')
                </div>
                </div>
                </div>
        
                <!-- Modal Delete Data Pengakuan DTPS -->
                <div class="modal fade" id="modalpengakuandelete-{{ $pengakuan->id }}" tabindex="-1" aria-labelledby="modalpengakuandelete" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modalpengakuandelete">Yakin?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @include('partials.kinerjadosenmodal.pengakuandelete')
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
                @endforeach 
        </table> 
    </div>
</div>