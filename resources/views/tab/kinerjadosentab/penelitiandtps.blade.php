{{-- 
    MANUSIA TS - INI MAKHLUK TS ! INI ALIEN TS !! NOMER E MASUK NING DATA TABEL NGGARAI NGELU TOK 
--}}
    <div class="tab-pane fade" id="penelitian" role="tabpanel" aria-labelledby="penelitian-tab">
        <p class="d-flex justify-content-between">
            <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
                Deskripsi
            </a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Tambah Data
            </button>
        
        </p>


    <div class="collapse" id="des2">
        <div class="card card-body">
            <p>
            Tuliskan jumlah judul penelitian <sup> 1)</sup> yang dilaksanakan oleh DTPS berdasarkan sumber
            pembiayaan, yang relevan dengan bidang program studi pada TS-2 sampai dengan TS
            dengan mengikuti format Tabel berikut ini.
            <br> <br>
            <b> Keterangan </b> <br>
            1) Kegiatan penelitian tercatat di unit/lembaga yang mengelola kegiatan penelitian di
            tingkat Perguruan Tinggi/UPPS. <br>
            2) Penelitian dengan sumber pembiayaan dari DTPS <br>
            </p>
        </div> 
    </div>

    <!-- Modal Tambah Data Penelitian DTPS -->
    <div class="modal fade" id="modaldosenpenelitian" tabindex="-1" aria-labelledby="modaldosenpenelitian" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modaldosenpenelitian">Tambah Data Dosen Tetap</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.kinerjadosenmodal.penelitian')
    </div>
    </div>
    </div>

{{-- CONTENT --}}
    
    <div id="printElement container-fluid">
        <table id='form-print' class="table text-center table-bordered table-condensed">
            <thead>
                <tr>

                    <th class="align-middle" scope="col" rowspan="2">No</th>
                    <th class="align-middle" scope="col" rowspan="2">Sumber Pembiayaan</th>
                    <th scope="col" colspan="3">Jumlah Judul</th>
                    <th class="align-middle" scope="col" rowspan="2" >Jumlah</th>                    
                    <th class="align-middle" scope="col" rowspan="2" >Opsi</th>                    
                
                
                </tr>
                <tr>
                    <th scope="col">TS-2</th>
                    <th scope="col">TS-1</th>
                    <th scope="col">TS</th>
                </tr>
        
            </thead>

            <tbody class="text-dark">
                <tr id="table">
                    <td>1</td>
                </tr>
                
                @foreach ($penelitian as $penelitian)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penelitian->nama }}</td> 
                    <td>{{ $penelitian->bidang_keahlian }}</td> 
                    <td>{{ $penelitian->bukti_pendukung }}</td> 
                    <td>{{ $penelitian->tingkat }}</td> 
                    <td>{{ $penelitian->tahun }}</td> 
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenpenelitianedit-{{ $penelitian->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $pengkuan->id }}" data-toggle="modal" data-target="#modalpenelitiandelete-{{ $penelitian->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                    </tr>

            <!-- Modal Edit Data Penelitian DTPS -->
            <div class="modal fade" id="modaldosenpenelitianedit-{{ $penelitian->id }}" tabindex="-1" aria-labelledby="modaldosenpenelitianedit" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modaldosenpenelitianedit">Edit Data Dosen Tetap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @include('partials.kinerjadosenmodal.penelitianedit')
                </div>
                </div>
                </div>
        
                <!-- Modal Delete Data Penelitian DTPS -->
                <div class="modal fade" id="modaldosenpenelitiandelete" tabindex="-1" aria-labelledby="modaldosenpenelitiandelete" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modaldosenpenelitiandelete">Yakin?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @include('partials.kinerjadosenmodal.penelitiandelete')
                </div>
                </div>
                </div>

                <tr>
                    <td colspan="2" class="text-center"><b>Jumlah</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
        </table> 
    </div>
</div>  


