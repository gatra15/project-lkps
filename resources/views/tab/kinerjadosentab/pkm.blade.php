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
    <a href="/kinerja-dosen/karya-ilmiah/download/excel">Excel</a>
    <a href="/kinerja-dosen/karya-ilmiah/download/csv">CSV</a>
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
        @include('partials.kinerjadosenmodal.pkm')
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
{{-- TABLE HERE --}}
@include('tab.kinerjadosentab.pkmtable')    

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
    
</div>

