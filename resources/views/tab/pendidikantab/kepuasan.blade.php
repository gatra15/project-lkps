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
            Tuliskan hasil pengukuran kepuasan mahasiswa terhadap proses pendidikan dengan
            mengikuti format Tabel berikut ini. Data diambil dari <b>hasil studi penelusuran yang
            dilakukan pada saat TS</b>. <br>
        </p>
    </div> 
    </div>

    <!-- Modal Tambah Data Kepuasan -->
    <div class="modal fade" id="modaldosenindustri" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenindustri">Tambah Data Dosen Industri </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            {{-- @include('partials.profildosenmodal.dosenindustri') --}}
        </div>
        </div>
        </div>

        {{-- foreach --}}
      <!-- Modal Tambah Edit Kepuasan -->
      <div class="modal fade" id="modaldosenindustri" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenindustri">Tambah Data Dosen Industri </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            {{-- @include('partials.profildosenmodal.dosenindustri') --}}
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Kepuasan -->
      <div class="modal fade" id="modaldosenindustri" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenindustri">Tambah Data Dosen Industri </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            {{-- @include('partials.profildosenmodal.dosenindustri') --}}
        </div>
        </div>
        </div>
        {{-- endforeach --}}
{{-- CONTENT --}}

{{-- TABLE AWAL --}}
@include('tab.pendidikantab.kepuasantable')
{{-- TABLE AKHIR --}}
</div>