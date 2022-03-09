<div class="tab-pane fade" id="ewmp" role="tabpanel" aria-labelledby="ewmp-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenewmp">
            Tambah data
        </button>
    </p>
    <a href="/profil-dosen/dosen-ewmp/download/excel" class="btn btn-success">Excel</a>
    <a href="/profil-dosen/dosen-ewmp/download/csv" class="btn btn-success">CSV</a>
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
          <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="modaldosenewmp">Tambah Data EWMP Dosen</h5>
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
        
    @foreach ($dosenewmp as $ewmp)
    <!-- Modal Edit Data EWMP -->
    <div class="modal fade" id="modaldosenewmpedit-{{ $ewmp->id }}" tabindex="-1" aria-labelledby="modaldosenewmpeditt" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenewmpedit">Edit Data EWMP Dosen</h5>
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
            <h5 class="modal-title" id="modaldosenewmpdelete">Yakin?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.profildosenmodal.dosenewmpdelete')
        </div>
        </div>
        </div>
        @endforeach

</div>
