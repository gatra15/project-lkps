<div class="tab-pane fade show" id="publikasi" role="tabpanel" aria-labelledby="publikasi-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
            Deskripsi
        </a>
    </p>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table9')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    <div class="collapse" id="des2">
        <div class="card card-body">
            <p>
                Tuliskan jumlah publikasi ilmiah mahasiswa, yang dihasilkan secara mandiri atau
                bersama DTPS, dalam 3 tahun terakhir dengan mengikuti format Tabel berikut
                ini. Judul publikasi harus relevan dengan bidang program studi <br>
            </p>
        </div> 
    </div>

        {{-- Table Luaran Prestasi --}}
        @include('tab.luarantab.publikasitable')
        {{-- End Luaran Prestasi --}}

        @foreach($publikasi['data'] as $data)
      <!-- Modal Tambah Edit Prestasi -->
      {{-- Tabahin id -{{ $data->id }} contoh modaledit-{{ $data->id }} --}}
      <div class="modal fade" id="modalpublikasiedit-{{ $data->id }}" tabindex="-1" aria-labelledby="modalluaranprestasiedit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalpublikasiedit">Update Data Prestasi Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.publikasiedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Prestasi -->
      {{-- Tabahin id -{{ $data->id }} contoh modaldelete-{{ $data->id }} --}}
      <div class="modal fade" id="modalpublikasidelete-{{ $data->id }}" tabindex="-1" aria-labelledby="modalpublikasidelete" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalpublikasidelete">Hapus Data Prestasi Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.publikasidelete')
        </div>
        </div>
        </div>
        @endforeach
</div>
@include('layouts.table')