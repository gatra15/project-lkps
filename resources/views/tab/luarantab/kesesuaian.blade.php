<div class="tab-pane fade show" id="kesesuaian" role="tabpanel" aria-labelledby="kesesuaian-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des6" role="button" aria-expanded="false" aria-controls="des6">
            Deskripsi
        </a>
    </p>
    <div class="collapse" id="des6">
        <div class="card card-body">
            <p>
                Tuliskan data kesesuaian bidang kerja lulusan saat mendapatkan pekerjaan pertama
                <b> dalam 3 tahun</b>, mulai TS-4 sampai dengan TS-2, dengan mengikuti format Tabel
                berikut ini. Data diambil dari hasil studi penelusuran lulusan.

            </p>
        </div> 
    </div>


        @include('tab.luarantab.kesesuaiantable')

        {{-- foreach --}}
      <!-- Modal Tambah Edit Luaran -->
      <div class="modal fade" id="modalkesesuaianedit-{{--  --}}" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenindustri">Edit Data Kesesuaian </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.kesesuaianedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Luaran -->
      <div class="modal fade" id="modalkesesuaiandelete-{{--  --}}" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenindustri">Delete Data Kesesuaian </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.kesesuaiandelete')
        </div>
        </div>
        </div>


</div>