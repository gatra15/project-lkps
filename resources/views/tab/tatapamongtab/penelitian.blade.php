<div class="tab-pane fade show" id="penelitian" role="tabpanel" aria-labelledby="penelitian-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpenelitian">
            Tambah data 
        </button>
    </p>
    <a href="{{ url('/download-excel') }}" class="btn btn-success">Excel</a>
    <a href="{{ url('/download-csv') }}" class="btn btn-success">CSV</a>
    <div class="collapse" id="des2">
        <div class="card card-body">
            <p>
                Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS dengan mengikuti format Tabel 3.a.1) berikut ini
            </p>
        </div> 
    </div>
<!-- Modal Tambah Data Penelitian-->
<div class="modal fade" id="modalpenelitian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Penelitian</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.tatapamongmodal.penelitian')
    </div>
    </div>
</div>

    
    {{-- TABLE HERE --}}
    @include('tab.tatapamongtab.penelitiantable')

    @foreach ($kerjasama as $indikator)

    <!-- Modal Edit Data Penelitian -->
    <div class="modal fade" id="modalpenelitianedit-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">edit data {{ $indikator->tridharma }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.tatapamongmodal.penelitianedit')
        </div>
        </div>
    </div>


     <!-- Modal Delete Data Penelitian -->
     <div class="modal fade" id="modalpenelitiandelete-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Yakin?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.tatapamongmodal.penelitiandelete')
            
        </div>
        </div>
    </div>
    @endforeach

</div>