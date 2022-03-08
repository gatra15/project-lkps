<div class="tab-pane fade" id="daya-saing" role="tabpanel" aria-labelledby="dayaSaing-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
    <div class="collapse" id="des4">
        <div class="card card-body">
            <p>
                Tuliskan data masa tunggu lulusan untuk mendapatkan pekerjaan pertama dalam <b> 3
                tahun, mulai TS-4 sampai dengan TS-2, </b> dengan mengikuti format Tabel berikut
                ini. Data diambil dari hasil studi penelusuran lulusan. <br> <br>
            </p>
        </div> 
    </div>

    <!-- Modal Tambah Data Daya -->
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
      <!-- Modal Tambah Edit Daya -->
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

      <!-- Modal Tambah Delete Daya -->
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
    
    @include('tab.luarantab.dayatable')
</div>