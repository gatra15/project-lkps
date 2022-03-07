<div class="tab-pane fade" id="dosbing-ta" role="tabpanel" aria-labelledby="dosbingTA-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
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
          <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="modaldosenta">Tambah Data Dosen TA </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.profildosenmodal.dosenta')
          </div>
          </div>
          </div>
    
  
    {{-- CONTENT --}}
        
    <div id="printElement container-fluid">
        <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
            <thead>
                <tr>
                    <th class="align-middle" scope="col" rowspan="3">No</th>
                    <th class="align-middle" scope="col" rowspan="3">Nama Dosen <sup>2)</sup></th>
                    <th scope="col" colspan="8" >Jumlah Mahasiswa Yang Dibimbing</th>
                    <th class="align-middle" scope="col" rowspan="3">Rata-rata Jumlah Bimbingan di Semua Program/Semester<sup>5)</sup>  </th>  
                </tr>
                <tr>
                    <th scope="col" colspan="4">pada PS yang Diakreditasi<sup>3)</sup></th>
                    <th scope="col" colspan="4">pada PS Lain di PT<sup>4)</sup></th>       
                </tr>
                <tr>
                    <th scope="col" >TS-2</th>
                    <th scope="col" >TS-1</th>
                    <th scope="col" >TS</th>
                    <th scope="col" >Rata - rata</th>    
                    <th scope="col" >TS-2</th>
                    <th scope="col" >TS-1</th>
                    <th scope="col" >TS</th>
                    <th scope="col" >Rata - rata</th>    
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
              <div class="modal fade" id="modaldosentaedit{{-- $sdm->id --}}" tabindex="-1" aria-labelledby="modaldosentaeditt" aria-hidden="true">
              <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="modaldosentaedit">Edit Data EWMP Dosen</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  @include('partials.profildosenmodal.dosentaedit')
              </div>
              </div>
              </div>
      
              <!-- Modal Delete Data Dosen TA -->
              <div class="modal fade" id="modaldosentadelete{{-- $sdm->id --}}" tabindex="-1" aria-labelledby="modaldosentadelete" aria-hidden="true">
              <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="modaldosentadelete">Yakin?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  @include('partials.profildosenmodal.dosentadelete')
              </div>
              </div>
              </div>
  
                {{-- @endforeach --}}
        </table>
    </div>
</div>