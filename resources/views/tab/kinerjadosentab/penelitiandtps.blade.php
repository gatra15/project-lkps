  <div class="tab-pane fade" id="penelitian" role="tabpanel" aria-labelledby="penelitian-tab">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach ($penelitians['ts'] as $ts)
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
            <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
                Deskripsi
            </a>
            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenpenelitian">
                Tambah Data
            </button> --}}
        
        </p>
        @can('download file')
        <a href="/kinerja-dosen/karya-ilmiah/download/excel" class="btn btn-success">Excel</a>
        <a href="/kinerja-dosen/karya-ilmiah/download/csv" class="btn btn-success">CSV</a>
        <input type="button" class="btn btn-primary" onclick="printDiv('print-table3')" value="Print Document" />
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
            Cara Download PDF
        </button>
        @endcan
    <div class="collapse" id="des2">
        <div class="card card-body">
            <p>
            Tuliskan jumlah judul penelitian <sup> 1)</sup> yang dilaksanakan oleh DTPS berdasarkan sumber
            pembiayaan, yang relevan dengan bidang program studi pada TS-2 sampai dengan TS
            dengan mengikuti format Tabel berikut ini.
            <br> <br>
            <b> Keterangan </b> <br>
            1) Kegiatan penelitian tercatat di unit/lembaga yang mengelola kegiatan penelitian di
            tingkat Perguruan Tinggi/UPPS. <br>
            2) Penelitian dengan sumber pembiayaan dari DTPS <br>
            </p>
        </div> 
    </div>


{{-- TABLE HERE --}}
@include('tab.kinerjadosentab.penelitiantable')

@foreach ($penelitians['ts_all'] as $ts)
    <!-- Modal Edit Data Penelitian DTPS -->
    <div class="modal fade" id="modaldosenpenelitianedit-{{ $ts->id }}" tabindex="-1" aria-labelledby="modaldosenpenelitianedit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaldosenpenelitianedit">Edit Data Penelitian</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.penelitianedit')
        </div>
        </div>
        </div>

        <!-- Modal Delete Data Penelitian DTPS -->
        <div class="modal fade" id="modalpenelitiandelete-{{ $ts->id }}" tabindex="-1" aria-labelledby="modaldosenpenelitiandelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenpenelitiandelete">Hapus Data Penelitian </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.penelitiandelete')
        </div>
        </div>
        </div>

        <div class="modal fade" id="modaltolakpenelitian-{{ $ts->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.tolak2')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalapppenelitian-{{ $ts->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.app2')
            </div>
            </div>
        </div>
@endforeach

</div>  
@include('layouts.table')


