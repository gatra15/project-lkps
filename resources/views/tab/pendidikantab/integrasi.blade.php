@include('layouts.table')
<div class="tab-pane fade show" id="integrasi" role="tabpanel">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach ($integrasis['integrasi'] as $integrasi)

      @if ($integrasi->alert == 'success')
      <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} {{ $integrasi->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif ($integrasi->alert == 'warning')
      <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
        {{ $integrasi->comment }}
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
        @hasrole('perwakilan')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalintegrasi">
            Tambah data
        </button>
        @endhasrole
    </p>
    @can ('download file')
    <a href="/pendidikan/integrasi/download/excel" class="btn btn-success">Excel</a>
    <a href="/pendidikan/integrasi/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    
    @endcan
    <div class="collapse" id="collapseExample">
    <div class="card card-body">
        <p>
            Tuliskan judul penelitian/PkM DTPS yang terintegrasi ke dalam pembelajaran/
            pengembangan matakuliah dalam 3 tahun terakhir dengan mengikuti format Tabel
            berikut ini. <br> <br>
            <b>Keterangan</b> <br>
            1) Judul penelitian dan PkM tercatat di unit/lembaga yang mengelola kegiatan
            penelitian/PkM di tingkat Perguruan Tinggi/UPPS. <br>
            2) Bentuk integrasi dapat berupa tambahan materi perkuliahan, studi kasus, Bab/
            Subbab dalam buku ajar, atau bentuk lain yang relevan. <br>
        </p>
    </div> 
    </div>

          <!-- Modal Tambah Data Integritas -->
          <div class="modal fade" id="modalintegrasi" tabindex="-1" aria-labelledby="modalintegrasi" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalintegrasi">Tambah Data Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.pendidikanmodal.integrasi')
            </div>
            </div>
            </div>
            {{-- TABLE AWAL --}}
            @include('tab.pendidikantab.integrasitable')
            {{-- TABLE AKHIR --}}

            @foreach($integrasis['integrasi'] as $integrasi)
          <!-- Modal Tambah Edit Integritas -->
          <div class="modal fade" id="modalintegrasiedit-{{ $integrasi->id }}" tabindex="-1" aria-labelledby="modalintegrasiedit" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalintegrasiedit">Edit Data Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.pendidikanmodal.integrasiedit')
            </div>
            </div>
            </div>

          <!-- Modal Tambah Delete Integritas -->
          <div class="modal fade" id="modalintegrasidelete-{{ $integrasi->id }}" tabindex="-1" aria-labelledby="modalintegrasidelete" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalintegrasidelete">Delete Data Integrasi Kegiatan Penelitian/PkM dalam Pembelajaran </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.pendidikanmodal.integrasidelete')
            </div>
            </div>
            </div>

            <div class="modal fade" id="modaltolakintegrasi-{{ $integrasi->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @include('partials.pendidikanmodal.tolak2')
                </div>
                </div>
            </div> 
            
            <div class="modal fade" id="modalappintegrasi-{{ $integrasi->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @include('partials.pendidikanmodal.app2')
                </div>
                </div>
            </div> 
            @endforeach
{{-- CONTENT --}}


</div>
