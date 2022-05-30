<div class="tab-pane fade show active" id="capaian" role="tabpanel" aria-labelledby="capaian-tab">

  @include('layouts.alert')        
  @hasrole('perwakilan')
  @foreach ($capaianPembelajaran['capaian'] as $key => $capaian)
    @if ($capaian->alert == 'success')
    <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
      element tabel ke - {{ $loop->iteration }} {{ $capaian->comment }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @elseif ($capaian->alert == 'warning')
    <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
      {{ $capaian->comment }}
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
      <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
          Deskripsi
      </a>
  </p>
  @can ('download file')
  <a href="/luaran/capaian/download/excel" class="btn btn-success">Excel</a>
  <a href="/luaran/capaian/download/csv" class="btn btn-success">CSV</a>
  <input type="button" class="btn btn-primary" onclick="printDiv('print-table2')" value="Print Document" />
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
      Cara Download PDF
  </button>
  @endcan
  <div class="collapse" id="des1">
      <div class="card card-body">
          <p>
              Tuliskan data Indeks Prestasi Kumulatif (IPK) lulusan <b>dalam 3 tahun terakhir</b>  dengan
              mengikuti format Tabel berikut ini. Data dilengkapi dengan jumlah lulusan pada
              setiap tahun kelulusan.
          </p> <br>
      </div> 
  </div>


          {{-- TABLE --}}
          @include('tab.luarantab.capaiantable')  

      @foreach($capaianPembelajaran['capaian'] as $capaian)
    <!-- Modal Tambah Edit Capaian -->
    <div class="modal fade" id="modalcapaianedit-{{ $capaian->id }}" tabindex="-1" aria-labelledby="modalcapaianedit" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="modalcapaianedit">Edit Data </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @include('partials.luarancapaianmodal.capaianedit')
      </div>
      </div>
      </div>

    <!-- Modal Tambah Delete Capaian -->
    <div class="modal fade" id="modalcapaiandelete-{{ $capaian->id }}" tabindex="-1" aria-labelledby="modalcapaiandelete" aria-hidden="true">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="modalcapaiandelete">Hapus Data </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @include('partials.luarancapaianmodal.capaiandelete')
      </div>
      </div>
      </div>

      <div class="modal fade" id="modaltolakcap-{{ $capaian->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.luarancapaianmodal.tolak')
          </div>
          </div>
      </div> 
      
      <div class="modal fade" id="modalappcap-{{ $capaian->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.luarancapaianmodal.app')
          </div>
          </div>
      </div> 
      @endforeach

</div>
@include('layouts.table')