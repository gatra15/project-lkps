<div id="print-table6">
    <table id='form-print' class="table text-center table-bordered table-condensed">

@hasanyrole('perwakilan|dekan')
    <thead>
    
        <tr>
            <th class="align-middle text-center" scope="col" rowspan="2">Tahun Lulus</th>
            <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan </th>
            <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> yang <br> Terlacak</th>
            <th class="align-middle text-center" scope="col" colspan="3">Jumlah Lulusan Terlacak dengan <br>
            Tingkat Kesesuaian Bidang Kerja</th>
            <th class="align-middle" scope="col" rowspan="2">Opsi</th>
        </tr>

        <tr>
            <th scope="col">Rendah <sup>1)</sup></th>
            <th scope="col">Sedang <sup>2)</sup></th>
            <th scope="col">Tinggi <sup>3)</sup></th>
        </tr>

    </thead>

    <tbody>
        @foreach($kesesuaianBidang['bidang'] as $key => $kesesuaian)
        <tr>
            <td>{{ $key == sizeof($kesesuaianBidang['bidang'])-1 ? 'TS-2' : 'TS-'.(sizeof($kesesuaianBidang['bidang'])+1-$key) }}</td>
            <td>{{ $kesesuaian->jumlah_lulusan }}</td>
            <td>{{ $kesesuaian->jumlah_lulusan_terlacak }}</td>
            <td>{{ $kesesuaian->kesesuaian_rendah}}</td>
            <td>{{ $kesesuaian->kesesuaian_sedang }}</td>
            <td>{{ $kesesuaian->kesesuaian_tinggi }}</td>
                
                
                <td class="project-actions text-right ms-1 ps-1">
                <ul class="action-list d-flex justify-content-center " id="action">
                    @hasrole ('perwakilan')
                        <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkesesuaianedit-{{ $kesesuaian->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                        <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/kesesuaian-bidang/{{ $kesesuaian->id }}" data-toggle="modal" data-target="#modalkesesuaiandelete-{{ $kesesuaian->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    @endhasrole
                    @hasrole('dekan')
                        <li>
                            <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsesuai-{{ $kesesuaian->id }}"><i class="fas fa-check-circle"></i></a>
                        </li>
                        <li>
                            <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksesuai-{{ $kesesuaian->id }}"><i class="fas fa-times-circle"></i></a>
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
            <th class="align-middle text-center" scope="col" rowspan="2">Tahun Lulus</th>
            <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan </th>
            <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> yang <br> Terlacak</th>
            <th class="align-middle text-center" scope="col" colspan="3">Jumlah Lulusan Terlacak dengan <br>
            Tingkat Kesesuaian Bidang Kerja</th>
        </tr>

        <tr>
            <th scope="col">Rendah <sup>1)</sup></th>
            <th scope="col">Sedang <sup>2)</sup></th>
            <th scope="col">Tinggi <sup>3)</sup></th>
        </tr>

    </thead>
    <tbody>
        @foreach($kesesuaianBidang['bidang_asesor'] as $key => $kesesuaian)
        <tr>
            <td>{{ $key == sizeof($kesesuaianBidang['bidang_asesor'])-1 ? 'TS-2' : 'TS-'.(sizeof($kesesuaianBidang['bidang_asesor'])+1-$key) }}</td>
            <td>{{ $kesesuaian->jumlah_lulusan }}</td>
            <td>{{ $kesesuaian->jumlah_lulusan_terlacak }}</td>
            <td>{{ $kesesuaian->kesesuaian_rendah}}</td>
            <td>{{ $kesesuaian->kesesuaian_sedang }}</td>
            <td>{{ $kesesuaian->kesesuaian_tinggi }}</td>
    
            </tr>
        @endforeach  

    </tbody>
@endhasrole
</table> 
</div>