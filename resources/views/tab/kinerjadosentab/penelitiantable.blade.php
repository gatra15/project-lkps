<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>

                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Sumber Pembiayaan</th>
                <th scope="col" colspan="3">Jumlah Judul</th>
                <th class="align-middle" scope="col" rowspan="2" >Jumlah</th>                    
                <th class="align-middle" scope="col" rowspan="2" >Opsi</th>                    
            
            
            </tr>
            <tr>
                <th scope="col">TS-2</th>
                <th scope="col">TS-1</th>
                <th scope="col">TS</th>
            </tr>
    
        </thead>

        <tbody class="text-dark">
            
            @foreach ($penelitians as $penelitian)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>@php
                   echo $penelitian->sumber->sumberdaya
                @endphp</td> 
                <td>{{ $penelitian->jumlah_ts2 }}</td> 
                <td>{{ $penelitian->jumlah_ts1 }}</td> 
                <td>{{ $penelitian->jumlah_ts }}</td> 
                <td>{{ $penelitian->jumlah }}</td> 
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenpenelitianedit-{{ $penelitian->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $penelitian->id }}" data-toggle="modal" data-target="#modalpenelitiandelete-{{ $penelitian->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                </tr>

                @endforeach

            <tr>
                <td colspan="2" class="text-center"><b>Jumlah</b></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            
    </table> 
</div>