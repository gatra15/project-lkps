{{-- 
    MANUSIA TS - INI MAKHLUK TS ! INI ALIEN TS !! NOMER E MASUK NING DATA TABEL NGGARAI NGELU TOK 
--}}
<div class="tab-pane fade" id="pengabdian" role="tabpanel" aria-labelledby="pengabdian-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
            Deskripsi
        </a>
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenpengabdian">
            Tambah Data
        </button> --}}
    
    </p>
    @can('download file')
    <a href="/kinerja-dosen/karya-ilmiah/download/excel" class="btn btn-success">Excel</a>
    <a href="/kinerja-dosen/karya-ilmiah/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table3')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
<div class="collapse" id="des2">
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

@foreach ($pkms['ts_all'] as $ts)
<!-- Modal Edit Data Penelitian DTPS -->
<div class="modal fade" id="modalpkmedit-{{ $ts->id }}" tabindex="-1" aria-labelledby="modaldosenpkmedit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
    <h5 class="modal-title" id="modaldosenpkmedit">Edit Data Pengabdian Kepada Masyarakat DTPS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.kinerjadosenmodal.pkmedit')
    </div>
    </div>
    </div>

    <!-- Modal Delete Data Penelitian DTPS -->
    <div class="modal fade" id="modalpkmdelete-{{ $ts->id }}" tabindex="-1" aria-labelledby="modaldosenpkmdelete" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modaldosenpkmdelete">Hapus Data Pengabdian Kepada Masyarakat DTPS </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.kinerjadosenmodal.pkmdelete')
    </div>
    </div>
    </div>
@endforeach

</div>  
@include('layouts.table')


