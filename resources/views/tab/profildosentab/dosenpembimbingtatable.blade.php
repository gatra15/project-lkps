<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="3">No</th>
                <th class="align-middle" scope="col" rowspan="3">Nama Dosen <sup>2)</sup></th>
                <th scope="col" colspan="8" >Jumlah Mahasiswa Yang Dibimbing</th>
                <th class="align-middle" scope="col" rowspan="3">Rata-rata Jumlah Bimbingan di Semua Program/Semester<sup>5)</sup>  </th> 
                <th class="align-middle" scope="col" rowspan="3">Opsi</th> 
            </tr>
            <tr>
                <th scope="col" colspan="4">pada PS yang Diakreditasi<sup>3)</sup></th>
                <th scope="col" colspan="4">pada PS Lain di PT<sup>4)</sup></th>       
            </tr>
            <tr>
                <th scope="col" >TS-2</th>
                <th scope="col" >TS-1</th>
                <th scope="col" >TS</th>
                <th scope="col" >Rata - rata</th>    
                <th scope="col" >TS-2</th>
                <th scope="col" >TS-1</th>
                <th scope="col" >TS</th>
                <th scope="col" >Rata - rata</th>    
            </tr>
    
        </thead>

        <tbody class="text-dark">
             {{-- Coding Tabel Disini --}}
             <tr>
            @foreach ($dosenta as $sdm)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sdm->nama }}</td>
                <td>{{ $sdm->jumlah_ps_akreditasi_ts2 }}</td>
                <td>{{ $sdm->jumlah_ps_akreditasi_ts1 }}</td>
                <td>{{ $sdm->jumlah_ps_akreditasi_ts }}</td>
                <td>{{ $sdm->jumlah_ps_akreditasi_average }}</td>
                <td>{{ $sdm->jumlah_ps_lain_ts2 }}</td>
                <td>{{ $sdm->jumlah_ps_lain_ts1 }}</td>
                <td>{{ $sdm->jumlah_ps_lain_ts }}</td>
                <td>{{ $sdm->jumlah_ps_lain_average }}</td>
                <td>{{ $sdm->average }}</td>
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosentaedit-{{ $sdm->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/profil-dosen/pembimbing-ta/{{ $sdm->id }}" data-toggle="modal" data-target="#modaldosentadelete-{{ $sdm->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
            </tr>
            @endforeach
    </table>
</div>