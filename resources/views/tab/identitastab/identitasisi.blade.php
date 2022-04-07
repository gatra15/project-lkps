<!-- Main content -->
<div class="tab-pane fade show" id="identitasisi" role="tablist" aria-labelledby="identitasisi-tab">
          {{-- MODAL LIHAT DATA --}}
          
          
      <div class="card-body p-0">
        <table class="table table-bordered text-center align-middle table-condensed">
            <thead>
                <tr>
                    <th style="width: 2%" class="text-center">No</th>
                    <th style="width: 20%">Perguruan Tinggi</th>
                    <th style="width: 30%">Unit Pengelola Prodi</th>
                    <th style="width: 20%">Jenis Prodi</th>
                    <th style="width: 16%" class="text-center">Nama Prodi</th>
                    <th style="width: 20%"> Lihat Data </th>
                </tr>
            </thead>
            <tbody>
                {{-- TABEL --}}
                @foreach ($identitas as $identity)
                
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $identity->perguruan_tinggi }}</td>
                    <td>{{ $identity->unit_pengelola }}</td>
                    <td>{{ $identity->jenis_program }}</td>
                    <td>{{ $identity->prodi }}</td>
                    <td class="project-actions text-right ms-1 ps-1">
                        <ul class="action-list d-flex justify-content-center " id="action">
                        <li><a class="btn btn-warning" type="button" href="#" data-toggle="modal" data-target="#modallihat-{{ $identity->id }}">
                            <i class="fas fa-eye"></i>
                        </a></li>
                        @hasrole('perwakilan')
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaledit-{{ $identity->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaldelete-{{ $identity->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                            
                        @endhasrole
                    </ul>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->

     
      @foreach ($identitas as $identity)
              
          <div class="modal fade" id="modallihat-{{ $identity->id }}" tabindex="-1" aria-labelledby="modallihat" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modallihat">Data dari </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.identitas')
            </div>
            </div>
        </div>

          <div class="modal fade" id="modaledit-{{ $identity->id }}" tabindex="-1" aria-labelledby="modaledit" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaledit">Edit Data Identitas Pengusul </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.identitasedit')
            </div>
            </div>
        </div>
        
          <div class="modal fade" id="modaldelete-{{ $identity->id }}" tabindex="-1" aria-labelledby="modaldelete" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaldelete">Hapus Data Identitas Pengusul </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.identitasdelete')
            </div>
            </div>
        </div>
        @endforeach

        @hasrole('dekan')

    <div class="modal-footer bg-whitet">
      
    {{-- <form action="" method="post">
      @method('put')
      @csrf
    <button type="submit" class="btn btn-success btn-sm">
      Approve 
    </button>
    </form> --}}
    
    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaltolakiden">
      Tolak
    </button>
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalappiden">
      Approve
    </button>
    </div>
    
    @endhasrole

    <div class="modal fade" id="modaltolakiden" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak?  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.identitasmodal.tolakiden')
        </div>
        </div>
    </div> 

    <div class="modal fade" id="modalappiden" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.identitasmodal.appiden')
        </div>
        </div>
    </div> 

</div>