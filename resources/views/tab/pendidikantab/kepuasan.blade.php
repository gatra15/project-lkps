@include('layouts.table')
<div class="tab-pane fade show" id="kepuasan" role="tabpanel">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach ($kepuasanmahasiswa['kepuasan'] as $kepuasan)
      @if ($kepuasan->alert == 'success')
      <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} {{ $kepuasan->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif ($kepuasan->alert == 'warning')
      <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
        {{ $kepuasan->comment }}
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
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
        
    </p>
    
    @can ('download file')
    <a href="/pendidikan/kepuasan-mahasiswa/download/excel" class="btn btn-success">Excel</a>
    <a href="/pendidikan/kepuasan-mahasiswa/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table2')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    
    @endcan
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
        <p>
            Tuliskan hasil pengukuran kepuasan mahasiswa terhadap proses pendidikan dengan
            mengikuti format Tabel berikut ini. Data diambil dari <b>hasil studi penelusuran yang
            dilakukan pada saat TS</b>. <br>
        </p>
    </div> 
    </div>

        {{-- TABLE AWAL --}}
        @include('tab.pendidikantab.kepuasantable')
        {{-- TABLE AKHIR --}}

        @foreach($kepuasanmahasiswa['kepuasan'] as $kepuasan)
      <!-- Modal Tambah Edit Kepuasan -->
      <div class="modal fade" id="modalkepuasanedit-{{ $kepuasan->id }}" tabindex="-1" aria-labelledby="modalkepuasanedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkepuasanedit">Edit Data Kepuasan Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.pendidikanmodal.kepuasanedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Kepuasan -->
      <div class="modal fade" id="modalkepuasandelete-{{ $kepuasan->id }}" tabindex="-1" aria-labelledby="modalkepuasandelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkepuasandelete">Delete Data Kepuasan Mahasiwa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.pendidikanmodal.kepuasandelete')
        </div>
        </div>
        </div>

        <div class="modal fade" id="modaltolakkepuasan-{{ $kepuasan->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.pendidikanmodal.tolak3')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalappkepuasan-{{ $kepuasan->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.pendidikanmodal.app3')
            </div>
            </div>
        </div> 
        @endforeach
{{-- CONTENT --}}


</div>
