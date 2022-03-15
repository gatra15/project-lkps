<div id="print-table5">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>

                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Sumber Pembiayaan</th>
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

        <tbody class="text-dark">
            @foreach ($pkms['pkm'] as $pkm)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>@php
                   echo $pkm->sumber_detail->sumberdaya
                @endphp</td> 
                <td>{{ $pkm->jumlah_ts2 }}</td> 
                <td>{{ $pkm->jumlah_ts1 }}</td> 
                <td>{{ $pkm->jumlah_ts }}</td> 
                <td>{{ $pkm->jumlah }}</td> 
                @hasrole('perwakilan')
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenpkmedit-{{ $pkm->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/pkm-dtps/{{ $pkm->id }}" data-toggle="modal" data-target="#modaldosenpkmdelete-{{ $pkm->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>

                @endforeach
            
                {{-- <tr>
                    <td colspan="2" class="text-center"> <b>Total</b> </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr> --}}
        
                <tr>
                    <td colspan="2" class="text-center"><b>Jumlah</b></td>
                    <td>{{ $pkms['jumlah_ts2'] }}</td>
                    <td>{{ $pkms['jumlah_ts1'] }}</td>
                    <td>{{ $pkms['jumlah_ts'] }}</td>
                    <td>{{ $pkms['jumlah'] }}</td>
                    <td></td>
                </tr>
            {{-- @endforeach --}}

            
    </table> 
</div>