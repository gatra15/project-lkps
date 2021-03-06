@include('layouts.table')
<div class="tab-pane fade" id="dosen-ttetap" role="tabpanel" aria-labelledby="dosTTetap-tab">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach ($dosentidaktetap['dosen'] as $sdm)
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
        <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
            Deskripsi
        </a>
        @hasrole('perwakilan')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosentidaktetap">
            Tambah data
        </button>
        @endhasrole
    </p>
    @can('download file')
    <a href="/profil-dosen/dosen-tidak-tetap/download/excel" class="btn btn-success">Excel</a>
    <a href="/profil-dosen/dosen-tidak-tetap/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table3')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
    <div class="collapse" id="des4">
        <div class="card card-body">
            <p>
            Tuliskan data Dosen Tidak Tetap yang ditugaskan sebagai pengampu mata kuliah di program studi yang Diakreditasi (DTT) pada
            saat TS dengan mengikuti format berikut ini. <br><br>
            <b>Keterangan:</b> <br>

            NDTT = Jumlah Dosen Tidak Tetap yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang diakreditasi.<br>
            1) NIDN (Nomor Induk Dosen Nasional), NIDK (Nomor Induk Dosen Khusus), diisi jika ada.<br>
            2) Diisi dengan jenis program (magister/magister terapan/doktor/doktor terapan) dan nama program studi pada pendidikan pasca<br>
            sarjana yang pernah diikuti.<br>
            3) Diisi dengan bidang keahlian sesuai pendidikan pasca sarjana yang relevan dengan mata kuliah yang diampu.<br>
            4) Diisi dengan nomor sertifikat pendidik profesional.<br>
            5) Diisi dengan bidang sertifikasi dan lembaga penerbit sertifikat. Data ini diisi oleh pengusul dari Program Studi pada program
            Diploma Tiga dan program Sarjana Terapan.<br>
            6) Diisi dengan nama mata kuliah yang diampu pada Program Studi yang diakreditasi pada saat TS-2 s.d. TS.<br>
            7) Diisi dengan tanda centang V jika bidang keahlian sesuai dengan mata kuliah yang diampu.<br>
        </div> 
    </div>
      
      <!-- Modal Tambah Data Dosen TA -->
      <div class="modal fade" id="modaldosentidaktetap" tabindex="-1" aria-labelledby="modaldosentidaktetap" aria-hidden="true">
          <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="modaldosentidaktetap">Tambah Data Dosen Tidak Tetap </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.profildosenmodal.dosentidaktetap')
          </div>
          </div>
        </div>
    
  
    {{-- TABLE HERE --}}
    @include('tab.profildosentab.dosentidaktetaptable')
        
        @foreach ($dosentidaktetap['dosen'] as $sdm)

        <!-- Modal Edit Data TA -->
        <div class="modal fade" id="modaldosentidaktetapedit-{{ $sdm->id }}" tabindex="-1" aria-labelledby="modaldosentidaktetapedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosentidaktetapedit">Edit Data {{ $sdm->nama}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.profildosenmodal.dosentidaktetapedit')
        </div>
        </div>
        </div>

        <!-- Modal Delete Data Dosen TA -->
        <div class="modal fade" id="modaldosentidaktetapdelete-{{ $sdm->id }}" tabindex="-1" aria-labelledby="modaldosentidaktetapdelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosentidaktetapdelete">Hapus Data {{ $sdm->nama}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.profildosenmodal.dosentidaktetapdelete')
        </div>
        </div>
        </div>

        <div class="modal fade" id="modaltolaktt-{{ $sdm->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.profildosenmodal.tolak4')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalapptt-{{ $sdm->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.profildosenmodal.app4')
            </div>
            </div>
        </div> 
        @endforeach

</div>
