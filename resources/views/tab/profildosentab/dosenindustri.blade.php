<div class="collapse" id="des5">
    <div class="card card-body">
        <p>
        <i> Catatan: Data dosen industri/praktisi tidak termasuk ke dalam data dosen tidak tetap.</i> <br>
        Tuliskan data dosen industri/praktisi yang ditugaskan sebagai pengampu mata kuliah kompetensi di Program Studi yang diakreditasi
        pada saat TS dengan mengikuti format berikut ini. Dosen industri/praktisi direkrut melalui kerjasama dengan perusahaan
        atau industri yang relevan dengan bidang program studi.<br> <br>
        <b>Keterangan</b> <br>
        1) NIDK = Nomor Induk Dosen Khusus, diisi jika ada. <br>
        2) Diisi dengan nama perusahaan/industri asal dosen industri/praktisi. <br>
        3) Bidang keahlian sesuai pendidikan tertinggi. <br>
        4) Diisi dengan bidang sertifikasi dan lembaga penerbit sertifikat. <br>
        5) Diisi dengan nama mata kuliah yang diampu pada saat TS-2 s.d. TS. Dosen industri/praktisi dapat terlibat sebagai pengampu
        secara penuh atau sebagai bagian dari kelompok dosen atau team teaching. <br>
        </p>
    </div> 
</div>
  
        
      
      <!-- Modal Tambah Data Dosen TA -->
      <div class="modal fade" id="modaldosenindustri" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
          <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="modal-header">
              <h5 class="modal-title" id="modaldosenindustri">Tambah Data Dosen Industri </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.profildosenmodal.dosenindustri')
          </div>
          </div>
          </div>
    
  
    {{-- CONTENT --}}
        
    <div id="printElement container-fluid">
        <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
            <thead>
                <tr>
                    <th class="align-middle" scope="col" rowspan="2">Nama Dosen/ Industri/ Praktisi</th>
                    <th class="align-middle" scope="col" rowspan="2">NIDK</th>
                    <th class="align-middle" scope="col" rowspan="2" >Perusahaan Industri</th>
                    <th class="align-middle" scope="col" rowspan="2">Pendidikan Tertinggi</th>
                    <th class="align-middle" scope="col" rowspan="2" >Bidang Keahlian</th>                   
                    <th class="align-middle" scope="col" rowspan="2" >Sertifikat Profesi/ Kompetensi/ Industri</th>  
                    <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu </th>  
                    <th class="align-middle" scope="col" rowspan="2" >Bobot Kredit (SKS)</th>  
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
              <div class="modal fade" id="modaldosenindustriedit{{-- $sdm->id --}}" tabindex="-1" aria-labelledby="modaldosenindustriedit" aria-hidden="true">
              <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="modaldosenindustriedit">Edit Dosen Industri</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  @include('partials.profildosenmodal.dosenindustriedit')
              </div>
              </div>
              </div>
      
              <!-- Modal Delete Data Dosen TA -->
              <div class="modal fade" id="modaldosenindustridelete{{-- $sdm->id --}}" tabindex="-1" aria-labelledby="modaldosenindustridelete" aria-hidden="true">
              <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="modaldosenindustridelete">Yakin?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  </div>
                  @include('partials.profildosenmodal.dosenindustridelete')
              </div>
              </div>
              </div>
  
                {{-- @endforeach --}}
          </table>
      </div>

    