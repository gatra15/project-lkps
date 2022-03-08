
<div class="tab-pane fade show active" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikan">
            Tambah data
        </button>
    </p>
    <a href="{{ url('/download-excel') }}" class="btn btn-success">Excel</a>
    <a href="{{ url('/download-csv') }}" class="btn btn-success">CSV</a>
    <a class="btn btn-primary" href="{{'/download-pdf'}}">Download PDF</a>
    <div class="collapse" id="des1">
        <div class="card card-body">
            <p>
                Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS dengan mengikuti format Tabel 3.a.1) berikut ini
            </p>
        </div> 
    </div>
    
<!-- Modal Tambah Data Pendidikan -->
<div class="modal fade" id="modalpendidikan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Tambah Data Pendidikan</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@include('partials.tatapamongmodal.pendidikan')
</div>
</div>
</div>

@foreach ($kerjasama as $indikator)

<!-- Modal Edit Data Pendidikan -->
<div class="modal fade" id="modalpendidikanedit-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pendidikan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.tatapamongmodal.pendidikanedit')
    </div>
    </div>
</div>


 <!-- Modal Delete Data Pendidikan -->
 <div class="modal fade" id="modalpendidikandelete-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.tatapamongmodal.pendidikandelete')
        
    </div>
    </div>
</div>
@endforeach


    {{-- CONTENT --}}
    @include('tab.tatapamongtab.pendidikantable')
    {{-- End Content --}}
    
</div>