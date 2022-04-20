<div class="tab-pane fade show" id="kesesuaian" role="tabpanel" aria-labelledby="kesesuaian-tab">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach($kesesuaianBidang['bidang'] as $key => $kesesuaian)
      @if ($kesesuaian->alert == 'success')
      <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} {{ $kesesuaian->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif ($kesesuaian->alert == 'warning')
      <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
        {{ $kesesuaian->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @else
      <div class="alert alert-secondary alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} belum ada respon dari dekan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif

    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des6" role="button" aria-expanded="false" aria-controls="des6">
            Deskripsi
        </a>
    </p>
    @can ('download file')
    <a href="/luaran/kesesuaian-bidang/download/excel" class="btn btn-success">Excel</a>
    <a href="/luaran/kesesuaian-bidang/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table6')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
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

        @foreach($kesesuaianBidang['bidang'] as $kesesuaian)
      <!-- Modal Tambah Edit Luaran -->
      <div class="modal fade" id="modalkesesuaianedit-{{ $kesesuaian->id }}" tabindex="-1" aria-labelledby="modalkesesuaianedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkesesuaianedit">Edit Data Kesesuaian </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.kesesuaianedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Luaran -->
      <div class="modal fade" id="modalkesesuaiandelete-{{ $kesesuaian->id }}" tabindex="-1" aria-labelledby="modalkesesuaiandelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkesesuaiandelete">Hapus Data Kesesuaian </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.kesesuaiandelete')
        </div>
        </div>
        </div>

        <div class="modal fade" id="modaltolaksesuai-{{ $kesesuaian->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.luarancapaianmodal.tolak6')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalappsesuai-{{ $kesesuaian->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.luarancapaianmodal.app6')
            </div>
            </div>
        </div> 
        @endforeach


</div>
@include('layouts.table')