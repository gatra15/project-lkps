<div>
    <table class="table table-bordered table-condensed">
    <thead>
    
    <tr>
    <th scope="col">No</th>
    <th scope="col">Judul Penelitian/PkM <sup>1)</sup>  </th>
    <th scope="col">Nama Dosen</th>
    <th scope="col">Mata Kuliah</th>
    <th scope="col">Bentuk Integrasi <sup>2)</sup></th>
    <th scope="col">Opsi</th>
    </tr>
    
    </thead>
    
    <tbody>
    {{-- ISI TABEL DISINI YA BOSS --}}
    @foreach ($integrasi['integrasi'] as $integrasi)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $integrasi->judul }}</td>
            <td>{{ $integrasi->nama_dosen }}</td>
            <td>{{ $integrasi->mata_kuliah }}</td>
            <td>{{ $integrasi->bentuk_integrasi }}</td>
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalintegrasiedit-{{ $integrasi->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/pendidikan/integrasi/{{ $integrasi->id }}" data-toggle="modal" data-target="#modalintegrasidelete-{{ $integrasi->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
        </tr>
    @endforeach
    </tbody>
    </table> 
</div>