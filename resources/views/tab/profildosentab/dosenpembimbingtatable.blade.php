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
          
          

            {{-- @endforeach --}}
    </table>
</div>