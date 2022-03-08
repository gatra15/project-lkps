<div class="tab-pane fade show active" id="penelitiandtps" role="tabpanel" aria-labelledby="penelitiandtps-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#penelitiandtps">
            Tambah data
        </button>
    </p>
    <div class="collapse" id="des1">
        <div class="card card-body">
            <p>
            Tuliskan data penelitian DTPS yang dalam pelaksanaannya melibatkan mahasiswa
            Program Studi pada TS-2 sampai dengan TS dengan mengikuti format Tabel 
            berikut ini. <br> <br>
            
            <b>Keterangan</b>  <br>
            1) Judul kegiatan yang melibatkan mahasiswa dalam penelitian dosen dapat berupa
            Tugas Akhir, Perancangan, Pengembangan Produk/Jasa, atau kegiatan lain yang
            relevan <br>
        </p>
        </div> 
    </div>

    <!-- Modal Tambah Data Penelitian -->
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
      <!-- Modal Tambah Edit Penelitian -->
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

      <!-- Modal Tambah Delete Penelitian -->
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
    <div class="modal fade" id="penelitiandtps" tabindex="-1" aria-labelledby="penelitiandtps" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="penelitiandtps">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('tab.penelitiantab.penelitiantable')
        </div>
        </div>
    </div>
        
    
</div>