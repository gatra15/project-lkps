{{-- 
    MANUSIA TS - INI MAKHLUK TS ! INI ALIEN TS !! NOMER E MASUK NING DATA TABEL NGGARAI NGELU TOK 
--}}
<div class="tab-pane fade" id="pengabdian" role="tabpanel" aria-labelledby="pengabdian-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>

    <!-- Modal Tambah PKM DTPS -->
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
    
    <div class="collapse" id="des3">
        <div class="card card-body">
            <p>
                Tuliskan jumlah judul Pengabdian kepada Masyarakat (PkM) <sup>1)</sup>  yang dilaksanakan oleh
                DTPS berdasarkan sumber pembiayaan, yang relevan dengan bidang program studi
                pada TS-2 sampai dengan TS, dengan mengikuti format Tabel berikut ini.
                <br> <br>
                <b> Keterangan </b> <br>
                1) Kegiatan PkM tercatat di unit/lembaga yang mengelola kegiatan PkM di tingkat
                Perguruan Tinggi/UPPS. <br>
                2) PkM dengan sumber pembiayaan dari DTPS. <br>
            </p>
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
                </tr>
                <tr>
                    <th scope="col">TS-2</th>
                    <th scope="col">TS-1</th>
                    <th scope="col">TS</th>
                </tr>
        
            </thead>

            <tbody class="text-dark">
                <tr>
                    <td>1 </td>
                    <td>a) Perguruan Tinggi <br>
                        b) Mandiri <sup>2)</sup> </td>
                    <td> database </td>
                    <td> database</td>
                    <td> database </td>
                    <td> coding jumlah</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lembaga Dalam Negeri (Luar Negeri) </td>
                    <td> database </td>
                    <td> database</td>
                    <td> database </td>
                    <td> coding jumlah</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lembaga Luar Negeri </td>
                    <td> database </td>
                    <td> database</td>
                    <td> database </td>
                    <td> coding jumlah</td>
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
                 --}}


            <!-- Modal Edit Data PKM DTPS -->
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
        
            <!-- Modal Delete Data PKM DTPS -->
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
                
                {{-- @endforeach --}}

                
        </table> 
    </div>
</div>

