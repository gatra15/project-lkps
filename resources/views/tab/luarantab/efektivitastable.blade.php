<div id="print-table4">
    <table id='form-print' class="table table-bordered table-condensed">

        @hasanyrole('perwakilan|dekan')
        <thead>
        
            <tr>
                <th class="align-middle text-center" scope="col" rowspan="2">Tahun <br> Masuk</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Mahasiswa <br> Diterima <sup>1)</sup></th>
                <th class="align-middle text-center" scope="col" colspan="7">Jumlah Mahasiswa yang Lulus pada</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> s.d. <br> Akhir TS</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Rata- <br> rata <br> Masa <br> Studi</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Opsi</th>
            </tr>
            
            <tr>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-6 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-5 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-4 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-3 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-2 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-1 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS </th>
            </tr>
    
        </thead>
        
        <tbody>
            @foreach ($efektifitasPrestasi['data'] as $key => $ts)
            <tr>
                <td>{{ $key == sizeof($efektifitasPrestasi['data'])-1 ? 'TS-3' : 'TS-'.(sizeof($efektifitasPrestasi['data'])+2-$key) }}</td>
                <td>{{ $ts->jumlah_mahasiswa }}</td>
                <td ></td>
                <td ></td>
                <td ></td>
                <td>{{ $ts->ts3 }}</td>
                <td>{{ $ts->ts2 }}</td>
                <td>{{ $ts->ts1 }}</td>
                <td>{{ $ts->ts }}</td>
                <td>{{ $ts->jumlah }}</td>
                <td>{{ $ts->average }}</td>
                    
                    
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole ('perwakilan')
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalefekedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                            <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/efektifitas/{{ $ts->id }}" data-toggle="modal" data-target="#modalefekdelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappefek-{{ $ts->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakefek-{{ $ts->id }}"><i class="fas fa-times-circle"></i></a>
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
                <th class="align-middle text-center" scope="col" rowspan="2">Tahun <br> Masuk</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Mahasiswa <br> Diterima <sup>1)</sup></th>
                <th class="align-middle text-center" scope="col" colspan="7">Jumlah Mahasiswa yang Lulus pada</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> s.d. <br> Akhir TS</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Rata- <br> rata <br> Masa <br> Studi</th>
            </tr>

            <tr>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-6 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-5 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-4 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-3 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-2 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS-1 </th>
                <th class="align-middle text-center" scope="col" >Akhir <br> TS </th>
            </tr>
            
            </thead>
            
            <tbody>
        
            @foreach ($efektifitasPrestasi['data'] as $key => $ts)
            <tr>
                <td>{{ $key == sizeof($efektifitasPrestasi['data'])-1 ? 'TS-3' : 'TS-'.(sizeof($efektifitasPrestasi['data'])+2-$key) }}</td>
                <td>{{ $ts->jumlah_mahasiswa }}</td>
                <td ></td>
                <td ></td>
                <td ></td>
                <td>{{ $ts->ts3 }}</td>
                <td>{{ $ts->ts2 }}</td>
                <td>{{ $ts->ts1 }}</td>
                <td>{{ $ts->ts }}</td>
                <td>{{ $ts->jumlah }}</td>
                <td>{{ $ts->average }}</td>
                    
            </tr>
            @endforeach
            </tbody>
        @endhasrole
    </table> 
    </div>