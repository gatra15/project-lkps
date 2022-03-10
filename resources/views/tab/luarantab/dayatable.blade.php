<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
    <thead>
    <tr>
        <th class="align-middle text-center" scope="col" rowspan="2">Tahun <br> Lulus</th>
        <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan</th>
        <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> yang <br> Terlacak </th>
        <th class="align-middle text-center" scope="col" colspan="3">Jumlah Lulusan Terlacak <br> dengan Waktu Tunggu <br> Mendapatkan Pekerjaan </th>
    </tr>

    <tr>
        <th class="align-middle text-center" scope="col">WT < 6 <br> bulan </th>
        <th class="align-middle text-center" scope="col">6  ≤ WT  ≤ <br> 18 bulan </th>
        <th class="align-middle text-center" scope="col">WT > 18 <br> bulan </th>
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