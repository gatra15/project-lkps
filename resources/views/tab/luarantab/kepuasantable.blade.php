<div id="print-table5">
    <table id='form-print' class="table text-center table-bordered table-condensed">
    <thead>
    <tr>
    <th class="align-middle text-center" scope="col" rowspan="2">No</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Jenis Kemampuan</th>
    <th class="align-middle text-center" scope="col" colspan="4">Tingkat Kepuasan Pengguna (%)</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Rencana Tindak <br> Lanjut oleh UPPS/PS</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Opsi</th>
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
            <td>@php
                echo  $data->kemampuan->text
            @endphp</td>
            <td>{{ $data->sangat_baik }}</td>
            <td>{{ $data->baik }}</td>
            <td>{{ $data->cukup}}</td>
            <td>{{ $data->kurang }}</td>
            <td>{{ $data->rencana_tindak_lanjut }}</td>
            <td><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkepuasanedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/{{ $data->id }}" data-toggle="modal" data-target="#modalkepuasandelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
        </tr>
        @endforeach

        <tr>
            <td class="align-middle text-center" colspan="2"><b>Jumlah</b></td>
            <td>Jumlah SB</td>
            <td>Jumlah B</td>
            <td>Jumlah C</td>
            <td>Jumlah K</td>
            <td colspan="2" style="background-color: grey"></td>
        </tr>
    </table> 
    </div>