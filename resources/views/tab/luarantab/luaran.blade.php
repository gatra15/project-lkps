<div class="tab-pane fade" id="luaran" role="tabpanel" aria-labelledby="luaran-tab">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach($luaran['data'] as $data)
      @if ($data->alert == 'success')
      <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} {{ $data->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif ($data->alert == 'warning')
      <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
        {{ $data->comment }}
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
        <a class="btn btn-primary" data-toggle="collapse" href="#des7" role="button" aria-expanded="false" aria-controls="des7">
            Deskripsi
        </a>
    </p>
    @can ('download file')
    <a href="/luaran/luaran-mahasiswa/download/excel" class="btn btn-success">Excel</a>
    <a href="/luaran/luaran-mahasiswa/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
<div class="collapse" id="des7">
    <div class="card card-body">
        <p>
            Tuliskan luaran penelitian dan luaran PkM yang dihasilkan mahasiswa, baik secara
            mandiri atau bersama DTPS, <b>dalam 3 tahun terakhir</b> dengan mengikuti format Tabel
            berikut ini. Jenis dan judul luaran harus relevan dengan bidang program studi. <br>
        </p>
    </div> 
</div>
    <!-- Modal Tambah Data Luaran DTPS -->
    <div class="modal fade" id="modalluarantambah" tabindex="-1" aria-labelledby="modalluarantambah" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalluarantambah">Tambah Data Luaran</h5>
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
            <h5 class="modal-title" id="modalluarantambah">Tambah Data Luaran</h5>
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
            <h5 class="modal-title" id="modalluarantambah">Tambah Data Luaran</h5>
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
            <h5 class="modal-title" id="modalluarantambah">Tambah Data Luaran</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.luaran4')
        </div>
        </div>
    </div>

{{-- TABLE HERE  --}}
@include('tab.luarantab.luarantable')

@foreach ($luaran['data'] as $data)

    <!-- Modal Edit Data Luaran DTPS -->
    <div class="modal fade" id="modaldosenluaranedit-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldosenluaranedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenluaranedit">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.luaranedit')
        </div>
        </div>
    </div>

    <!-- Modal Delete Data Luaran DTPS -->
    <div class="modal fade" id="modaldosenluarandelete-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldosenluarandelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenluarandelete">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.luarandelete')
        </div>
        </div>
    </div>
        
    <div class="modal fade" id="modaltolakluar-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.tolak9')
        </div>
        </div>
    </div> 
    
    <div class="modal fade" id="modalappluar-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.app9')
        </div>
        </div>
    </div> 
@endforeach
</div>
@include('layouts.table')