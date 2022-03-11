<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
    <thead>
    <tr>
    <th class="align-middle text-center" scope="col" rowspan="2">Tahun Lulus</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan </th>
    <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> yang <br> Terlacak</th>
    <th class="align-middle text-center" scope="col" colspan="3">Jumlah Lulusan Terlacak dengan <br>
        Tingkat Kesesuaian Bidang Kerja</th>
    </tr>
    <tr>
    <th scope="col">Rendah <sup>1)</sup></th>
    <th scope="col">Sedang <sup>2)</sup></th>
    <th scope="col">Tinggi <sup>3)</sup></th>
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