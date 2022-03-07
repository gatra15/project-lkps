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
      <div class="modal fade" id="modaldosenewmp" tabindex="-1" aria-labelledby="modaldosenewmp"" aria-hidden="true">
          <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="modaldosenewmp"">Tambah Data EWMP Dosen</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.profildosenmodal.dosenewmp')
          </div>
          </div>
          </div>
    
  
    {{-- CONTENT --}}
        
    <div id="printElement container-fluid">
        <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
            <thead>
                <tr>
                    <th class="align-middle" scope="col" rowspan="3">No</th>
                    <th class="align-middle" scope="col" rowspan="3">Nama Dosen (DT)</th>
                    <th class="align-middle" scope="col" rowspan="3">DTPS <sup>1)</sup></th>
                    <th scope="col" colspan="6" >Ekuivalen Waktu Mengajar Penuh(EWMP) pada saat TS dalam satuan kredit semester (sks)</th>
                    <th class="align-middle" scope="col" rowspan="3">Jumlah (SKS)</th>  
                    <th class="align-middle" scope="col" rowspan="3">Rata-tara per semester (SKS)</th>
                    <th class="align-middle" scope="col" rowspan="3" >Opsi</th>   
                </tr>
                <tr>
                    <th scope="col" colspan="3">pada PS yang Diakreditasi</th>
                    <th class="align-middle" scope="col" rowspan="2">Penelitian</th>
                    <th class="align-middle" scope="col" rowspan="2">PkM</th> 
                    <th class="align-middle" scope="col" rowspan="2">Tugas Tambahan dan/atau Penunjang</th>        
                </tr>
                
                <tr>
                    <th scope="col" >PS yang Diakreditasi</th>
                    <th scope="col" >PS Lain di dalam PT</th>
                    <th scope="col" >PS Lain di luar PT</th> 
                </tr>
        
            </thead>
  
            <tbody class="text-dark">
                 {{-- Coding Tabel Disini --}}
                 {{-- <tr>
                @foreach ($dosen as $sdm)
                <tr>
                    <td>{{ $sdm->nama_dosen }}</td>
                    <td>{{ $sdm->nidn_nidk }}</td>
                    <td>{{ $sdm->pendidikan_pasca_sarjana_magister }}</td>
                    <td>{{ $sdm->pendidikan_pasca_sarjana_doktor }}</td>
                    <td>{{ $sdm->bidang_keahlian }}</td>
                    <td>{{ $sdm->kesesuaian_ps }}</td>
                    <td>{{ $sdm->jabatan_akademik }}</td>
                    <td>{{ $sdm->sertifikat_pendidik_profesi }}</td>
                    <td>{{ $sdm->sertifikat_kompetensi }}</td>
                    <td>{{ $sdm->mata_kuliah_akreditasi_diampu }}</td>
                    <td>{{ $sdm->kesesuaian_mata_kuliah_diampu }}</td>
                    <td>{{ $sdm->mata_kuliah_diampu_ps_lain }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenewmpedit-{{ $sdm->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/profil-dosen/{{ $sdm->id }}" data-toggle="modal" data-target="#modaldosenewmpdelete-{{ $sdm->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                </tr> --}}
                <tr> <td>eko</td> </tr>
              
              <!-- Modal Edit Data EWMP -->
              <div class="modal fade" id="modaldosenewmpedit{{-- $sdm->id --}}" tabindex="-1" aria-labelledby="modaldosenewmpeditt" aria-hidden="true">
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
              <div class="modal fade" id="modaldosenewmpdelete{{-- $sdm->id --}}" tabindex="-1" aria-labelledby="modaldosenewmpdelete" aria-hidden="true">
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
  
                {{-- @endforeach --}}
                <tr>
                    <td rowspan="2" class="align-middle"><b>Jumlah</b></td>
                    <td colspan="8" class="text-right"><b> Rata Rata DT </b></td>
                </tr> 
                <tr>
                    <td colspan=8" class="text-right"><b> Rata Rata DTPS </b></td>
                </tr> 
          </table>
      </div>
  