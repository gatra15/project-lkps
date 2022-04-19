<div id="print-table5">
    <table id='form-print' class="table text-center table-bordered table-condensed ">
    @hasanyrole('perwakilan|dekan')
        <thead>
        
            <tr>
                <th class="align-middle text-center" scope="col" rowspan="2">No</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Jenis Kemampuan</th>
                <th class="align-middle text-center" scope="col" colspan="4">Tingkat Kepuasan Pengguna (%)</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Rencana Tindak <br> Lanjut oleh UPPS/PS</th>
                <th class="align-middle" scope="col" rowspan="2">Opsi</th>
            </tr>

            <tr>
                <th class="align-middle text-center" scope="col">Sangat Baik</th>
                <th class="align-middle text-center" scope="col">Baik</th>
                <th class="align-middle text-center" scope="col">Cukup</th>
                <th class="align-middle text-center" scope="col">Kurang</th>
            </tr>
    
        </thead>
 
        <tbody>
            @foreach ($kepuasanPengguna['kepuasan'] as $data)
            <tr>
                {{-- {{ $data }} --}}
                <td>{{ $loop->iteration }}</td>
                <td>@php echo  $data->kemampuan->text @endphp</td>
                <td>{{ $data->sangat_baik }}</td>
                <td>{{ $data->baik }}</td>
                <td>{{ $data->cukup}}</td>
                <td>{{ $data->kurang }}</td>
                <td>{{ $data->rencana_tindak_lanjut }}</td>
                    
                    
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole ('perwakilan')
                            <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkepuasanedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                            <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/{{ $data->id }}" data-toggle="modal" data-target="#modalkepuasandelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalapppuas-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakpuas-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                    </ul>
                    </td>
        
                </tr>
            @endforeach  

            <tr>
                <td class="align-middle text-center" colspan="2"><b>Jumlah</b></td>
                <td>{{ $kepuasanPengguna['sangat_baik'] }}</td>
                <td>{{ $kepuasanPengguna['baik'] }}</td>
                <td>{{ $kepuasanPengguna['cukup'] }}</td>
                <td>{{ $kepuasanPengguna['kurang'] }}</td>
                <td colspan="2" style="background-color: grey"></td>
            </tr>

        </tbody>
    @endhasanyrole
    
    @hasrole('asesor')     
        <thead>
            
            <tr>
                <th class="align-middle text-center" scope="col" rowspan="2">No</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Jenis Kemampuan</th>
                <th class="align-middle text-center" scope="col" colspan="4">Tingkat Kepuasan Pengguna (%)</th>
                <th class="align-middle text-center" scope="col" rowspan="2">Rencana Tindak <br> Lanjut oleh UPPS/PS</th>
            </tr>

            <tr>
                <th class="align-middle text-center" scope="col">Sangat Baik</th>
                <th class="align-middle text-center" scope="col">Baik</th>
                <th class="align-middle text-center" scope="col">Cukup</th>
                <th class="align-middle text-center" scope="col">Kurang</th>
            </tr>

        </thead>   
        <tbody>
            @foreach ($kepuasanPengguna['kepuasan_asesor'] as $data)
            <tr>
                {{-- {{ $data }} --}}
                <td>{{ $loop->iteration }}</td>
                <td>@php echo  $data->kemampuan->text @endphp</td>
                <td>{{ $data->sangat_baik }}</td>
                <td>{{ $data->baik }}</td>
                <td>{{ $data->cukup}}</td>
                <td>{{ $data->kurang }}</td>
                <td>{{ $data->rencana_tindak_lanjut }}</td>
        
                </tr>
            @endforeach  

            <tr>
                <td class="align-middle text-center" colspan="2"><b>Jumlah</b></td>
                <td>{{ $kepuasanPengguna['sangat_baik_asesor'] }}</td>
                <td>{{ $kepuasanPengguna['baik_asesor'] }}</td>
                <td>{{ $kepuasanPengguna['cukup_asesor'] }}</td>
                <td>{{ $kepuasanPengguna['kurang_asesor'] }}</td>
                <td colspan="1" style="background-color: grey"></td>
            </tr>
            
        </tbody>
    @endhasrole
    </table> 
    </div>