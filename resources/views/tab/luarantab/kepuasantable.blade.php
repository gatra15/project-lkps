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
    <tr>
    <td>Eko</td>
    <td>Eko</td>
    <td>Eko</td>
    <td>Eko</td>
    <td>Eko</td>
    </tr>
    {{-- @foreach ($mahasiswa_asing as $mhs)
    <tr>
        @for ($i = 0; $i < $count; $i++)
        <td>{{ $i }}</td>
        @endfor
       <td>{{ $mhs->daya_tampung }}</td> 
       <td>{{ $mhs->c_pendaftar }}</td> 
       <td>{{ $mhs->c_lulus_seleksi }}</td> 
       <td>{{ $mhs->mahasiswa_reguler }}</td> 
       <td>{{ $mhs->mahasiswa_transfer }}</td> 
       <td>{{ $mhs->mahasiswa_aktif_reguler }}</td> 
       <td>{{ $mhs->mahasiswa_aktif_transfer }}</td>
    </tr>
    @endforeach --}}
    </table> 
    </div>