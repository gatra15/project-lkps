<div id="#">
    <table id='form-print' class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle text-center" scope="col" rowspan="3">No</th>
                <th class="align-middle text-center" scope="col" rowspan="3">Nama Dosen<sup>2)</sup></th>
                <th class="align-middle text-center" scope="col" colspan="8" >Jumlah Mahasiswa Yang Dibimbing</th>
                <th class="align-middle text-center" scope="col" rowspan="3">Rata-rata Jumlah <br> Bimbingan di Semua <br> Program/Semester<sup>5)</sup>  </th> 
                <th class="align-middle text-center" scope="col" rowspan="3">Opsi</th> 
            </tr>
            <tr>
                <th class="align-middle text-center" scope="col" colspan="4">pada PS yang Diakreditasi<sup>3)</sup></th>
                <th class="align-middle text-center" scope="col" colspan="4">pada PS Lain di PT<sup>4)</sup></th>       
            </tr>
            <tr>
                <th class="align-middle text-center" scope="col" >TS-2</th>
                <th class="align-middle text-center" scope="col" >TS-1</th>
                <th class="align-middle text-center" scope="col" >TS</th>
                <th class="align-middle text-center" scope="col" >Rata - rata</th>    
                <th class="align-middle text-center" scope="col" >TS-2</th>
                <th class="align-middle text-center" scope="col" >TS-1</th>
                <th class="align-middle text-center" scope="col" >TS</th>
                <th class="align-middle text-center" scope="col" >Rata - rata</th>    
            </tr>
    
        </thead>

        <tbody class="text-dark">
             {{-- Coding Tabel Disini --}}
             <tr>
            @foreach ($dosenta['dosen'] as $sdm)
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