    <div class="collapse" id="des3">
        <div class="card card-body">
            <p>
            Keterangan:
            NDT = Jumlah Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang diakreditasi.<br>
            NDTPS = Jumlah Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah dengan bidang keahlian yang<br>
            sesuai dengan kompetensi inti program studi yang diakreditasi.
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
                    <th class="align-middle" scope="col" rowspan="3">Nama Dosen(DT)</th>
                    <th class="align-middle" scope="col" rowspan="3">DTPS</th>
                    <th scope="col" colspan="6" >Ekuivalen Waktu Mengajar Penuh(EWMP) pada saat TS dalam satuan kredit semester (sks)</th>
                    <th class="align-middle" scope="col" rowspan="3">Jumlah (SKS)</th>  
                    <th class="align-middle" scope="col" rowspan="3">Rata-tara per semester (SKS)</th>  
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
                    <td><b>Jumlah</b></td>
                    <td colspan="2"><b>NDT :  {{-- coding jumlah Dosen pengampu --}}</b></td>
                    <td class="abu"></td>
                    <td class="abu"></td>
                    <td class="abu"></td>
                    <td colspan="2"><b>NDTS : {{-- coding jumlah Dosen pengampu yang bidang keahliannya sesuai --}}</b></td>
                    <td class="abu"></td>
                    <td class="abu"></td>
                    <td class="abu"></td>
                    <td class="abu"></td>
                </tr> 
          </table>
      </div>
  