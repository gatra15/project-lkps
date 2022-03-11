<div class="tab-pane fade" id="publikasi" role="tabpanel" aria-labelledby="publikasi-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
            Deskripsi
        </a>
        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button> --}}
    </p>
<a href="/kinerja-dosen/publikasi-ilmiah/download/excel" class="btn btn-success">Excel</a>
<a href="/kinerja-dosen/publikasi-ilmiah/download/csv" class="btn btn-success">CSV</a>
<div class="collapse" id="des4">
    <div class="card card-body">
        <p>
            Publikasi Ilmiah DTPS
        </p>
    </div> 
</div>

    <!-- Modal Tambah Data Publikasi DTPS -->
    <div class="modal fade" id="modalpublikasi" tabindex="-1" aria-labelledby="modalpublikasi" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalpublikasi">Tambah Data Dosen Tetap</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.kinerjadosenmodal.publikasi')
    </div>
    </div>
    </div>

{{-- TABLE HERE --}}
@include('tab.kinerjadosentab.publikasitable')
  
@foreach ($publikasi['publikasi'] as $publikasis)
    

        <!-- Modal Edit Data Publikasi DTPS -->
        <div class="modal fade" id="modalpublikasiedit-{{ $publikasis->id }}" tabindex="-1" aria-labelledby="modalpublikasiedit" aria-hidden="true">
            <div class="modal-dialog modal-lg">
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
        <div class="modal fade" id="modalpublikasidelete-{{ $publikasis->id }}" tabindex="-1" aria-labelledby="modalpublikasidelete" aria-hidden="true">
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
        @endforeach
</div>