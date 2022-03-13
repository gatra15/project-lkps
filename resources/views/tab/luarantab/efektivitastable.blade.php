<div id="printElement container-fluid">
    <table id='form-print' class="table table-bordered table-condensed">
    <thead>
    <tr>
    <th class="align-middle text-center" scope="col" rowspan="2">Tahun <br> Masuk</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Mahasiswa <br> Diterima <sup>1)</sup></th>
    <th class="align-middle text-center" scope="col" colspan="7">Jumlah Mahasiswa yang Lulus pada</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> s.d. <br> Akhir TS</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Rata- <br> rata <br> Masa <br> Studi</th>
    
    </tr>

    <tr>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-6 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-5 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-4 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-3 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-2 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-1 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS </th>
    </tr>
    
    </thead>
    
    <tbody class="text-dark">
        @foreach ($efektifitasPrestasi['efektifitas'] as $efektifitas)
            <tr>
                <td>{{ $efektifitas->jumlah_mahasiswa }}</td>
                <td>{{ $efektifitas->ts3 }}</td>
                <td>{{ $efektifitas->ts2 }}</td>
                <td>{{ $efektifitas->ts1 }}</td>
                <td>{{ $efektifitas->ts }}</td>
                <td>{{ $efektifitas->jumlah }}</td>
                <td>{{ $efektifitas->average }}</td>
            </tr>
        @endforeach
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