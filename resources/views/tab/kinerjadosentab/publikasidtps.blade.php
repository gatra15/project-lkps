<div class="tab-pane fade" id="publikasi" role="tabpanel" aria-labelledby="publikasi-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
            Deskripsi
        </a>
    </p>
    @can('download file')
        <a href="/kinerja-dosen/publikasi-ilmiah/download/excel" class="btn btn-success">Excel</a>
        <a href="/kinerja-dosen/publikasi-ilmiah/download/csv" class="btn btn-success">CSV</a>
        <input type="button" class="btn btn-primary" onclick="printDiv('print-table6')" value="Print Document" />
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
            Cara Download PDF
        </button>
    @endcan

<div class="collapse" id="des4">
    <div class="card card-body">
        <p>
            Publikasi Ilmiah DTPS
        </p>
    </div> 
</div>


{{-- TABLE HERE --}}
@include('tab.kinerjadosentab.publikasitable')
  
@foreach ($publikasi['ts_all'] as $ts)

        <!-- Modal Edit Data Publikasi DTPS -->
        <div class="modal fade" id="modalpublikasiedit-{{ $ts->id }}" tabindex="-1" aria-labelledby="modalpublikasiedit" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalpublikasiedit">Edit Data Publikasi Ilmiah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.publikasiedit')
            </div>
            </div>
        </div>

            <!-- Modal Delete Data Publikasi DTPS -->
        <div class="modal fade" id="modalpublikasidelete-{{ $ts->id }}" tabindex="-1" aria-labelledby="modalpublikasidelete" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalpublikasidelete">Hapus Data Publikasi Ilmiah</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.publikasidelete')
            </div>
            </div>
        </div>

        <div class="modal fade" id="modaltolakpublikasi-{{ $ts->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.tolak4')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalapppublikasi-{{ $ts->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.app4')
            </div>
            </div>
        </div> 
        @endforeach
</div>
@include('layouts.table')