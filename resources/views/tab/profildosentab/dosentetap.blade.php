<div class="collapse" id="des1">
    <div class="card card-body">
        <p>
        Tuliskan data Dosen Tetap Perguruan Tinggi yang ditugaskan sebagai pengampu mata kuliah di Program Studi yang Diakreditasi
        (DTPS) pada saat TS dengan mengikuti format Tabel berikut ini. <br> <br>
        <b>Keterangan</b> <br>
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
    <div class="modal fade" id="modaldosentetap" tabindex="-1" aria-labelledby="modaldosentetap" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosentetap">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.profildosenmodal.dosentetap')
        </div>
        </div>
        </div>
  

  {{-- CONTENT --}}
      
  <div id="printElement container-fluid">
      <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
          <thead>
              <tr>

                  <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                  <th class="align-middle" scope="col" rowspan="2">NIDN/ NIDK</th>
                  <th th scope="col" colspan="2" >Pendidikan Pasca Sarjana <sup>1)</sup></th>
                  <th class="align-middle" scope="col" rowspan="2">Bidang Keahlian <sup>2)</sup></th>
                  <th class="align-middle" scope="col" rowspan="2" >Kesesuaian dengan Kompetensi Inti PS <sup>3)</sup></th>  
                  <th class="align-middle" scope="col" rowspan="2" >Jabatan Akademik</th>  
                  <th class="align-middle" scope="col" rowspan="2" >Sertifikat Pendidik Profesional <sup>4)</sup></th>  
                  <th class="align-middle" scope="col" rowspan="2" >Sertifikat Kompetensi /Profesi/ Industri <sup>5)</sup></th>  
                  <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS yang Diakreditasi <sup>6)</sup></th>  
                  <th class="align-middle" scope="col" rowspan="2" >Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu <sup>7)</sup></th>  
                  <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS Lain <sup>8)</sup></th>  
                  <th class="align-middle" scope="col" rowspan="2" >Opsi</th>  
              </tr>
              <tr>
                  <th scope="col">Magister /Magister Terapan/ Spesialis</th>
                  <th scope="col">Doktor /Doktor Terapan/ Spesialis</th>       
              </tr>
      
          </thead>

          <tbody class="text-dark">
               {{-- Coding Tabel Disini --}}
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
                      <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosentetapedit-{{ $sdm->id }}"><i class="fas fa-edit"></i></a></li>
                      <li>
                          <a type="button" class="btn btn-danger" href="/profil-dosen/{{ $sdm->id }}" data-toggle="modal" data-target="#modaldosentetapdelete-{{ $sdm->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                  </ul></td>
              </tr>
            
            <!-- Modal Edit Data Dosen Tetap -->
            <div class="modal fade" id="modaldosentetapedit-{{ $sdm->id }}" tabindex="-1" aria-labelledby="modaldosentetapedit" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modaldosentetapedit">Edit Data Dosen Tetap</h5>
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
                <h5 class="modal-title" id="modaldosentetapdelete">Yakin?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.profildosenmodal.dosentetapdelete')
            </div>
            </div>
            </div>

            @endforeach
              <tr>
                  <td><b>Jumlah</b></td>
                  <td colspan="5" class="text-left"><b>NDT :  {{-- coding jumlah Dosen pengampu --}}</b></td>
                  <td colspan="7" class="text-left"><b>NDTS : {{-- coding jumlah Dosen pengampu yang bidang keahliannya sesuai --}}</b></td>

              </tr>
        </table>
    </div>
