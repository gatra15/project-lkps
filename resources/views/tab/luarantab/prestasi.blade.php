<div class="tab-pane fade show" id="prestasi" role="tabpanel" aria-labelledby="prestasi-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalluaranprestasi">
            Tambah data
        </button>
    </p>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table8')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    <div class="collapse" id="des2">
        <div class="card card-body">
            <p>
                Tuliskan prestasi akademik/non-akademik yang dicapai mahasiswa Program Studi <b> dalam 5 tahun terakhir </b> dengan mengikuti format Tabel berikut ini. Data dilengkapi dengan keterangan kegiatan yang diikuti (nama kegiatan, tahun, tingkat, dan prestasi yang dicapai). <br>
            </p>
        </div> 
    </div>

     <!-- Modal Tambah Data Prestasi -->
     <div class="modal fade" id="modalluaranprestasi" tabindex="-1" aria-labelledby="modalluaranprestasi" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluaranprestasi">Tambah Data Prestasi Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.prestasi')
        </div>
        </div>
        </div>

        {{-- Table Luaran Prestasi --}}
        @include('tab.luarantab.prestasitable')
        {{-- End Luaran Prestasi --}}

        @foreach($prestasi['prestasi'] as $prest)
      <!-- Modal Tambah Edit Prestasi -->
      <div class="modal fade" id="modalluaranprestasiedit-{{ $prest->id }}" tabindex="-1" aria-labelledby="modalluaranprestasiedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluaranprestasiedit">Update Data Prestasi Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.prestasiedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Prestasi -->
      <div class="modal fade" id="modalluaranprestasidelete-{{ $prest->id }}" tabindex="-1" aria-labelledby="modalluaranprestasidelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluaranprestasidelete">Hapus Data Prestasi Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.prestasidelete')
        </div>
        </div>
        </div>
        @endforeach
</div>