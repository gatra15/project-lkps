<div class="tab-pane fade" id="ewmp" role="tabpanel" aria-labelledby="ewmp-tab">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach ($dosenewmp['dosen'] as $ewmp)
      @if ($ewmp->alert == 'success')
      <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} {{ $ewmp->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif ($ewmp->alert == 'warning')
      <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
        {{ $ewmp->comment }}
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
        @hasrole('perwakilan')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenewmp">
            Tambah data
        </button>
        @endhasrole
    </p>
    @can('download file')
    <a href="/profil-dosen/dosen-ewmp/download/excel" class="btn btn-success">Excel</a>
    <a href="/profil-dosen/dosen-ewmp/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table4')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
<div class="collapse" id="des3">
    <div class="card card-body">
        <p>
        Tuliskan data Ekuivalen Waktu Mengajar Penuh (EWMP) dari Dosen Tetap Perguruan Tinggi yang ditugaskan di program studi yang
        diakreditasi (DT) pada saat TS dengan mengikuti format Tabel berikut ini. <br> <br>

        <b>Keterangan</b> <br>
        1) Diisi dengan tanda centang V untuk Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah dengan
        bidang keahlian yang sesuai dengan kompetensi inti Program Studi yang diakreditasi. <br>
        </p>
    </div> 
</div>
  
      <!-- Modal Tambah Data Dosen Tetap -->
      <div class="modal fade" id="modaldosenewmp" tabindex="-1" aria-labelledby="modaldosenewmp" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="modaldosenewmp">Tambah Data </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.profildosenmodal.dosenewmp')
          </div>
          </div>
          </div>
    
  
    {{-- TABLE HERE --}}
    @include('tab.profildosentab.ewmptable')
        
        @foreach ($dosenewmp['dosen'] as $ewmp)
    <!-- Modal Edit Data EWMP -->
        <div class="modal fade" id="modaldosenewmpedit-{{ $ewmp->id }}" tabindex="-1" aria-labelledby="modaldosenewmpeditt" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenewmpedit">Edit Data {{ $ewmp->nama }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.profildosenmodal.dosenewmpedit')
        </div>
        </div>
        </div>

        <!-- Modal Delete Data Dosen EWMP -->
        <div class="modal fade" id="modaldosenewmpdelete-{{ $ewmp->id }}" tabindex="-1" aria-labelledby="modaldosenewmpdelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenewmpdelete">Hapus Data {{ $ewmp->nama }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.profildosenmodal.dosenewmpdelete')
        </div>
        </div>
        </div>

        <div class="modal fade" id="modaltolakewmp-{{ $ewmp->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.profildosenmodal.tolak3')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalappewmp-{{ $ewmp->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.profildosenmodal.app3')
            </div>
            </div>
        </div> 
        @endforeach

</div>
@include('layouts.table')
