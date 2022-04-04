<div id="print-table" >
    <table id='form-print' class="table text-center align-middle table-bordered table-condensed ">
        <thead>
            <tr>

                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                <th class="align-middle" scope="col" rowspan="2">NIDN/ NIDK</th>
                <th class="align-middle" scope="col" colspan="2" >Pendidikan Pasca Sarjana <sup>1)</sup></th>
                <th class="align-middle" scope="col" rowspan="2">Bidang Keahlian <sup>2)</sup></th>
                <th class="align-middle" scope="col" rowspan="2" >Kesesuaian dengan Kompetensi Inti PS <sup>3)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Jabatan Akademik</th>  
                <th class="align-middle" scope="col" rowspan="2" >Sertifikat Pendidik Profesional <sup>4)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Sertifikat Kompetensi /Profesi/ Industri <sup>5)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS yang Diakreditasi <sup>6)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu <sup>7)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS Lain <sup>8)</sup></th>  
                @hasrole('perwakilan')
                <th class="align-middle" scope="col" rowspan="2" >Opsi</th>  
                @endhasrole
            </tr>
            <tr>
                <th scope="col">Magister /Magister Terapan/ Spesialis</th>
                <th scope="col">Doktor /Doktor Terapan/ Spesialis</th>       
            </tr>
    
        </thead>

        <tbody class="text-dark text-center align-middle">
             {{-- Coding Tabel Disini --}}
            @foreach ($dosen['dosen'] as $sdm)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sdm->nama_dosen }}</td>
                <td>{{ $sdm->nidn_nidk }}</td>
                <td>{{ $sdm->pendidikan_pasca_sarjana_magister }}</td>
                <td>{{ $sdm->pendidikan_pasca_sarjana_doktor }}</td>
                <td>{{ $sdm->bidang_keahlian }}</td>
                <td>{{ $sdm->kesesuaian_ps == 1 ? 'V' : '' }}</td>
                <td>{{ $sdm->jabatan_akademik }}</td>
                <td>{{ $sdm->sertifikat_pendidik_profesi }}</td>
                <td>{{ $sdm->sertifikat_kompetensi }}</td>
                <td>{{ $sdm->mata_kuliah_akreditasi_diampu }}</td>
                <td>{{ $sdm->kesesuaian_mata_kuliah_diampu == 1 ? 'V' : '' }}</td>
                <td>{{ $sdm->mata_kuliah_diampu_ps_lain }}</td>
                @hasrole('perwakilan')
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosentetapedit-{{ $sdm->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/profil-dosen/{{ $sdm->id }}" data-toggle="modal" data-target="#modaldosentetapdelete-{{ $sdm->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
            </tr>
          
          

          @endforeach
            <tr>
                <td><b>Jumlah</b></td>
                <td colspan="5" class="text-left"><b>NDT : {{ $dosen['ndt'] }}</b></td>
                <td colspan="7" class="text-left"><b>NDTPS : {{ $dosen['ndtps'] }}</b></td>
                @hasrole('perwakilan')
                <td></td>
                @endhasrole
            </tr>
      </table>
  </div>
@include('layouts.table')