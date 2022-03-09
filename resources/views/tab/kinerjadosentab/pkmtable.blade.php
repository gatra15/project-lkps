<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>

                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Sumber Pembiayaan</th>
                <th scope="col" colspan="3">Jumlah Judul</th>
                <th class="align-middle" scope="col" rowspan="2" >Jumlah</th>                    
            </tr>
            <tr>
                <th scope="col">TS-2</th>
                <th scope="col">TS-1</th>
                <th scope="col">TS</th>
            </tr>
    
        </thead>

        <tbody class="text-dark">
            @foreach ($sumberdaya as $sd)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>@php echo $sd->sumberdaya @endphp </td>
                @foreach ($pkm as $pkm)
                    <td>{{ $pkm->jumlah_ts2 }}</td>
                    <td>{{ $pkm->jumlah_ts1 }}</td>
                    <td>{{ $pkm->jumlah_ts }}</td>
                    <td>{{ $pkm->jumlah }}</td>
                @endforeach
            </tr>
            @endforeach
        
            
            {{-- @endforeach --}}

            
    </table> 
</div>