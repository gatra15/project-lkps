<div id="print-table2">
    <table class="table table-bordered table-condensed">
    <thead>
    
    <tr>
        <th class="text-center align-middle" scope="col" rowspan="2">No</th>
        <th class="text-center align-middle" scope="col" rowspan="2">Aspek yang Diukur</th>
        <th class="text-center align-middle" scope="col" colspan="4">Tingkat Kepuasan Mahasiswa (%)</th>
        <th class="text-center align-middle" scope="col" rowspan="2">Rencana Tindak Lanjut oleh UPPS/PS</th>
        @hasrole('perwakilan')
        <th class="text-center align-middle" scope="col" rowspan="2">Opsi</th>
        @endhasrole
    </tr>
    
    <tr>
        <th class="text-center align-middle" scope="col">Sangat Baik</th>
        <th class="text-center align-middle" scope="col">Baik</th>
        <th class="text-center align-middle" scope="col">Cukup</th>
        <th class="text-center align-middle" scope="col">Kurang</th>
    </tr>
    </thead>
    
    <tbody>
        @foreach ($kepuasanmahasiswa['kepuasan'] as $kepuasan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>@php echo $kepuasan->aspek->aspek @endphp</td>
                <td>{{ $kepuasan->sangat_baik }}</td>
                <td>{{ $kepuasan->baik }}</td>
                <td>{{ $kepuasan->cukup }}</td>
                <td>{{ $kepuasan->kurang }}</td>
                <td>{{ $kepuasan->rencana_tindak_lanjut }}</td>
                @hasrole('perwakilan')
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalkepuasanedit-{{ $kepuasan->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/pendidikan/kepuasan-mahasiswa/{{ $kepuasan->id }}" data-toggle="modal" data-target="#modalkepuasandelete-{{ $kepuasan->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
            </tr>
        @endforeach
        <tr>
            <td class="align-middle text-center"><b>Jumlah</b></td>
            <td></td>
            <td class="putih">{{ $kepuasanmahasiswa['sangat_baik'] }}</td>
            <td class="putih">{{ $kepuasanmahasiswa['baik'] }}</td>
            <td class="putih">{{ $kepuasanmahasiswa['cukup'] }}</td>
            <td class="putih">{{ $kepuasanmahasiswa['kurang'] }}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    {{-- ISI TABEL DISINI BOSS --}}
    </tbody>
    </table> 
</div>