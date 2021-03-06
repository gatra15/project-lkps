
<div class="tab-pane fade show" id="efektifitas" role="tabpanel" aria-labelledby="efektifitas-tab">

  @include('layouts.alert')        
  @hasrole('perwakilan')
  @foreach ($efektifitasPrestasi['data'] as $key => $ts)
    @if ($ts->alert == 'success')
    <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
      element tabel ke - {{ $loop->iteration }} {{ $ts->comment }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @elseif ($ts->alert == 'warning')
    <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
      {{ $ts->comment }}
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
      <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
          Deskripsi
      </a>
  </p>
  @can ('download file')
  <a href="/luaran/efektifitas/download/excel" class="btn btn-success">Excel</a>
  <a href="/luaran/efektifitas/download/csv" class="btn btn-success">CSV</a>
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

      <div class="modal fade" id="modaltolakefek-{{ $efektifitas->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.luarancapaianmodal.tolak3')
          </div>
          </div>
      </div> 
      
      <div class="modal fade" id="modalappefek-{{ $efektifitas->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.luarancapaianmodal.app3')
          </div>
          </div>
      </div> 
      @endforeach
      

</div>
@include('layouts.table')