<div class="tab-pane fade show" id="kepuasan" role="tabpanel" aria-labelledby="kepuasan-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des6" role="button" aria-expanded="false" aria-controls="des6">
            Deskripsi
        </a>
    </p>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table5')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    <div class="collapse" id="des6">
        <div class="card card-body">
            <p>
                Tuliskan jumlah publikasi ilmiah mahasiswa, yang dihasilkan secara mandiri atau
                bersama DTPS, <b>dalam 3 tahun terakhir</b>  dengan mengikuti format Tabel berikut
                ini. Judul publikasi harus relevan dengan bidang program studi.

            </p>
        </div> 
    </div>
    
        @include('tab.luarantab.kepuasantable')

        @foreach ($kepuasanPengguna['kepuasan'] as $data)
        {{-- bagian id tambahin tanda - dan {{ $data->id }} --}}
      <!-- Modal Tambah Edit Luaran -->
      <div class="modal fade" id="modalkepuasanedit-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenindustri">Edit Data Kepuasan </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.kepuasanedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Luaran -->
        {{-- bagian id tambahin tanda - dan {{ $data->id }} contoh modaldelet-{{ $data->id }} --}}
      <div class="modal fade" id="modalkepuasandelete-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenindustri">Delete Data Kepuasan </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.kepuasandelete')
        </div>
        </div>
        </div>
        @endforeach
    
</div>
@include('layouts.table')