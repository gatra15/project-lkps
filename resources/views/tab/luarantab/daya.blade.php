<div class="tab-pane fade show" id="daya-saing" role="tabpanel" aria-labelledby="dayaSaing-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
            Deskripsi
        </a>
    </p>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table3')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    <div class="collapse" id="des4">
        <div class="card card-body">
            <p>
                Tuliskan data masa tunggu lulusan untuk mendapatkan pekerjaan pertama dalam <b> 3
                tahun, mulai TS-4 sampai dengan TS-2, </b> dengan mengikuti format Tabel berikut
                ini. Data diambil dari hasil studi penelusuran lulusan. <br> <br>
            </p>
        </div> 
    </div>

    @include('tab.luarantab.dayatable')

    @foreach ($dayasaing['waktu'] as $data)

      <!-- Modal Tambah Edit Daya -->
      <div class="modal fade" id="modaldayaedit-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldayaedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldayaedit">Edit Data Daya Saing</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.dayaedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Daya -->
      <div class="modal fade" id="modaldayadelete-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldayadelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldayadelete">Hapus Data Daya Saing </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.dayadelete')
        </div>
        </div>
        </div>
        @endforeach
    

</div>
@include('layouts.table')