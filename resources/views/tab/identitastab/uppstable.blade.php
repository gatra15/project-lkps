<div id="printElement">
    <table id='form-print' class="table align-middle text-center table-bordered">
    <thead>
        <tr>
            <th class="align-middle" scope="col" rowspan="2" width="1%">No</th>
            <th class="align-middle" scope="col" rowspan="2" width="10%">Jenis <br> Program</th>
            <th class="align-middle" scope="col" rowspan="2" width="10%">Nama <br> Program Studi</th>
            <th class="align-middle" scope="col" colspan="3" width="10%">Akreditasi Program Studi</th>
            <th class="align-middle" scope="col" rowspan="2" width="3%">Jumlah <br> Mahasiswa <br> saat TS <sup>4)</sup> </th> 
            <th class="align-middle" scope="col" rowspan="2" width="3%"> Opsi </th> 
        </tr>
        <tr>
            <th scope="col">Status/ <br> Peringkat </th>
            <th scope="col">No. dan <br> Tgl. SK</th>  
            <th scope="col">Tgl. <br> Kadaluarsa</th>  
        </tr>
    
    </thead>
    
    <tbody class="text-dark">
        {{-- CONTENT TABLE  --}}
        @foreach ($upps['data'] as $upps)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $upps->jenis_program }}</td>
                <td>{{ $upps->program_studi }}</td>
                <td>{{ $upps->status_peringkat }}</td>
                <td>{{ $upps->no_sk }}</td>
                <td>{{ $upps->tanggal_kadaluarsa }}</td>
                <td>{{ $upps->jumlah_mahasiswa }}</td>
                @hasrole('perwakilan')
                <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaledit-{{ $upps->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaldelete-{{ $upps->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul>
                    </td>
                    @endhasrole
                    
            </tr>
        @endforeach
    </tbody>
    </table> 
</div>