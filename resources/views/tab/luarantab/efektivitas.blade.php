<div class="tab-pane fade show" id="efektifitas" role="tabpanel" aria-labelledby="efektifitas-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
            Deskripsi
        </a>
    </p>
    @can ('download file')
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table4')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
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


        {{-- PRESTASI AWAL --}}
        @include('tab.luarantab.efektivitastable')
        {{-- PRESTASI AKHIR --}}

        @foreach($efektifitasPrestasi['data'] as $efektifitas)
      <!-- Modal Tambah Edit Efektivitas -->
      <div class="modal fade" id="modalefekedit-{{ $efektifitas->id }}" tabindex="-1" aria-labelledby="modalefekedit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalefekedit">Edit Data Efektifitas dan Produktifitas Pendidikan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.efektivitasedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Efektivitas -->
      <div class="modal fade" id="modalefekdelete-{{ $efektifitas->id }}" tabindex="-1" aria-labelledby="modalefekdelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalefekdelete">Hapus Data Efektifitas dan Produktifitas Pendidikan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.efektivitasdelete')
        </div>
        </div>
        </div>
        @endforeach
        

</div>
@include('layouts.table')