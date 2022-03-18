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
                    <td class="project-actions text-right">
                        <a class="btn btn-warning btn-sm" type="button" href="#" data-toggle="modal" data-target="#modallihat-{{ $identity->id }}">
                            <i class="fas fa-eye"></i>
                            View
                        </a>
                        @hasrole('perwakilan')
                        <ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaledit-{{ $mhs->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaldelete-{{ $mhs->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul>
                        @endhasrole
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
        @endforeach

</div>