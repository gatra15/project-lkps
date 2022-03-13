<div class="tab-pane fade show" id="efektifitas" role="tabpanel" aria-labelledby="efektifitas-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalefek">
            Tambah data
        </button>
    </p>
    <div class="collapse" id="des3">
        <div class="card card-body">
            <p>
                Tuliskan masa studi lulusan untuk dengan mengikuti format Tabel berikut ini. <br> <br>
                <b>Keterangan: </b> <br>
                1) Tidak termasuk mahasiswa transfer. <br>
                TS = Tahun akademik penuh terakhir. <br>
            </p>
        </div> 
    </div>

     <!-- Modal Tambah Data Efektivitas -->
     <div class="modal fade" id="modalefek" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalefek">Tambah Data Efektivitas </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.efektivitas')
        </div>
        </div>
        </div>

        {{-- foreach --}}
      <!-- Modal Tambah Edit Efektivitas -->
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

      <!-- Modal Tambah Delete Efektivitas -->
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
        {{-- PRESTASI AWAL --}}
        @include('tab.luarantab.efektivitastable')
        {{-- PRESTASI AKHIR --}}

</div>