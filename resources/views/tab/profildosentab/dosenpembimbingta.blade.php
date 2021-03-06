@include('layouts.table')
<div class="tab-pane fade" id="dosbing-ta" role="tabpanel" aria-labelledby="dosbingTA-tab">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach ($dosenta['dosen'] as $key => $sdm)
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
        <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
            Deskripsi
        </a>
        @hasrole('perwakilan')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenta">
            Tambah data
        </button>
        @endhasrole
    </p>
    @can ('download file')
    <a href="/profil-dosen/dosen-pembimbing-ta/download/excel" class="btn btn-success">Excel</a>
    <a href="/profil-dosen/dosen-pembimbing-ta/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table2')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
<div class="collapse" id="des2">
    <div class="card card-body">
        <p>
        Tuliskan DTPS yang menjadi pembimbing utama pada kegiatan tugas akhir mahasiswa (Laporan Akhir/Skripsi//Tesis/Disertasi) <sup>1)</sup>  dalam 3 tahun terakhir dengan mengikuti format berikut ini :<br><br>
        <b>Keterangan</b> <br>
        1) Penugasan sebagai pembimbing tugas akhir mahasiswa dibuktikan dengan surat penugasan yang diterbitkan oleh UPPS.<br>
        2) Diisi dengan nama dosen yang ditugaskan menjadi pembimbing utama.<br>
        3) Diisi dengan data jumlah mahasiswa yang dibimbing pada Program Studi yang Diakreditasi.<br>
        4) Diisi dengan data jumlah mahasiswa yang dibimbing pada Program Studi lain di Perguruan Tinggi.<br>
        5) Rata-rata jumlah bimbingan di semua program/ semester (kolom 11) = ((kolom 6) + (kolom 10)) / 2.<br>
        </p>
    </div> 
</div>
  
        
      
      <!-- Modal Tambah Data Dosen TA -->
      <div class="modal fade" id="modaldosenta" tabindex="-1" aria-labelledby="modaldosenta" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="modaldosenta">Tambah Data </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.profildosenmodal.dosenta')
          </div>
          </div>
          </div>
    
  
    {{-- TABLE HERE --}}
    @include('tab.profildosentab.dosenpembimbingtatable')
        
        @foreach ($dosenta['dosen'] as $sdm)
    <!-- Modal Edit Data TA -->
        <div class="modal fade" id="modaldosentaedit-{{ $sdm['id'] }}" tabindex="-1" aria-labelledby="modaldosentaedit" aria-hidden="true">
            <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modaldosentaedit">Edit Data {{ $sdm['nama'] }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.profildosenmodal.dosentaedit')
        </div>
        </div>
        </div>

        <!-- Modal Delete Data Dosen TA -->
        <div class="modal fade" id="modaldosentadelete-{{ $sdm['id'] }}" tabindex="-1" aria-labelledby="modaldosentadelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosentadelete">Hapus Data {{ $sdm['nama'] }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.profildosenmodal.dosentadelete')     
        </div>
        </div>
        </div>

        <div class="modal fade" id="modaltolakta-{{ $sdm['id'] }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.profildosenmodal.tolak2')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalappta-{{ $sdm['id'] }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.profildosenmodal.app2')
            </div>
            </div>
        </div> 

        @endforeach
</div>
@include('layouts.table')