<div id="print-table2">
    <table id='form-print' class="table text-center table-bordered">
    <thead>
        <tr>
            <th class="align-middle" scope="col" rowspan="2">No</th>
            <th class="align-middle" scope="col" rowspan="2">Program Studi</th>
            <th class="align-middle" scope="col" colspan="3">Jumlah Mahasiswa <br> Aktif</th>
            <th class="align-middle" scope="col" colspan="3" >Jumlah Mahasiswa <br> Asing Penuh <br> Waktu(Full-time)</th>
            <th class="align-middle" scope="col" colspan="3">Jumlah Mahasiswa <br> Asing Paruh <br> Waktu(Part-time)</th>  
            <th class="align-middle" scope="col" rowspan="2">Opsi</th>
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
    
    <tbody class="text-dark">
        @foreach ($mahasiswa_asing['mahasiswa'] as $mhs)
        <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ $mhs->program_studi }}</td> 
           <td>{{ $mhs->mahasiswa_aktif_ts_2 }}</td> 
           <td>{{ $mhs->mahasiswa_aktif_ts_1 }}</td> 
           <td>{{ $mhs->mahasiswa_aktif_ts }}</td> 
           <td>{{ $mhs->mahasiswa_asing_ft_ts_2 }}</td> 
           <td>{{ $mhs->mahasiswa_asing_ft_ts_1 }}</td> 
           <td>{{ $mhs->mahasiswa_asing_ft_ts }}</td>
           <td>{{ $mhs->mahasiswa_asing_pt_ts_2 }}</td>
           <td>{{ $mhs->mahasiswa_asing_pt_ts_1 }}</td>
           <td>{{ $mhs->mahasiswa_asing_pt_ts }}</td>
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalmahasiswaasingedit-{{ $mhs->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/mahasiswa/mahasiswa-asing/{{ $mhs->id }}" data-toggle="modal" data-target="#modalmahasiswaasingdelete-{{ $mhs->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
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
         <td></td>
     </tr>
    </tbody>
    </table> 
</div>