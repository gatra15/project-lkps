<div id="print-table">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                <th class="align-middle" scope="col" rowspan="2">Judul Artikel yang Disitasi (Jurnal/Buku,Volume, Tahun, Nomor,Halaman)</th>
                <th class="align-middle" scope="col" rowspan="2" >Jumlah Sitasi</th>   
                @hasanyrole('perwakilan|dekan')            
                <th class="align-middle" scope="col" rowspan="2" >Opsi</th>    
                @endhasanyrole            
            </tr>
        </thead>
    @hasanyrole('perwakilan|dekan')

        <tbody class="text-dark">
            @foreach ($karyailmiah['karyailmiah'] as $karil)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $karil->nama_dosen }}</td> 
            <td>{{ $karil->judul }}</td> 
            <td>{{ $karil->jumlah_sitasi }}</td> 
            
            
            <td class="project-actions text-right ms-1 ps-1">
            <ul class="action-list d-flex justify-content-center " id="action">
            @hasrole('perwakilan')
                <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalkaryailmiahedit-{{ $karil->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/kinerja-dosen/karya-ilmiah/{{ $karil->id }}" data-toggle="modal" data-target="#modalkaryailmiahdelete-{{ $karil->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            @endhasrole
            @hasrole('dekan')
                <li>
                    <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappkar-{{ $karil->id }}"><i class="fas fa-check-circle"></i></a>
                </li>
                <li>
                    <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakkar-{{ $karil->id }}"><i class="fas fa-times-circle"></i></a>
                </li>
            @endhasrole
            </ul>
            </td>
            </tr>

        

        @endforeach

        <tr>
            <td colspan="2"><b>Jumlah</b></td>
            <td>{{ $karyailmiah['count'] }}</td>
            <td>{{ $karyailmiah['jumlah'] }}</td>
            <td></td>
        </tr>
        </tbody>
    @endhasanyrole  

    @hasrole('dekan')
        <tbody class="text-dark">
            @foreach ($karyailmiah['karyailmiah_asesor'] as $karil)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $karil->nama_dosen }}</td> 
            <td>{{ $karil->judul }}</td> 
            <td>{{ $karil->jumlah_sitasi }}</td> 

            </tr>

        

        @endforeach

        <tr>
            <td colspan="2"><b>Jumlah</b></td>
            <td>{{ $karyailmiah['count_asesor'] }}</td>
            <td>{{ $karyailmiah['jumlah_asesor'] }}</td>
        </tr>
        </tbody>
    @endhasrole
        </table> 
    </div>