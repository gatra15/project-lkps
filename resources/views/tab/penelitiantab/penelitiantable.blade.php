<div id="print-table">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                <th class="align-middle" scope="col" rowspan="2">Tema Penelitian Sesuai Roadmap</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Mahasiswa</th>
                <th class="align-middle" scope="col" rowspan="2">Judul Kegiatan <sup>1)</sup></th>
                <th class="align-middle" scope="col" rowspan="2">Tahun</th>
                @hasrole ('perwakilan')
                <th class="align-middle" scope="col" rowspan="2">Opsi</th>
                @endhasrole

            </tr>
    
        </thead>

        <tbody class="text-dark">

            @foreach ($penelitian as $penelitian)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $penelitian->nama_dosen }}</td>
                    <td>{{ $penelitian->tema }}</td>
                    <td>{{ $penelitian->nama_mahasiswa }}</td>
                    <td>{{ $penelitian->judul }}</td>
                    <td>{{ $penelitian->tahun }}</td>
                    @hasrole ('perwakilan')
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpenelitiandtpsedit-{{ $penelitian->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/penelitian/{{ $penelitian->id }}" data-toggle="modal" data-target="#modalpenelitiandtpsdelete-{{ $penelitian->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                    @endhasrole
                </tr>
            @endforeach

            <tr>
                <td colspan="4" class="text-center"> <b>Jumlah</b>  </td>
                <td>{{ $jumlah_judul }}</td>
                <td colspan="2"></td>
            </tr>
            
            
    </table> 
</div>

@hasrole('dekan')
    <div class="modal-footer bg-whitet">
    <form action="#" method="post">
      @method('put')
      @csrf
    <button type="submit" class="btn btn-success btn-sm">
      Approve 
    </button>
    </form>
    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaltolakpenelitian">
      Tolak
    </button>
    </div>
    @endhasrole

    <div class="modal fade" id="modaltolakpenelitian" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak?  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.penelitianmodal.tolak')
        </div>
        </div>
    </div> 