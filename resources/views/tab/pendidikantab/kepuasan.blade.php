<div class="tab-pane fade show" id="kepuasan" role="tabpanel">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkepuasan">
            Tambah data
        </button>
    </p>
    <a href="/pendidikan/kepuasan-mahasiswa/download/excel" class="btn btn-success">Excel</a>
    <a href="/pendidikan/kepuasan-mahasiswa/download/csv" class="btn btn-success">CSV</a>
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
        <p>
            Tuliskan hasil pengukuran kepuasan mahasiswa terhadap proses pendidikan dengan
            mengikuti format Tabel berikut ini. Data diambil dari <b>hasil studi penelusuran yang
            dilakukan pada saat TS</b>. <br>
        </p>
    </div> 
    </div>

    <!-- Modal Tambah Data Kepuasan -->
    <div class="modal fade" id="modalkepuasan" tabindex="-1" aria-labelledby="modalkepuasan" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkepuasan">Tambah Data Kepuasan Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.pendidikanmodal.kepuasan')
        </div>
        </div>
        </div>

        {{-- TABLE AWAL --}}
        @include('tab.pendidikantab.kepuasantable')
        {{-- TABLE AKHIR --}}

        @foreach($kepuasanmahasiswa as $kepuasan)
      <!-- Modal Tambah Edit Kepuasan -->
      <div class="modal fade" id="modalkepuasanedit-{{ $kepuasan->id }}" tabindex="-1" aria-labelledby="modalkepuasanedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkepuasanedit">Edit Data Kepuasan Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.pendidikanmodal.kepuasanedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Kepuasan -->
      <div class="modal fade" id="modalkepuasandelete-{{ $kepuasan->id }}" tabindex="-1" aria-labelledby="modalkepuasandelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkepuasandelete">Delete Data Kepuasan Mahasiwa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.pendidikanmodal.kepuasandelete')
        </div>
        </div>
        </div>
        @endforeach
{{-- CONTENT --}}


</div>