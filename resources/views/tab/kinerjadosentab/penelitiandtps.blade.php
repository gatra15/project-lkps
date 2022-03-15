{{-- 
    MANUSIA TS - INI MAKHLUK TS ! INI ALIEN TS !! NOMER E MASUK NING DATA TABEL NGGARAI NGELU TOK 
--}}
    <div class="tab-pane fade" id="penelitian" role="tabpanel" aria-labelledby="penelitian-tab">
        <p class="d-flex justify-content-between">
            <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
                Deskripsi
            </a>
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenpenelitian">
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


{{-- TABLE HERE --}}
@include('tab.kinerjadosentab.penelitiantable')

@foreach ($penelitians['penelitian'] as $penelitian)
    <!-- Modal Edit Data Penelitian DTPS -->
    <div class="modal fade" id="modaldosenpenelitianedit-{{ $penelitian->id }}" tabindex="-1" aria-labelledby="modaldosenpenelitianedit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaldosenpenelitianedit">Edit Data Penelitian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.penelitianedit')
        </div>
        </div>
        </div>

        <!-- Modal Delete Data Penelitian DTPS -->
        <div class="modal fade" id="modalpenelitiandelete-{{ $penelitian->id }}" tabindex="-1" aria-labelledby="modaldosenpenelitiandelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenpenelitiandelete">Hapus Data Penelitian </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.penelitiandelete')
        </div>
        </div>
        </div>
@endforeach

</div>  
@include('layouts.table')


