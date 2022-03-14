<div class="tab-pane fade show" id="luaran" role="tabpanel" aria-labelledby="luaran-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des6" role="button" aria-expanded="false" aria-controls="des6">
            Deskripsi
        </a>
    </p>
    <div class="collapse" id="des6">
        <div class="card card-body">
            <p>
                Tuliskan jumlah publikasi ilmiah mahasiswa, yang dihasilkan secara mandiri atau
                bersama DTPS, <b>dalam 3 tahun terakhir</b>  dengan mengikuti format Tabel berikut
                ini. Judul publikasi harus relevan dengan bidang program studi.

            </p>
        </div> 
    </div>

    <!-- Modal Tambah Data Luaran DTPS -->
    <div class="modal fade" id="modalluarantambah" tabindex="-1" aria-labelledby="modalluarantambah" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluarantambah">Tambah Data Luaran Pkm Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.luaran')
        </div>
        </div>
    </div>

    <!-- Modal Tambah Data Luaran DTPS -->
    <div class="modal fade" id="modalluarantambah2" tabindex="-1" aria-labelledby="modalluarantambah" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluarantambah">Tambah Data Luaran Pkm Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.luaran2')
        </div>
        </div>
    </div>

    <!-- Modal Tambah Data Luaran DTPS -->
    <div class="modal fade" id="modalluarantambah3" tabindex="-1" aria-labelledby="modalluarantambah2" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluarantambah">Tambah Data Luaran Pkm Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.luaran3')
        </div>
        </div>
    </div>

    <!-- Modal Tambah Data Luaran DTPS -->
    <div class="modal fade" id="modalluarantambah4" tabindex="-1" aria-labelledby="modalluarantambah" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluarantambah">Tambah Data Luaran Pkm Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.luaran4')
        </div>
        </div>
    </div>

        @include('tab.luarantab.luarantable')

    @foreach ($luaran['data'] as $data)
      <!-- Modal Tambah Edit Luaran -->

      <div class="modal fade" id="modalluaranedit-{{ $data->id }}" tabindex="-1" aria-labelledby="modalluaranedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluaranedit">Edit Data Luaran Pkm Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.luaranedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Luaran -->

      <div class="modal fade" id="modalluarandelete-{{ $data->id }}" tabindex="-1" aria-labelledby="modalluarandelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluarandelete">Hapus Data Luaran Pkm Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.luarandelete')
        </div>
        </div>
        </div>

      

    @endforeach

    
</div>
<script>
    $('#myModal').modal('show');
</script>