<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
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
    
    <tbody class="text-dark">
        @foreach ($kepuasanPengguna['kepuasan'] as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->kemampuan->text }}</td>
            <td>{{ $data->sangat_baik }}</td>
            <td>{{ $data->baik }}</td>
            <td>{{ $data->cukup}}</td>
            <td>{{ $data->kurang }}</td>
            <td>{{ $data->rencana_tindak_lanjut }}</td>
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaldayaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/{{ $data->id }}" data-toggle="modal" data-target="#modaldayadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
        </tr>
        @endforeach

    </table> 
    </div>