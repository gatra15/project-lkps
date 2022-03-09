<div class="tab-pane fade show" id="pkm" role="tabpanel" aria-labelledby="pkm-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpkm">
            Tambah data
        </button>
    </p>
    <a href="{{ url('tata-pamong/download-excel') }}" class="btn btn-success">Excel</a>
    <a href="{{ url('tata-pamong/download-csv') }}" class="btn btn-success">CSV</a>
    <div class="collapse" id="des3">
        <div class="card card-body">
            <p>
                Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS dengan mengikuti format Tabel 3.a.1) berikut ini
            </p>
        </div> 
    </div>

        <!-- Modal Tambah Data Pkm -->
        <div class="modal fade" id="modalpkm" tabindex="-1" aria-labelledby="modalpkm" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalpkm">Tambah Data PKM</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.tatapamongmodal.pkm')
        </div>
        </div>
        </div>


    {{-- TABLE HERE --}}
    @include('tab.tatapamongtab.pkmtable')

    @foreach ($kerjasama as $indikator)
    <!-- Modal Edit Data Pkm -->
    <div class="modal fade" id="modalpkmedit-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">edit data {{ $indikator->tridharma }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.tatapamongmodal.pkmedit')
        </div>
        </div>
    </div>


     <!-- Modal Delete Data Pkm -->
     <div class="modal fade" id="modalpkmdelete-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.tatapamongmodal.pkmdelete')
            
        </div>
        </div>
    </div>
    @endforeach

</div>