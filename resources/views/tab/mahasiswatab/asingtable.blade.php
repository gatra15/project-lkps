<div id="printElement">
    <table id='form-print' class="table text-center table-bordered">
    <thead>
        <tr>
            <th class="align-middle" scope="col" rowspan="2">No</th>
            <th class="align-middle" scope="col" rowspan="2">Program Studi</th>
            <th scope="col" colspan="3">Jumlah Mahasiswa Aktif</th>
            <th scope="col" colspan="3" >Jumlah Mahasiswa Asing Penuh Waktu(Full-time)</th>
            <th scope="col" colspan="3">Jumlah Mahasiswa Asing Paruh Waktu(Part-time)</th>  
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
        @foreach ($mahasiswa_asing as $mhs)
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
    </table> 
</div>