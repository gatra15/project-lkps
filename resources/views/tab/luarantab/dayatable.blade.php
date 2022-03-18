<div id="print-table3">
    <table id='form-print' class="table text-center table-bordered table-condensed">
    <thead>
    <tr>
        <th class="align-middle text-center" scope="col" rowspan="2">Tahun <br> Lulus</th>
        <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan</th>
        <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> yang <br> Terlacak </th>
        <th class="align-middle text-center" scope="col" colspan="3">Jumlah Lulusan Terlacak <br> dengan Waktu Tunggu <br> Mendapatkan Pekerjaan </th>
        @hasrole ('perwakilan')
        <th class="align-middle text-center" scope="col" rowspan="2"> Opsi </th>
        @endhasrole
    </tr>

    <tr>
        <th class="align-middle text-center" scope="col">WT < 6 <br> bulan </th>
        <th class="align-middle text-center" scope="col">6  ≤ WT  ≤ <br> 18 bulan </th>
        <th class="align-middle text-center" scope="col">WT > 18 <br> bulan </th>
    </tr>
    
    </thead>
    
    <tbody class="text-dark">
        @foreach($dayasaing['waktu'] as $key => $data)
        <tr>
            <td>{{ $key == sizeof($dayasaing['waktu'])-1 ? 'TS-2' : 'TS-'.(sizeof($dayasaing['waktu'])+1-$key) }}</td>
            <td>{{ $data->jumlah_lulusan }}</td>
            <td>{{ $data->jumlah_lulusan_terlacak }}</td>
            <td>{{ $data->waktu_tunggu_6}}</td>
            <td>{{ $data->waktu_tunggu_6_18 }}</td>
            <td>{{ $data->waktu_tunggu_18 }}</td>
            @hasrole ('perwakilan')
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldayaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/{{ $data->id }}" data-toggle="modal" data-target="#modaldayadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
            @endhasrole
        </tr>
        @endforeach
    </table> 
    </div>