<div class="tab-pane fade show active" id="penelitiandtps" role="tabpanel" aria-labelledby="penelitiandtps-tab">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach ($penelitian as $penelitian)
      @if ($penelitian->alert == 'success')
      <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} {{ $penelitian->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif ($penelitian->alert == 'warning')
      <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
        {{ $penelitian->comment }}
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
        @hasrole ('perwakilan')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpenelitiandtps">
            Tambah data
        </button>
        @endhasrole
    </p>
    @can ('download file')
    <a href="/penelitian/download/excel" class="btn btn-success">Excel</a>
    <a href="/penelitian/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
    <div class="collapse" id="des1">
        <div class="card card-body">
            <p>
            Tuliskan data penelitian DTPS yang dalam pelaksanaannya melibatkan mahasiswa
            Program Studi pada TS-2 sampai dengan TS dengan mengikuti format Tabel 
            berikut ini. <br> <br>
            
            <b>Keterangan</b>  <br>
            1) Judul kegiatan yang melibatkan mahasiswa dalam penelitian dosen dapat berupa
            Tugas Akhir, Perancangan, Pengembangan Produk/Jasa, atau kegiatan lain yang
            relevan <br>
        </p>
        </div> 
    </div>

    <!-- Modal Tambah Data Penelitian -->
    <div class="modal fade" id="modalpenelitiandtps" tabindex="-1" aria-labelledby="modalpenelitiandtps" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalpenelitiandtps">Tambah Data Penelitian DTPS yang Melibatkan Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.penelitianmodal.penelitian')
        </div>
        </div>
        </div>
        {{-- Table --}}
        @include('tab.penelitiantab.penelitiantable')
        {{-- End Table --}}

        @foreach($penelitian as $penelitian)
      <!-- Modal Tambah Edit Penelitian -->
      <div class="modal fade" id="modalpenelitiandtpsedit-{{ $penelitian->id }}" tabindex="-1" aria-labelledby="modalpenelitiandtpsedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalpenelitiandtpsedit">Edit Data Penelitian DTPS yang Melibatkan Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.penelitianmodal.penelitianedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Penelitian -->
      <div class="modal fade" id="modalpenelitiandtpsdelete-{{ $penelitian->id }}" tabindex="-1" aria-labelledby="modalpenelitiandtpsdelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalpenelitiandtpsdelete">Hapus Data Penelitian DTPS yang Melibatkan Mahasiswa </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.penelitianmodal.penelitiandelete')
        </div>
        </div>
        </div>

        <div class="modal fade" id="modaltolakpenelitian-{{ $penelitian->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.penelitianmodal.tolak')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalapppenelitian-{{ $penelitian->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.penelitianmodal.app')
            </div>
            </div>
        </div> 
        @endforeach
    {{-- CONTENT --}}
        
    
</div>
@include('layouts.table')