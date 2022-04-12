<div id="printElement">
    <table id='form-print' class="table align-middle text-center table-bordered">
    <thead>
        <tr>
            <th class="align-middle" scope="col" rowspan="2" width="1%">No</th>
            <th class="align-middle" scope="col" rowspan="2" width="10%">Jenis <br> Program</th>
            <th class="align-middle" scope="col" rowspan="2" width="10%">Nama <br> Program Studi</th>
            <th class="align-middle" scope="col" colspan="3" width="10%">Akreditasi Program Studi</th>
            <th class="align-middle" scope="col" rowspan="2" width="3%">Jumlah <br> Mahasiswa <br> saat TS <sup>4)</sup> </th> 
            @hasrole('perwakilan')
            <th class="align-middle" scope="col" rowspan="2" width="3%"> Opsi </th> 
            @endhasrole
        </tr>
        <tr>
            <th scope="col">Status/ <br> Peringkat </th>
            <th scope="col">No. dan <br> Tgl. SK</th>  
            <th scope="col">Tgl. <br> Kadaluarsa</th>  
        </tr>
    
    </thead>
    
    <tbody class="text-dark">
        {{-- CONTENT TABLE  --}}
        @foreach ($upps['data'] as $upps)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $upps->jenis_program }}</td>
                <td>{{ $upps->program_studi }}</td>
                <td>{{ $upps->status_peringkat }}</td>
                <td>{{ $upps->no_sk }}</td>
                <td>{{ $upps->tanggal_kadaluarsa }}</td>
                <td>{{ $upps->jumlah_mahasiswa }}</td>
                @hasrole('perwakilan')
                <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaleditupps-{{ $upps->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaldeleteupps-{{ $upps->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul>
                    </td>
                    @endhasrole
                @hasrole('dekan')
                    <li>
                        <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappiden-{{ $identity->id }}"><i class="fas fa-check-circle"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakiden-{{ $identity->id }}"><i class="fas fa-times-circle"></i></a></li>
                @endhasrole
                    
                    
            </tr>
        @endforeach
    </tbody>
    </table> 

    <div class="modal fade" id="modaltolakupps" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak? </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.identitasmodal.tolakupps')
        </div>
        </div>
    </div> 

    <div class="modal fade" id="modalappupps" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.identitasmodal.appupps')
        </div>
        </div>
    </div> 

</div>