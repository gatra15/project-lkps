<div id="printElement">
    <table id='form-print' class="table align-middle text-center table-bordered">
    <thead>
        <tr>
            <th class="align-middle" scope="col" rowspan="2">No</th>
            <th class="align-middle" scope="col" rowspan="2">Jenis <br> Program</th>
            <th class="align-middle" scope="col" rowspan="2">Nama <br> Program Studi</th>
            <th class="align-middle" scope="col" colspan="3" >Akreditasi Program Studi</th>
            <th class="align-middle" scope="col" rowspan="2">Jumlah <br> Mahasiswa <br> saat TS </th>  
        </tr>
        <tr>
            <th scope="col">Status/ <br> Peringkat </th>
            <th scope="col">No. dan <br> Tgl. SK</th>  
            <th scope="col">Tgl. <br> Kadaluarsa</th>  
        </tr>
    
    </thead>
    
    <tbody class="text-dark">
        {{-- CONTENT TABLE  --}}
        @foreach ($identitas as $identity)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $identity->jenis_program }}</td>
                <td>{{ $identity->prodi }}</td>
                <td></td>
                <td>{{ $identity->no_sk1 }} & {{ $identity->tanggal_sk_pendirian }}</td>
                <td></td>
                <td></td>
            </tr>
        @endforeach
    </tbody>
    </table> 
</div>