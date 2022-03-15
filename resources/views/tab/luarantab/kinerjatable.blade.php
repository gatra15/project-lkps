<div id="print-table7">
    <table id='form-print' class="table text-center table-bordered table-condensed">
    <thead>
    <tr>
    <th class="align-middle" scope="col" rowspan="2">Tahun Lulus</th>
    <th class="align-middle" scope="col" rowspan="2">Jumlah Lulusan</th>
    <th class="align-middle" scope="col" rowspan="2">Jumlah Lulusan yang Terlacak</th>
    <th scope="col" colspan="3">Jumlah Lulusan Terlacak yang Bekerja berdasarkan Tingkat/Ukuran Tempat Kerja/Berwirausaha</th>
    <th class="align-middle" scope="col" rowspan="2">Opsi</th>
    </tr>
    <tr>
    <th scope="col">Lokal/
        Wilayah/
        Berwirausaha
        tidak Berizin</th>
    <th scope="col">Nasional/
        Berwirausaha
        Berizin</th>
    <th scope="col">Multinasiona/
        Internasional</th>
    </tr>
    
    </thead>
    
    <tbody class="text-dark">
        @foreach ($kinerjaLulusan['data'] as $data)
        <tr>
            <td>{{ $data->tahun->name }}</td>
            <td>{{ $data->jumlah_lulusan }}</td>
            <td>{{ $data->jumlah_lulusan_terlacak }}</td>
            <td>{{ $data->tempat_wilayah_tidak_berizin}}</td>
            <td>{{ $data->tempat_nasional_berizin}}</td>
            <td>{{ $data->internasional}}</td>
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkinerjaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/{{ $data->id }}" data-toggle="modal" data-target="#modalkinerjadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
        </tr>
        @endforeach
        <tr>
            <td class="align-middle text-center" colspan="1"><b>Jumlah</b></td>
            <td>{{ $kinerjaLulusan['jumlah'] }}</td>
            <td>{{ $kinerjaLulusan['jumlah2'] }}</td>
            <td>{{ $kinerjaLulusan['wilayah'] }}</td>
            <td>{{ $kinerjaLulusan['nasional'] }}</td>
            <td>{{ $kinerjaLulusan['internasional'] }}</td>
        </tr>
    </table> 
    </div>