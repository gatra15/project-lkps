<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2" >Nama Dosen</th>
                <th class="align-middle" scope="col" rowspan="2" >NIDN/ NIDK <sup>1)</sup></th>
                <th class="align-middle" scope="col" rowspan="2" >Pendidikan Pasca Sarjana <sup>2)</sup></th>
                <th class="align-middle" scope="col" rowspan="2" >Bidang Keahlian <sup>3)</sup></th>
                <th class="align-middle" scope="col" rowspan="2" >Jabatan Akademik</th>                   
                <th class="align-middle" scope="col" rowspan="2" >Sertifikat Pendidik Profesional <sup>4)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Sertifikat Kompetensi /Profesi/ Industri <sup>5)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS yang Diakreditasi <sup>6)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu <sup>7</sup></th>
                <th class="align-middle" scope="col" rowspan="2" >Opsi</th>  
            </tr>
        </thead>

        <tbody class="text-dark">
             {{-- Coding Tabel Disini --}}
             <tr>
        @foreach ($dosentidaktetap as $sdm)
            <tr>
                <td>{{ $sdm->nama }}</td>
                <td>{{ $sdm->no_id }}</td>
                <td>{{ $sdm->pendidikan_pasca_sarjana }}</td>
                <td>{{ $sdm->bidang_keahlian }}</td>
                <td>{{ $sdm->jabatan_akademik }}</td>
                <td>{{ $sdm->sertifikat_pendidikan_profesi }}</td>
                <td>{{ $sdm->sertifikat_profesi }}</td>
                <td>{{ $sdm->mata_kuliah_diampu_ps_akreditasi }}</td>
                <td>{{ $sdm->kesesuaian_mata_kuliah_diampu == '1' ? 'V' : '' }}</td>
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosentidaktetapedit-{{ $sdm->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/profil-dosen/{{ $sdm->id }}" data-toggle="modal" data-target="#modaldosentidaktetapdelete-{{ $sdm->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
            </tr>
          
          
            @endforeach
          <tr>
              <td class="text-center"> <b>Jumlah</b> </td>
              <td colspan="9" class="text-left"> <b>NDTT :</b></td>
          </tr>
    </table>
</div>