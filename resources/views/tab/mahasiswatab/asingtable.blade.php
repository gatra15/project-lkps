<div id="printElement">
    <table id='form-print' class="table text-center table-bordered">
    <thead>
        <tr>
            <th class="align-middle" scope="col" rowspan="2">No</th>
            <th class="align-middle" scope="col" rowspan="2">Program Studi</th>
            <th scope="col" colspan="3">Jumlah Mahasiswa Aktif</th>
            <th scope="col" colspan="3" >Jumlah Mahasiswa Asing Penuh Waktu(Full-time)</th>
            <th scope="col" colspan="3">Jumlah Mahasiswa Asing Paruh Waktu(Part-time)</th>  
        </tr>
        <tr>
            <th scope="col">TS-2</th>
            <th scope="col">TS-1</th>  
            <th scope="col">TS</th>
            <th scope="col">TS-2</th>
            <th scope="col">TS-1</th>  
            <th scope="col">TS</th> 
            <th scope="col">TS-2</th>
            <th scope="col">TS-1</th>  
            <th scope="col">TS</th>     
        </tr>
    
    </thead>
    
    <tbody class="text-dark">
        @foreach ($mahasiswa_asing as $mhs)
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
        @endforeach
    </table> 
</div>