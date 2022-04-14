<div id="print-table3">
    <table id='form-print' class="table text-center align-middle table-bordered table-condensed table-responsive">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2" >No</th>
                <th class="align-middle" scope="col" rowspan="2" >Nama Dosen</th>
                <th class="align-middle" scope="col" rowspan="2" >NIDN/ NIDK <sup>1)</sup></th>
                <th class="align-middle" scope="col" rowspan="2" >Pendidikan Pasca Sarjana <sup>2)</sup></th>
                <th class="align-middle" scope="col" rowspan="2" >Bidang Keahlian <sup>3)</sup></th>
                <th class="align-middle" scope="col" rowspan="2" >Jabatan Akademik</th>                   
                <th class="align-middle" scope="col" rowspan="2" >Sertifikat Pendidik Profesional <sup>4)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Sertifikat Kompetensi /Profesi/ Industri <sup>5)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu pada PS yang Diakreditasi <sup>6)</sup></th>  
                <th class="align-middle" scope="col" rowspan="2" >Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu <sup>7)</sup></th>
                @hasanyrole('perwakilan|dekan')
                <th class="align-middle" scope="col" rowspan="2" >Opsi</th>  
                @endhasanyrole
            </tr>
        </thead>

        <tbody class="text-dark text-center align-middle">
             {{-- Coding Tabel Disini --}}
             <tr>
        @foreach ($dosentidaktetap['dosen'] as $sdm)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sdm->nama }}</td>
                <td>{{ $sdm->no_id }}</td>
                <td>{{ $sdm->pendidikan_pasca_sarjana }}</td>
                <td>{{ $sdm->bidang_keahlian }}</td>
                <td>{{ $sdm->jabatan_akademik }}</td>
                <td>{{ $sdm->sertifikat_pendidikan_profesi }}</td>
                <td>{{ $sdm->sertifikat_profesi }}</td>
                <td>{{ $sdm->mata_kuliah_diampu_ps_akreditasi }}</td>
                <td>{{ $sdm->kesesuaian_mata_kuliah_diampu == '1' ? 'V' : '' }}</td>
                @hasanyrole('perwakilan|dekan')
                <td class="align-middle">
                <ul class="action-list d-flex justify-content-center mr-1" id="action">
                    
                    @hasrole('perwakilan')
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosentidaktetapedit-{{ $sdm->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/profil-dosen/{{ $sdm->id }}" data-toggle="modal" data-target="#modaldosentidaktetapdelete-{{ $sdm->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                    @endhasrole

                    @hasrole('dekan')
                        <li>
                            <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalapptt-{{ $sdm->id }}"><i class="fas fa-check-circle"></i></a>
                        </li>
                        <li>
                            <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaktt-{{ $sdm->id }}"><i class="fas fa-times-circle"></i></a>
                        </li>
                    @endhasrole

                </ul>
                </td>
                @endhasanyrole
                
            </tr>
          
          
            @endforeach
          <tr>
              <td class="text-center"> <b>Jumlah</b> </td>
              <td colspan="10" class="text-left"> <b>NDTT : {{ $dosentidaktetap['ndtt'] }}</b> </td>
          </tr>
         </tbody>
    </table>
</div>

@include('layouts.table')