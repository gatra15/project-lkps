<div id="print-table">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        


            <thead>
            
                <tr>
                    <th class="align-middle" scope="col" rowspan="2">No</th>
                    <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                    <th class="align-middle" scope="col" rowspan="2">Tema Penelitian Sesuai Roadmap</th>
                    <th class="align-middle" scope="col" rowspan="2">Nama Mahasiswa</th>
                    <th class="align-middle" scope="col" rowspan="2">Judul Kegiatan <sup>1)</sup></th>
                    <th class="align-middle" scope="col" rowspan="2">Tahun</th>
                    @hasanyrole('perwakilan|dekan')            
                    <th class="align-middle" scope="col" rowspan="2">Opsi</th>
                    @endhasanyrole 
                </tr>
        
            </thead>
        @hasanyrole('perwakilan|dekan')
            <tbody>
                @foreach ($penelitian as $penelitian)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $penelitian->nama_dosen }}</td>
                        <td>{{ $penelitian->tema }}</td>
                        <td>{{ $penelitian->nama_mahasiswa }}</td>
                        <td>{{ $penelitian->judul }}</td>
                        <td>{{ $penelitian->tahun }}</td>
                        
                        
                        <td class="project-actions text-right ms-1 ps-1">
                        <ul class="action-list d-flex justify-content-center " id="action">
                            @hasrole ('perwakilan')
                            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                                <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpenelitiandtpsedit-{{ $penelitian->id }}"><i class="fas fa-edit"></i></a></li>
                                <li>
                                    <a type="button" class="btn btn-danger" href="/penelitian/{{ $penelitian->id }}" data-toggle="modal" data-target="#modalpenelitiandtpsdelete-{{ $penelitian->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                            </ul></td>
                            @endhasrole
                            @hasrole('dekan')
                                <li>
                                    <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalapppenelitian-{{ $penelitian->id }}"><i class="fas fa-check-circle"></i></a>
                                </li>
                                <li>
                                    <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakpenelitian-{{ $penelitian->id }}"><i class="fas fa-times-circle"></i></a>
                                </li>
                            @endhasrole
                        </ul>
                        </td>
            
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="text-center"> <b>Jumlah</b>  </td>
                    <td>{{ $jumlah_judul }}</td>
                    <td colspan="3"></td>
                </tr>
          
            </tbody>
        @endhasanyrole
        
            @hasrole('asesor')                
                <tbody>
            
                @foreach ($penelitian_asesor as $penelitian)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penelitian->nama_dosen }}</td>
                    <td>{{ $penelitian->tema }}</td>
                    <td>{{ $penelitian->nama_mahasiswa }}</td>
                    <td>{{ $penelitian->judul }}</td>
                    <td>{{ $penelitian->tahun }}</td>
                        
                </tr>
                @endforeach
        
                <tr>
                    <td colspan="4" class="text-center"> <b>Jumlah</b>  </td>
                    <td>{{ $jumlah_judul }}</td>
                    <td colspan="2"></td>
                </tr>
                </tbody>
            @endhasrole
            
    </table> 
</div>
