<div class="tab-pane active" id="pkm" role="tabpanel">
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
                    <p>Tuliskan data pengabdian kepada masyarakat (PkM) DTPS yang dalam pelaksanaannya melibatkan mahasiswa Program Studi pada <b> TS-2 sampai dengan TS </b> dengan mengikuti format berikut ini. <br> <br>
                    <b> Keterangan </b> <br>
                    1) Kegiatan PkM dosen yang dalam pelaksanaannya melibatkan mahasiswa, tidak
                    termasuk kegiatan KKN atau kegiatan lainnya yang merupakan bagian dari kegiatan
                    kurikuler. <br>
                    </p>
    
                </div> 
                </div>

                <!-- Modal Tambah Data PKM -->
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
          <!-- Modal Tambah Edit PKM -->
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

          <!-- Modal Tambah Delete PKM -->
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
{{-- TABLE --}}
@include('tab.pkmtab.pkmtable')
    

</div>