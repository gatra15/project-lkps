<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="3">No</th>
                <th class="align-middle" scope="col" rowspan="3">Nama Dosen (DT)</th>
                <th class="align-middle" scope="col" rowspan="3">DTPS <sup>1)</sup></th>
                <th scope="col" colspan="6" >Ekuivalen Waktu Mengajar Penuh(EWMP) pada saat TS dalam satuan kredit semester (sks)</th>
                <th class="align-middle" scope="col" rowspan="3">Jumlah (SKS)</th>  
                <th class="align-middle" scope="col" rowspan="3">Rata-tara per semester (SKS)</th>
                <th class="align-middle" scope="col" rowspan="3" >Opsi</th>   
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
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenewmpedit-{{ $ewmp->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/profil-dosen/dosen-ewmp/{{ $ewmp->id }}" data-toggle="modal" data-target="#modaldosenewmpdelete-{{ $ewmp->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
            </tr>
          
          

            @endforeach
            <tr>
                <td rowspan="2" class="align-middle"><b>Jumlah</b></td>
                <td colspan="8" class="text-right"><b> Rata Rata DT </b></td>
                <td>{{ $dosenewmp['average_dt_jumlah'] }}</td>
                <td>{{ $dosenewmp['average_dt_average'] }}</td>
            </tr> 
            <tr>
                <td colspan="8" class="text-right"><b> Rata Rata DTPS </b></td>
                <td>{{ $dosenewmp['average_dtps_jumlah'] }}</td>
                <td>{{ $dosenewmp['average_dtps_average'] }}</td>
            </tr> 
    </table>
</div>