<div class="tab-pane fade show active" id="dosen-tetap" role="tabpanel" aria-labelledby="dosTetap-tab">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach ($dosen['dosen'] as $sdm)
      @if ($sdm->alert == 'success')
      <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} {{ $sdm->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif ($sdm->alert == 'warning')
      <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
        {{ $sdm->comment }}
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
        @hasrole('perwakilan')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosentetap">
            Tambah data
        </button>
        @endrole
    </p> 
    
    @can ('download file')
    <a href="{{ url('profil-dosen/download/excel') }}" class="btn btn-success">Excel</a>
    <a href="{{ url('profil-dosen/download/csv') }}" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
    
<div class="collapse" id="des1">
    <div class="card card-body">
        <p>
        Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi
        (DTPS) pada saat TS dengan mengikuti format Tabel berikut ini. <br> <br>
        <b>Keterangan</b> <br>
        NDT = Jumlah Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang diakreditasi.<br>
        NDTPS = Jumlah Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang<br>
        sesuai dengan kompetensi inti program studi yang diakreditasi. <br>
        1) Diisi dengan nama program studi pada pendidikan pasca sarjana (Magister/Magister Terapan dan/atau Doktor/Doktor Terapan)
        yang pernah diikuti.<br>
        2) Diisi dengan bidang keahlian sesuai pendidikan pasca sarjana yang relevan dengan mata kuliah yang diampu.<br>
        3) Diisi dengan tanda centang V jika bidang keahlian sesuai dengan kompetensi inti program studi yang diakreditasi.<br>
        4) Diisi dengan nomor Sertifikat Pendidik Profesional.<br>
        5) Diisi dengan bidang sertifikasi dan lembaga penerbit sertifikat. Data ini diisi oleh pengusul dari program studi pada program
        Diploma Tiga dan program Sarjana Terapan.<br>
        6) Diisi dengan nama mata kuliah yang diampu pada program studi yang diakreditasi pada saat TS-2 s.d. TS.<br>
        7) Diisi dengan tanda centang V jika bidang keahlian sesuai dengan mata kuliah yang diampu.<br>
        8) Diisi dengan nama mata kuliah yang diampu pada program studi lain pada saat TS-2 s.d. TS.<br>
        </p>
    </div> 
  </div>

      
    
    <!-- Modal Tambah Data Dosen Tetap -->
    <div class="modal fade" id="modaldosentetap" tabindex="-1" aria-labelledby="modaldosentetap" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosentetap">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.profildosenmodal.dosentetap')
        </div>
        </div>
        </div>
  

  {{-- TABLE HERE --}}
  @include('tab.profildosentab.dosentetaptable')

  @foreach ($dosen['dosen'] as $sdm)    
  <!-- Modal Edit Data Dosen Tetap -->
  <div class="modal fade" id="modaldosentetapedit-{{ $sdm->id }}" tabindex="-1" aria-labelledby="modaldosentetapedit" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modaldosentetapedit">Edit Data {{ $sdm->nama_dosen }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.profildosenmodal.dosentetapedit')
    </div>
    </div>
    </div>

    <!-- Modal Delete Data Dosen Tetap -->
    <div class="modal fade" id="modaldosentetapdelete-{{ $sdm->id }}" tabindex="-1" aria-labelledby="modaldosentetapdelete" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modaldosentetapdelete">Hapus Data {{ $sdm->nama_dosen }} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.profildosenmodal.dosentetapdelete')
    </div>
    </div>
    </div>

    <div class="modal fade" id="modaltolakttp-{{ $sdm->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.profildosenmodal.tolak')
        </div>
        </div>
    </div> 
    
    <div class="modal fade" id="modalappttp-{{ $sdm->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.profildosenmodal.app')
        </div>
        </div>
    </div> 
    @endforeach

</div>
@include('layouts.table')
