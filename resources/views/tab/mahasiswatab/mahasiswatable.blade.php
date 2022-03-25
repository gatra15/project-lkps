<div id="print-table">
    <table id='form-print' class="table text-center table-bordered">
    <thead >
    <tr>
        <th class="align-middle" scope="col" rowspan="2">Tahun Akademik</th>
        <th class="align-middle" scope="col" rowspan="2">Daya Tampung</th>
        <th scope="col" colspan="2">Jumlah Calon Mahasiswa</th>
        <th scope="col" colspan="2">Jumlah Mahasiswa Baru</th>
        <th scope="col" colspan="2">Jumlah Mahasiswa Aktif</th>  
        @hasrole('perwakilan')
        <th class="align-middle" scope="col" rowspan="2">Action</th>  
        @endhasrole
    </tr>
    <tr>
        <th scope="col">Pendaftar</th>
        <th scope="col">Lulus Seleksi</th>
        <th scope="col">Reguler</th>
        <th scope="col">Transfer</th>   
        <th scope="col">Reguler</th>
        <th scope="col">Transfer</th>      
    </tr>
    
    </thead>
    
    <tbody class="text-dark">
    
    @foreach ($mahasiswa['mahasiswa'] as $key => $mhs)
        <tr>
           <td>{{ $key == sizeof($mahasiswa['mahasiswa'])-1 ? 'TS' : 'TS-'.(sizeof($mahasiswa['mahasiswa'])-1-$key) }}</td>
           <td>{{ $mhs->daya_tampung }}</td> 
           <td>{{ $mhs->c_pendaftar }}</td> 
           <td>{{ $mhs->c_lulus_seleksi }}</td> 
           <td>{{ $mhs->mahasiswa_reguler }}</td> 
           <td>{{ $mhs->mahasiswa_transfer }}</td> 
           @if ($key == sizeof($mahasiswa['mahasiswa'])-1)
           <td class="text-left"> <b>N <sub>RTS =</sub> </b>{{ $mahasiswa['aktif_reguler'] }}   </td> 
           @else
           <td>{{ $mhs->mahasiswa_aktif_reguler }}</td>
           @endif

           @if ($key == sizeof($mahasiswa['mahasiswa'])-1)
           <td class="text-left"> <b>N <sub>TTS =</sub></b>  {{ $mahasiswa['aktif_transfer'] }} </td> 
           @else
           <td>{{ $mhs->mahasiswa_aktif_transfer }}</td>
           @endif

            @hasrole('perwakilan')
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalmahasiswaedit-{{ $mhs->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/mahasiswa/delete/{{ $mhs->id }}" data-toggle="modal" data-target="#modalmahasiswadelete-{{ $mhs->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
            @endhasrole
        </tr>
    @endforeach
        
        <tr>
            <td class="align-middle text-center" colspan="2"><b>Jumlah</b></td>
            <td class="align-middle text-center"><b>N<sub>A</sub> = </b>{{ $mahasiswa['pendaftar'] }}</td>
            <td class="align-middle text-center"><b>N<sub>B</sub> = </b>{{ $mahasiswa['lulus_seleksi'] }}</td>
            <td class="align-middle text-center"><b>N<sub>C</sub> = </b>{{ $mahasiswa['reguler'] }}</td>
            <td class="align-middle text-center"><b>N<sub>D</sub> = </b>{{ $mahasiswa['transfer'] }}</td>
            <td class="align-middle text-center" colspan="2"><b>N<sub>M</sub> = </b>{{ $mahasiswa['total'] }}</td>
            <td></td>
        </tr>
    
    </tbody>
    </table> 
</div>