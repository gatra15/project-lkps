<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                <th class="align-middle" scope="col" rowspan="2">Tema Penelitian Sesuai Roadmap</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Mahasiswa</th>
                <th class="align-middle" scope="col" rowspan="2">Judul Kegiatan <sup>1)</sup></th>
                <th class="align-middle" scope="col" rowspan="2">Tahun</th>
                <th class="align-middle" scope="col" rowspan="2">Opsi</th>

            </tr>
    
        </thead>

        <tbody class="text-dark">

            @foreach ($penelitian as $penelitian)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penelitian->nama_dosen }}</td>
                    <td>{{ $penelitian->tema }}</td>
                    <td>{{ $penelitian->nama_mahasiswa }}</td>
                    <td>{{ $penelitian->judul }}</td>
                    <td>{{ $penelitian->tahun }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpenelitiandtpsedit-{{ $penelitian->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/penelitian/{{ $penelitian->id }}" data-toggle="modal" data-target="#modalpenelitiandtpsdelete-{{ $penelitian->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                </tr>
            @endforeach

            <tr>
                <td colspan="5" class="text-center"> <b>Jumlah</b>  </td>
            </tr>
            
            
    </table> 
</div>