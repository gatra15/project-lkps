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
        {{-- foreachnya diganti $publikasi['data'] as $data isinya sesuaikan --}}
        @foreach ($publikasi['data'] as $data)
                <tr>
                    
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->media->media }}</td>
                    <td>{{ $data->jumlah_ts2 }}</td>
                    <td>{{ $data->jumlah_ts1 }}</td>
                    <td>{{ $data->jumlah_ts }}</td>
                    <td>{{ $data->jumlah }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/prestasi-mahasiswa/{{ $data->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                </tr>
            @endforeach
    </tr>
    {{-- <td>{{ $prestasi['wilayah'] }}</td>
    <td>{{ $prestasi['nasional'] }}</td>
    <td>{{ $prestasi['internasional'] }}</td> --}}
    <tr>
        <td class="text-center align-middle" colspan="2"><b>Jumlah</b></td> 
        {{-- jumlah dikasi $publikasi['jumlah_ts2'] berikutnya menyesuaikan untuk yang jumlah total pakenya $publikasi['jumlah']--}}
        <td>{{ $publikasi['jumlah_ts2'] }}</td>
        <td>{{ $publikasi['jumlah_ts1'] }}</td>
        <td>{{ $publikasi['jumlah_ts'] }}</td>
        <td>{{ $publikasi['jumlah'] }}</td>
    </tr>
    </table> 
    </div>