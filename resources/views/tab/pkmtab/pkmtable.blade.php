<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                <th class="align-middle" scope="col" rowspan="2">Tema PkM Sesuai Roadmap</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Mahasiswa</th>
                <th class="align-middle" scope="col" rowspan="2">Judul Kegiatan <sup>1)</sup></th>
                <th class="align-middle" scope="col" rowspan="2">Tahun</th>
                <th class="align-middle" scope="col" rowspan="2">Opsi</th>

            </tr>
    
        </thead>

        <tbody class="text-dark">
            @foreach ($pengabdian as $pkm)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pkm->nama_dosen }}</td>
                    <td>{{ $pkm->tema }}</td>
                    <td>{{ $pkm->nama_mahasiswa }}</td>
                    <td>{{ $pkm->judul_kegiatan }}</td>
                    <td>{{ $pkm->tahun }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpkmedit-{{ $pkm->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/pkm/{{ $pkm->id }}" data-toggle="modal" data-target="#modalpkmdelete-{{ $pkm->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
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
            <tr>
                <td class="align-middle text-center" colspan="5"><b>Jumlah</b></td>
                <td></td>
            </tr>
    </table> 
</div>