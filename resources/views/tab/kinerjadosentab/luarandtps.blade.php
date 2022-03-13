<div class="tab-pane fade" id="luaran" role="tabpanel" aria-labelledby="luaran-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des7" role="button" aria-expanded="false" aria-controls="des7">
            Deskripsi
        </a>
    </p>
    <a href="/kinerja-dosen/luaran/download/excel" class="btn btn-success">Excel</a>
    <a href="/kinerja-dosen/luaran/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table2')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
<div class="collapse" id="des7">
    <div class="card card-body">
        <p>
            Luaran Penelitian/PkM Lainnya oleh DTPS
        </p>
    </div> 
</div>
    <!-- Modal Tambah Data Luaran DTPS -->
    <div class="modal fade" id="modalluarantambah" tabindex="-1" aria-labelledby="modalluarantambah" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluarantambah">Tambah Data Luaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.luaran')
        </div>
        </div>
    </div>

{{-- TABLE HERE  --}}
@include('tab.kinerjadosentab.luarantable')

    <!-- Modal Edit Data Luaran DTPS -->
    <div class="modal fade" id="modaldosenluaranedit" tabindex="-1" aria-labelledby="modaldosenluaranedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenluaranedit">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.luaranedit')
        </div>
        </div>
    </div>

    <!-- Modal Delete Data Luaran DTPS -->
    <div class="modal fade" id="modaldosenluarandelete" tabindex="-1" aria-labelledby="modaldosenluarandelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenluarandelete">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.luarandelete')
        </div>
        </div>
    </div>
    
</div>
@include('layouts.table')