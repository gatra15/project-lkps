<div id="print-table2">
    <table id='form-print' class="table text-center table-bordered">
    <thead>
        <tr>
            <th class="align-middle" scope="col" rowspan="2">No</th>
            <th class="align-middle" scope="col" rowspan="2">Program Studi</th>
            <th class="align-middle" scope="col" colspan="3">Jumlah Mahasiswa <br> Aktif</th>
            <th class="align-middle" scope="col" colspan="3" >Jumlah Mahasiswa <br> Asing Penuh <br> Waktu(Full-time)</th>
            <th class="align-middle" scope="col" colspan="3">Jumlah Mahasiswa <br> Asing Paruh <br> Waktu(Part-time)</th>
            @hasanyrole('perwakilan|dekan')
            <th class="align-middle" scope="col" rowspan="2">Action</th>  
            @endhasanyrole
        </tr>
        <tr>
            <th scope="col">TS-2</th>
            <th scope="col">TS-1</th>  
            <th scope="col">TS</th>
            <th scope="col">TS-2</th>
            <th scope="col">TS-1</th>  
            <th scope="col">TS</th> 
            <th scope="col">TS-2</th>
            <th scope="col">TS-1</th>  
            <th scope="col">TS</th>     
        </tr>
    
    </thead>
    @hasanyrole('dekan|perwakilan')
    <tbody class="text-dark">
        @foreach ($mahasiswa_asing['mahasiswa'] as $key => $mhs)
        <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ session()->has('prodi') ? 'S1 '.session('prodi') : 'S1 '.auth()->user()->prodi->name }}</td>   
           <td>{{ $mhs['mahasiswa_aktif_ts2'] }}</td> 
           <td>{{ $mhs['mahasiswa_aktif_ts1'] }}</td> 
           <td>{{ $mhs['mahasiswa_aktif_ts'] }}</td> 
           <td>{{ $mhs['mahasiswa_asing_ft_ts2'] }}</td> 
           <td>{{ $mhs['mahasiswa_asing_ft_ts1'] }}</td> 
           <td>{{ $mhs['mahasiswa_asing_ft_ts'] }}</td>
           <td>{{ $mhs['mahasiswa_asing_pt_ts2'] }}</td>
           <td>{{ $mhs['mahasiswa_asing_pt_ts1'] }}</td>
           <td>{{ $mhs['mahasiswa_asing_pt_ts'] }}</td>
           @hasanyrole('perwakilan|dekan')
           <td class="align-middle">
           <ul class="action-list d-flex justify-content-center mr-1" id="action">
            
            @hasrole('perwakilan')
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalmahasiswaasingedit-{{ $mhs['id'] }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/mahasiswa/mahasiswa-asing/{{ $mhs['id'] }}" data-toggle="modal" data-target="#modalmahasiswaasingdelete-{{ $mhs['id'] }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
            @endhasrole

            @hasrole('dekan')
                <li>
                    <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappasg-{{ $mhs['id'] }}"><i class="fas fa-check-circle"></i></a>
                </li>
                <li>
                    <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakasg-{{ $mhs['id'] }}"><i class="fas fa-times-circle"></i></a>
                </li>
            @endhasrole
           </ul>
           </td>
           @endhasanyrole
            
        </tr>
    @endforeach
     <tr>
         <td class="align-middle text-center" colspan="2"><b>Jumlah</b></td>
         <td>{{ $mahasiswa_asing['aktif_ts2'] }}</td>
         <td>{{ $mahasiswa_asing['aktif_ts1'] }}</td>
         <td>{{ $mahasiswa_asing['aktif_ts'] }}</td>
         <td>{{ $mahasiswa_asing['full_ts2'] }}</td>
         <td>{{ $mahasiswa_asing['full_ts1'] }}</td>
         <td>{{ $mahasiswa_asing['full_ts'] }}</td>
         <td>{{ $mahasiswa_asing['part_ts2'] }}</td>
         <td>{{ $mahasiswa_asing['part_ts1'] }}</td>
         <td>{{ $mahasiswa_asing['part_ts'] }}</td>
         @hasrole('perwakilan')
         <td></td>
         @endhasrole
     </tr>
    </tbody>
@endhasanyrole

@hasrole('asesor')
    <tbody class="text-dark">
        @foreach ($mahasiswa_asing['mahasiswa_asesor'] as $key => $mhs)
        <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ session()->has('prodi') ? 'S1 '.session('prodi') : 'S1 '.auth()->user()->prodi->name }}</td>   
           <td>{{ $mhs['mahasiswa_aktif_ts2'] }}</td> 
           <td>{{ $mhs['mahasiswa_aktif_ts1'] }}</td> 
           <td>{{ $mhs['mahasiswa_aktif_ts'] }}</td> 
           <td>{{ $mhs['mahasiswa_asing_ft_ts2'] }}</td> 
           <td>{{ $mhs['mahasiswa_asing_ft_ts1'] }}</td> 
           <td>{{ $mhs['mahasiswa_asing_ft_ts'] }}</td>
           <td>{{ $mhs['mahasiswa_asing_pt_ts2'] }}</td>
           <td>{{ $mhs['mahasiswa_asing_pt_ts1'] }}</td>
           <td>{{ $mhs['mahasiswa_asing_pt_ts'] }}</td>
        </tr>
    @endforeach
     <tr>
         <td class="align-middle text-center" colspan="2"><b>Jumlah</b></td>
         <td>{{ $mahasiswa_asing['aktif_ts2_asesor'] }}</td>
         <td>{{ $mahasiswa_asing['aktif_ts1_asesor'] }}</td>
         <td>{{ $mahasiswa_asing['aktif_ts_asesor'] }}</td>
         <td>{{ $mahasiswa_asing['full_ts2_asesor'] }}</td>
         <td>{{ $mahasiswa_asing['full_ts1_asesor'] }}</td>
         <td>{{ $mahasiswa_asing['full_ts_asesor'] }}</td>
         <td>{{ $mahasiswa_asing['part_ts2_asesor'] }}</td>
         <td>{{ $mahasiswa_asing['part_ts1_asesor'] }}</td>
         <td>{{ $mahasiswa_asing['part_ts_asesor'] }}</td>
     </tr>
    </tbody>
@endhasrole
    </table> 
</div>
