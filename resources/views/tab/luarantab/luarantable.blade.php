<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
    <thead>
    <tr>
    <th class="align-middle" scope="col" rowspan="2">Media Publikasi</th>
    <th scope="col" colspan="3">Jumlah Judul</th>
    <th class="align-middle" scope="col" rowspan="2">Jumlah</th>
    </tr>
    <tr>
    <th scope="col">TS-2</th>
    <th scope="col">TS-1</th>
    <th scope="col">TS</th>
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