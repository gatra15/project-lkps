<div id="#">
    <table id='form-print' class="table text-center table-bordered table-condensed">
    <thead>
    <tr>
    <th class="align-middle" scope="col" rowspan="2">No</th>
    <th class="align-middle" scope="col" rowspan="2">Media Publikasi</th>
    <th class="align-middle" scope="col" colspan="3">Jumlah Judul</th>
    <th class="align-middle" scope="col" rowspan="2">Jumlah</th>
    <th class="align-middle" scope="col" rowspan="2">Opsi</th>
    </tr>
    <tr>
    <th  scope="col">TS-2</th>
    <th  scope="col">TS-1</th>
    <th  scope="col">TS</th>
    </tr>
    
    </thead>
    
    <tbody class="text-dark">
    <tr>
        {{-- @foreach ($prestasi['prestasi'] as $prest)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $prest->nama_kegiatan }}</td>
                    <td>{{ $prest->tahun_perolehan }}</td>
                    <td>{{ $prest->tingkat == 'Lokal/Wilayah' ? 'V' : '' }}</td>
                    <td>{{ $prest->tingkat == 'Nasional' ? 'V' : '' }}</td>
                    <td>{{ $prest->tingkat == 'Internasional' ? 'V' : '' }}</td>
                    <td>{{ $prest->type_prestasi }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalluaranprestasiedit-{{ $prest->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/prestasi-mahasiswa/{{ $prest->id }}" data-toggle="modal" data-target="#modalluaranprestasidelete-{{ $prest->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                </tr>
            @endforeach --}}
    </tr>
    {{-- <td>{{ $prestasi['wilayah'] }}</td>
    <td>{{ $prestasi['nasional'] }}</td>
    <td>{{ $prestasi['internasional'] }}</td> --}}
    <tr>
        <td class="text-center align-middle" colspan="2"><b>Jumlah</b></td> 
        <td>jumlah ts-2</td>
        <td>jumlah ts-1</td>
        <td>jumlah ts</td>
        <td>jumlah total</td>
    </tr>
    </table> 
    </div>