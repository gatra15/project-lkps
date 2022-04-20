<div class="tab-pane active" id="pkm" role="tabpanel">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach ($pengabdian as $pkm)
      @if ($pkm->alert == 'success')
      <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} {{ $pkm->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif ($pkm->alert == 'warning')
      <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
        {{ $pkm->comment }}
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
                    @hasrole ('perwakilan')
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpkm">
                        Tambah data
                    </button>
                    @endhasrole
                </p>
                {{-- CSV DISINI --}}
                @can ('download file')
                <a href="/pkm/download/excel" class="btn btn-success">Excel</a>
                <a href="/pkm/download/csv" class="btn btn-success">CSV</a>
                <input type="button" class="btn btn-primary" onclick="printDiv('print-table')" value="Print Document" />
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
                Cara Download PDF
                </button>
                @endcan
                <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <p>Tuliskan data pengabdian kepada masyarakat (PkM) DTPS yang dalam pelaksanaannya melibatkan mahasiswa Program Studi pada <b> TS-2 sampai dengan TS </b> dengan mengikuti format berikut ini. <br> <br>
                    <b> Keterangan </b> <br>
                    1) Kegiatan PkM dosen yang dalam pelaksanaannya melibatkan mahasiswa, tidak
                    termasuk kegiatan KKN atau kegiatan lainnya yang merupakan bagian dari kegiatan
                    kurikuler. <br>
                    </p>
    
                </div> 
                </div>

                <!-- Modal Tambah Data PKM -->
          <div class="modal fade" id="modalpkm" tabindex="-1" aria-labelledby="modalpkm" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalpkm">Tambah Data PkM DTPS yang Melibatkan Mahasiswa </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.pkmmodal.pkmmodal')
            </div>
            </div>
            </div>

            {{-- TABLE --}}
            @include('tab.pkmtab.pkmtable')

            @foreach($pengabdian as $pkm)
          <!-- Modal Tambah Edit PKM -->
          <div class="modal fade" id="modalpkmedit-{{ $pkm->id }}" tabindex="-1" aria-labelledby="modalpkmedit" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalpkmedit">Update Data PkM DTPS yang Melibatkan Mahasiswa </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.pkmmodal.pkmmodaledit')
            </div>
            </div>
            </div>

          <!-- Modal Tambah Delete PKM -->
          <div class="modal fade" id="modalpkmdelete-{{ $pkm->id }}" tabindex="-1" aria-labelledby="modalpkmdelete" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalpkmdelete">Hapus Data PkM DTPS yang Melibatkan Mahasiswa </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.pkmmodal.pkmmodaldelete')
            </div>
            </div>
            </div>

            <div class="modal fade" id="modaltolakpkm-{{ $pkm->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @include('partials.pkmmodal.tolak')
                </div>
                </div>
            </div> 
            
            <div class="modal fade" id="modalapppkm-{{ $pkm->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    @include('partials.pkmmodal.app')
                </div>
                </div>
            </div> 
            @endforeach

    

</div>
@include('layouts.table')