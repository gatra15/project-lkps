<div id="print-table6">
    <table id='form-print' class="table table-inverse text-center table-bordered table-condensed">
        <thead>
            <tr>

                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Jenis</th>
                <th scope="col" colspan="3">Jumlah Judul</th>
                <th class="align-middle" scope="col" rowspan="2" >Jumlah</th>   
                @hasrole('perwakilan')                 
                <th class="align-middle" scope="col" rowspan="2" >Opsi</th>     
                @endhasrole               
            </tr>
            <tr>
                <th scope="col">TS-2</th>
                <th scope="col">TS-1</th>
                <th scope="col">TS</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($publikasi['publikasi'] as $publikasis)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>@php
                   echo $publikasis->media->media
                @endphp</td> 
                <td>{{ $publikasis->jumlah_ts2 }}</td> 
                <td>{{ $publikasis->jumlah_ts1 }}</td> 
                <td>{{ $publikasis->jumlah_ts }}</td> 
                <td>{{ $publikasis->jumlah }}</td> 
                @hasrole('perwakilan')
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $publikasis->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/publikasi-dtps/{{ $publikasis->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $publikasis->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
            @endforeach
        
        <tr>
            <td colspan="2" class="text-center"><b>Total</b></td>
            <td>{{ $publikasi['jumlah_ts2'] }}</td>
            <td>{{ $publikasi['jumlah_ts1'] }}</td>
            <td>{{ $publikasi['jumlah_ts'] }}</td>
            <td>{{ $publikasi['jumlah'] }}</td>
            <td></td>
        </tr>

    </tbody>
    </table> 
</div>