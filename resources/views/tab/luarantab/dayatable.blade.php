<div id="print-table3">
    <table id='form-print' class="table text-center table-bordered table-condensed">

    @hasanyrole('perwakilan|dekan')
        <thead>
        
            <tr>
                <th class="align-middle text-center" scope="col" rowspan="2">Tahun <br> Lulus</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> yang <br> Terlacak </th>
                <th class="align-middle text-center" scope="col" colspan="3">Jumlah Lulusan Terlacak <br> dengan Waktu Tunggu <br> Mendapatkan Pekerjaan </th>
                <th class="align-middle" scope="col" rowspan="2">Opsi</th>
            </tr>

            <tr>
                <th class="align-middle text-center" scope="col">WT < 6 <br> bulan </th>
                <th class="align-middle text-center" scope="col">6  ≤ WT  ≤ <br> 18 bulan </th>
                <th class="align-middle text-center" scope="col">WT > 18 <br> bulan </th>
            </tr>
    
        </thead>
        
        <tbody>
            @foreach($dayasaing['waktu'] as $key => $data)
                <tr>
                    <td>{{ $key == sizeof($dayasaing['waktu'])-1 ? 'TS-2' : 'TS-'.(sizeof($dayasaing['waktu'])+1-$key) }}</td>
                    <td>{{ $data->jumlah_lulusan }}</td>
                    <td>{{ $data->jumlah_lulusan_terlacak }}</td>
                    <td>{{ $data->waktu_tunggu_6}}</td>
                    <td>{{ $data->waktu_tunggu_6_18 }}</td>
                    <td>{{ $data->waktu_tunggu_18 }}</td>
                    
                    
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole ('perwakilan')
                            <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldayaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                            <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/{{ $data->id }}" data-toggle="modal" data-target="#modaldayadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappdaya-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakdaya-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                    </ul>
                    </td>
        
                </tr>
            @endforeach  
        </tbody>
        @endhasanyrole
    
        @hasrole('asesor')
        <thead>
        
            <tr>
                <th class="align-middle text-center" scope="col" rowspan="2">Tahun <br> Lulus</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> yang <br> Terlacak </th>
                <th class="align-middle text-center" scope="col" colspan="3">Jumlah Lulusan Terlacak <br> dengan Waktu Tunggu <br> Mendapatkan Pekerjaan </th>
            </tr>

            <tr>
                <th class="align-middle text-center" scope="col">WT < 6 <br> bulan </th>
                <th class="align-middle text-center" scope="col">6  ≤ WT  ≤ <br> 18 bulan </th>
                <th class="align-middle text-center" scope="col">WT > 18 <br> bulan </th>
            </tr>
            
            </thead>
            
            <tbody>
        
            @foreach($dayasaing['waktu'] as $key => $data)
            <tr>
                <td>{{ $key == sizeof($dayasaing['waktu'])-1 ? 'TS-2' : 'TS-'.(sizeof($dayasaing['waktu'])+1-$key) }}</td>
                <td>{{ $data->jumlah_lulusan }}</td>
                <td>{{ $data->jumlah_lulusan_terlacak }}</td>
                <td>{{ $data->waktu_tunggu_6}}</td>
                <td>{{ $data->waktu_tunggu_6_18 }}</td>
                <td>{{ $data->waktu_tunggu_18 }}</td>
                    
            </tr>
            @endforeach
            </tbody>
        @endhasrole
    </table> 
    </div>