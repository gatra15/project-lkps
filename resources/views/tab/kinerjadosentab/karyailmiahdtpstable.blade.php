<div id="printElement container-fluid">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>

                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                <th class="align-middle" scope="col" rowspan="2">Judul Artikel yang Disitasi (Jurnal/Buku,Volume, Tahun, Nomor,Halaman)</th>
                <th class="align-middle" scope="col" rowspan="2" >Jumlah Sitasi</th>                    
                <th class="align-middle" scope="col" rowspan="2" >Opsi</th>                    
            </tr>


        </thead>

        <tbody class="text-dark">
            @foreach ($karyailmiah['karyailmiah'] as $karil)
            <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $karil->nama_dosen }}</td> 
            <td>{{ $karil->judul }}</td> 
            <td>{{ $karil->jumlah_sitasi }}</td> 
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalkaryailmiahedit-{{ $karil->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/kinerja-dosen/karya-ilmiah/{{ $karil->id }}" data-toggle="modal" data-target="#modalkaryailmiahdelete-{{ $karil->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
            </tr>

        

        @endforeach

        <tr>
            <td colspan="2"><b>Jumlah</b></td>
            <td>{{ $karyailmiah['count'] }}</td>
            <td>{{ $karyailmiah['jumlah'] }}</td>
            <td></td>
        </tr>
        </table> 
    </div>