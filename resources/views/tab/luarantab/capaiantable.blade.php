
<div id="print-table2">
    <table id='form-print' class="table text-center table-bordered table-condensed">

    @hasanyrole('perwakilan|dekan')
            <thead>
            
                <tr>
                    <th class="align-middle" scope="col" rowspan="2">Tahun Lulus</th>
                    <th class="align-middle" scope="col" rowspan="2">Jumlah Lulusan</th>
                    <th scope="col" colspan="3">Indeks Prestasi Kumulatif (IPK)</th>
                    <th class="align-middle" scope="col" rowspan="2">Opsi</th>
                </tr>

                <tr>
                    <th scope="col">Min.</th>
                    <th scope="col">Rata-rata</th>
                    <th scope="col">Maks.</th>
                </tr>
        
            </thead>
            
            <tbody>
                @foreach ($capaianPembelajaran['capaian'] as $key => $capaian)
                    <tr>
                        <td>{{ $key == sizeof($capaianPembelajaran['capaian'])-1 ? 'TS' : 'TS-'.(sizeof($capaianPembelajaran['capaian'])-1-$key) }}</td>
                        <td>{{ $capaian->jumlah_lulusan }}</td>
                        <td>{{ $capaian->ipk_min }}</td>
                        <td>{{ $capaian->ipk_avg }}</td>
                        <td>{{ $capaian->ipk_max }}</td>
                        
                        
                        <td class="project-actions text-right ms-1 ps-1">
                        <ul class="action-list d-flex justify-content-center " id="action">
                            @hasrole ('perwakilan')
                                <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalcapaianedit-{{ $capaian->id }}"><i class="fas fa-edit"></i></a></li>
                                <li>
                                    <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/{{ $capaian->id }}" data-toggle="modal" data-target="#modalcapaiandelete-{{ $capaian->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                            @endhasrole
                            @hasrole('dekan')
                                <li>
                                    <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappcap-{{ $capaian->id }}"><i class="fas fa-check-circle"></i></a>
                                </li>
                                <li>
                                    <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakcap-{{ $capaian->id }}"><i class="fas fa-times-circle"></i></a>
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
                    <th class="align-middle" scope="col" rowspan="2">Tahun Lulus</th>
                    <th class="align-middle" scope="col" rowspan="2">Jumlah Lulusan</th>
                    <th scope="col" colspan="3">Indeks Prestasi Kumulatif (IPK)</th>
                </tr>

                <tr>
                    <th scope="col">Min.</th>
                    <th scope="col">Rata-rata</th>
                    <th scope="col">Maks.</th>
                </tr>
                
                </thead>
                
                <tbody>
            
                @foreach ($capaianPembelajaran['capaian'] as $key => $capaian)
                <tr>
                    <td>{{ $key == sizeof($capaianPembelajaran['capaian'])-1 ? 'TS' : 'TS-'.(sizeof($capaianPembelajaran['capaian'])-1-$key) }}</td>
                    <td>{{ $capaian->jumlah_lulusan }}</td>
                    <td>{{ $capaian->ipk_min }}</td>
                    <td>{{ $capaian->ipk_avg }}</td>
                    <td>{{ $capaian->ipk_max }}</td>
                        
                </tr>
                @endforeach
                </tbody>
            @endhasrole
    </table> 
    </div>