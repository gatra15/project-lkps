<div class="tab-pane fade show" id="kepuasan" role="tabpanel">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
        <p>
            Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi (DTPS) pada saat TS dengan mengikuti format Tabel 3.a.1) berikut ini
        </p>
    </div> 
    </div>

{{-- CONTENT --}}

{{-- TABLE AWAL --}}
@include('tab.pendidikantab.kepuasantable')
{{-- TABLE AKHIR --}}
</div>