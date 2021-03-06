<div id="print-table4">
    <table id='form-print' class="table text-center align-middle table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="3" width="1%">No</th>
                <th class="align-middle" scope="col" rowspan="3">Nama Dosen (DT)</th>
                <th class="align-middle" scope="col" rowspan="3">DTPS <sup>1)</sup></th>
                <th scope="col" colspan="6" >Ekuivalen Waktu Mengajar <br> Penuh(EWMP) pada saat <br> TS dalam satuan <br> kredit semester (sks)</th>
                <th class="align-middle" scope="col" rowspan="3">Jumlah <br> (SKS)</th>  
                <th class="align-middle" scope="col" rowspan="3">Rata-tara <br> per semester <br> (SKS)</th>
                @hasanyrole('perwakilan|dekan')
                <th class="align-middle" scope="col" rowspan="3" >Opsi</th> 
                @endhasanyrole  
            </tr>
            <tr>
                <th class="align-middle" scope="col" colspan="3">pada PS <br> yang Diakreditasi</th>
                <th class="align-middle" scope="col" rowspan="2">Pene- <br> litian</th>
                <th class="align-middle" scope="col" rowspan="2">PkM</th> 
                <th class="align-middle" scope="col" rowspan="2">Tugas <br> Tamb- <br> ahan <br> dan/ <br> atau <br>  Penun- <br> jang</th>        
            </tr>
            
            <tr>
                <th class="align-middle" scope="col" >PS <br> yang  <br> Diakre- <br> ditasi</th>
                <th class="align-middle" scope="col" >PS <br> Lain <br> di <br> dalam <br> PT</th>
                <th class="align-middle" scope="col" >PS <br> Lain <br> di <br> luar <br> PT</th> 
            </tr>
    
        </thead>
    @hasanyrole('perwakilan|dekan')
        <tbody class="text-dark">
             {{-- Coding Tabel Disini --}}
             <tr>
            @foreach ($dosenewmp['dosen'] as $ewmp)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ewmp->nama }}</td>
                <td>{{ $ewmp->dtps == '1' ? 'V' : '' }}</td>
                <td>{{ $ewmp->ps_akreditasi }}</td>
                <td>{{ $ewmp->ps_lain_dalam_pt }}</td>
                <td>{{ $ewmp->ps_lain_luar_pt }}</td>
                <td>{{ $ewmp->penelitian }}</td>
                <td>{{ $ewmp->pkm }}</td>
                <td>{{ $ewmp->penunjang }}</td>
                <td>{{ $ewmp->sks }}</td>
                <td>{{ $ewmp->average_per_sks }}</td>
                @hasanyrole('perwakilan|dekan')
                <td class="align-middle">
                <ul class="action-list d-flex justify-content-center mr-1" id="action">
                    
                    @hasrole('perwakilan')
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenewmpedit-{{ $ewmp->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/profil-dosen/dosen-ewmp/{{ $ewmp->id }}" data-toggle="modal" data-target="#modaldosenewmpdelete-{{ $ewmp->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    @endhasrole

                    @hasrole('dekan')
                        <li>
                            <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappewmp-{{ $ewmp->id }}"><i class="fas fa-check-circle"></i></a>
                        </li>
                        <li>
                            <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakewmp-{{ $ewmp->id }}"><i class="fas fa-times-circle"></i></a>
                        </li>
                    @endhasrole

                </ul>
                </td>
                @endhasanyrole
                
            </tr>
          
          

            @endforeach
            <tr>
                <td rowspan="2" class="align-middle"><b>Jumlah</b></td>
                <td colspan="8" class="text-right"><b> Rata Rata DT </b></td>
                <td>{{ $dosenewmp['average_dt_jumlah'] }}</td>
                <td>{{ $dosenewmp['average_dt_average'] }}</td>
                @hasrole('perwakilan')
                <td></td>
                @endhasrole
            </tr> 
            <tr>
                <td colspan="8" class="text-right"><b> Rata Rata DTPS </b></td>
                <td>{{ $dosenewmp['average_dtps_jumlah'] }}</td>
                <td>{{ $dosenewmp['average_dtps_average'] }}</td>
                @hasrole('perwakilan')
                <td></td>
                @endhasrole
            </tr> 
        </tbody>
    @endhasanyrole

    @hasrole('asesor')
        <tbody class="text-dark">
            {{-- Coding Tabel Disini --}}
            <tr>
            @foreach ($dosenewmp['dosen_asesor'] as $ewmp)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ewmp->nama }}</td>
                <td>{{ $ewmp->dtps == '1' ? 'V' : '' }}</td>
                <td>{{ $ewmp->ps_akreditasi }}</td>
                <td>{{ $ewmp->ps_lain_dalam_pt }}</td>
                <td>{{ $ewmp->ps_lain_luar_pt }}</td>
                <td>{{ $ewmp->penelitian }}</td>
                <td>{{ $ewmp->pkm }}</td>
                <td>{{ $ewmp->penunjang }}</td>
                <td>{{ $ewmp->sks }}</td>
                <td>{{ $ewmp->average_per_sks }}</td>           
            </tr>
            @endforeach
            <tr>
                <td rowspan="2" class="align-middle"><b>Jumlah</b></td>
                <td colspan="8" class="text-right"><b> Rata Rata DT </b></td>
                <td>{{ $dosenewmp['average_dt_jumlah_asesor'] }}</td>
                <td>{{ $dosenewmp['average_dt_average_asesor'] }}</td>
            </tr> 
            <tr>
                <td colspan="8" class="text-right"><b> Rata Rata DTPS </b></td>
                <td>{{ $dosenewmp['average_dtps_jumlah_asesor'] }}</td>
                <td>{{ $dosenewmp['average_dtps_average_asesor'] }}</td>
            </tr> 
        </tbody>
    @endhasrole
    </table>
</div>
@include('layouts.table')