<div class="tab-pane fade show active" id="capaian" role="tabpanel" aria-labelledby="capaian-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
            Deskripsi
        </a>
    </p>
    <div class="collapse" id="des1">
        <div class="card card-body">
            <p>
                Tuliskan data Indeks Prestasi Kumulatif (IPK) lulusan <b>dalam 3 tahun terakhir</b>  dengan
                mengikuti format Tabel berikut ini. Data dilengkapi dengan jumlah lulusan pada
                setiap tahun kelulusan.
            </p> <br>
        </div> 
    </div>

    <!-- Modal Tambah Data Capaian -->
    <div class="modal fade" id="modalcapaian" tabindex="-1" aria-labelledby="modalcapaian" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalcapaian">Tambah Data </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.capaian')
        </div>
        </div>
        </div>
            {{-- TABLE --}}
            @include('tab.luarantab.capaiantable')  

        @foreach($capaianPembelajaran['capaian'] as $capaian)
      <!-- Modal Tambah Edit Capaian -->
      <div class="modal fade" id="modalcapaianedit-{{ $capaian->id }}" tabindex="-1" aria-labelledby="modalcapaianedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalcapaianedit">Edit Data </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.capaianedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Capaian -->
      <div class="modal fade" id="modalcapaiandelete-{{ $capaian->id }}" tabindex="-1" aria-labelledby="modalcapaiandelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalcapaiandelete">Hapus Data </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.capaiandelete')
        </div>
        </div>
        </div>
        @endforeach

</div>