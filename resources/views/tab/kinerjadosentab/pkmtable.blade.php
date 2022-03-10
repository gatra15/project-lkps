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
            @foreach ($pkm as $pkms)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>@php
                   echo $pkms->sumber_detail->sumberdaya
                @endphp</td> 
                <td>{{ $pkms->jumlah_ts2 }}</td> 
                <td>{{ $pkms->jumlah_ts1 }}</td> 
                <td>{{ $pkms->jumlah_ts }}</td> 
                <td>{{ $pkms->jumlah }}</td> 
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenpkmedit-{{ $pkms->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/pkm-dtps/{{ $pkms->id }}" data-toggle="modal" data-target="#modaldosenpkmdelete-{{ $pkms->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                </tr>

                @endforeach
        
            
            {{-- @endforeach --}}

            
    </table> 
</div>