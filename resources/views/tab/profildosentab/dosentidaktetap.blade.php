<div class="tab-pane fade" id="dosen-ttetap" role="tabpanel" aria-labelledby="dosTTetap-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
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
    
  
    {{-- CONTENT --}}
        
    <div id="printElement container-fluid">
        <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
            <thead>
                <tr>
                    <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                    <th class="align-middle" scope="col" rowspan="2">NIDN/ NIDK <sup>1)</sup></th>
                    <th class="align-middle" scope="col" rowspan="2" >Pendidikan Pasca Sarjana <sup>2)</sup></th>
                    <th class="align-middle" scope="col" rowspan="2">Bidang Keahlian <sup>3)</sup></th>
                    <th class="align-middle" scope="col" rowspan="2" >Jabatan Akademik</th>                   
                    <th class="align-middle" scope="col" rowspan="2" >Sertifikat Pendidik Profesional <sup>4)</sup></th>  
                    <th class="align-middle" scope="col" rowspan="2" >Sertifikat Kompetensi /Profesi/ Industri <sup>5)</sup></th>  
                    <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS yang Diakreditasi <sup>6)</sup></th>  
                    <th class="align-middle" scope="col" rowspan="2" >Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu <sup>7</sup></th>  
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
              
              <!-- Modal Edit Data TA -->
              <div class="modal fade" id="modaldosentidaktetap{{-- $sdm->id --}}" tabindex="-1" aria-labelledby="modaldosentidaktetapedit" aria-hidden="true">
              <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="modaldosentidaktetapedit">Edit Data Dosen Tidak Tetap</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  @include('partials.profildosenmodal.dosentidaktetapedit')
              </div>
              </div>
              </div>
      
              <!-- Modal Delete Data Dosen TA -->
              <div class="modal fade" id="modaldosentidaktetapdelete{{-- $sdm->id --}}" tabindex="-1" aria-labelledby="modaldosentidaktetapdelete" aria-hidden="true">
              <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="modaldosentidaktetapdelete">Yakin?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  @include('partials.profildosenmodal.dosentidaktetapdelete')
              </div>
              </div>
              </div>
  
                {{-- @endforeach --}}
              <tr>
                  <td class="text-center"> <b>Jumlah</b> </td>
                  <td colspan="9" class="text-left"> <b>NDTT :</b></td>
              </tr>
        </table>
    </div>
</div>