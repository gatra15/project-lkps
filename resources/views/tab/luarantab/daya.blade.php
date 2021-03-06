<div class="tab-pane fade show" id="daya-saing" role="tabpanel" aria-labelledby="dayaSaing-tab">

  @include('layouts.alert')        
  @hasrole('perwakilan')
  @foreach($dayasaing['waktu'] as $key => $data)
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
    @endforeach
    @endhasrole

  <p class="d-flex justify-content-between">
      <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
          Deskripsi
      </a>
  </p>
  @can ('download file')
  <a href="/luaran/daya-saing/download/excel" class="btn btn-success">Excel</a>
  <a href="/luaran/daya-saing/download/csv" class="btn btn-success">CSV</a>
  <input type="button" class="btn btn-primary" onclick="printDiv('print-table3')" value="Print Document" />
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
      Cara Download PDF
  </button>
  @endcan
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

      <div class="modal fade" id="modaltolakdaya-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.luarancapaianmodal.tolak4')
          </div>
          </div>
      </div> 
      
      <div class="modal fade" id="modalappdaya-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.luarancapaianmodal.app4')
          </div>
          </div>
      </div> 
      @endforeach
  

</div>
@include('layouts.table')