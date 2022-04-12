<!-- Main content -->
<div class="tab-pane fade show" id="daftar" role="tablist" aria-labelledby="daftar-tab">

      <div class="card-body p-0">
        <table class="table table-bordered text-center align-middle table-condensed">
            <thead>
                <tr>
                    <th  class="text-center align-middle" width="1%">No</th>
                    <th  class="text-center align-middle" width="20%">Nama</th>
                    <th  class="text-center align-middle" width="20%">NIDN</th>
                    <th  class="text-center align-middle" width="15%">Jabatan</th>
                    <th  class="text-center align-middle" width="10%">Tanggal Pengisian</th>
                    <th  class="text-center align-middle" width="24%"> TTD</th>
                    @hasanyrole('perwakilan|dekan')
                    <th  class="text-center align-middle" width="10%"> Opsi</th>
                    @endhasanyrole
                </tr>
            </thead>
            <tbody>
                {{-- TABEL --}}
                @foreach ($timpenyusun['tim'] as $tim)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tim->nama }}</td>
                    <td>{{ $tim->nidn }}</td>
                    <td>{{ $tim->jabatan }}</td>
                    <td>{{ $tim->tanggal_pengisian }}</td>
                    <td><img width="100" height="115" src="{{ asset('storage/'.$tim->ttd) }}" alt="ttd"></td>
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                    @hasrole('perwakilan')
                    
                          <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaleditpengisi-{{ $tim->id }}"><i class="fas fa-edit"></i></a></li>
                          <li>
                              <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaldeletepengisi-{{ $tim->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    @endhasrole
                    @hasrole('dekan')
                      <li>
                          <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsusun-{{ $identity->id }}"><i class="fas fa-check-circle"></i></a>
                      </li>
                      <li>
                          <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksusun-{{ $identity->id }}"><i class="fas fa-times-circle"></i></a>
                      </li>
                    @endhasrole
                    </ul>
                    </td>
                    @endhasanyrole
                </tr>
                                  
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->

      {{-- MODAL LIHAT DATA --}}
      @foreach ($timpenyusun['tim'] as $tim)             
          <div class="modal fade" id="modaleditpengisi-{{ $tim->id }}" tabindex="-1" aria-labelledby="modaleditpengisi" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaleditpengisi">Edit Data Identitas Pengusul </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.penyusunedit')
            </div>
            </div>
        </div>
          <div class="modal fade" id="modaldeletepengisi-{{ $tim->id }}" tabindex="-1" aria-labelledby="modaldeletepengisi" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaldeletepengisi">Hapus Data Identitas Pengusul </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.penyusundelete')
            </div>
            </div>
        </div>
        @endforeach

        
    
        <div class="modal fade" id="modaltolaksusun" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak? </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.tolaksusun')
            </div>
            </div>
        </div> 
    
        <div class="modal fade" id="modalappsusun" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.appsusun')
            </div>
            </div>
        </div> 
</div>