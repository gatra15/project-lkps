<!-- Main content -->
<div class="tab-pane fade show {{ auth()->user()->roles->pluck('name')[0] == 'perwakilan' ? '' : 'active' }}" id="identitasisi" role="tablist" aria-labelledby="identitasisi-tab">
          {{-- MODAL LIHAT DATA --}}
@include('layouts.alert')        
          @hasrole('perwakilan')
          @foreach ($identitas as $identity)
            @if ($identity->alert == 'success')
            <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
              {{ $identity->comment }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @elseif ($identity->alert == 'warning')
            <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
              {{ $identity->comment }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            @else
            <div class="alert alert-secondary alert-fixed alert-dismissible fade show center-block"  role="alert">
                belum ada respon dari dekan.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
              
          @endforeach
          @endhasrole 

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
        @hasanyrole('perwakilan|dekan')
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
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappiden-{{ $identity->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakiden-{{ $identity->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole

                        </ul>
                </td>
                </tr>
                @endforeach
            
            </tbody>
        @endhasanyrole

        @hasrole('asesor')
            <tbody>
                {{-- TABEL --}}
                
                @foreach ($identitas_asesor as $identity)
                
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
                        </ul>
                </td>
                </tr>
                @endforeach
            
            </tbody>
        @endhasrole
        </table>
      </div>
      <!-- /.card-body -->

     @hasanyrole('perwakilan|dekan')
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
        
        <div class="modal fade" id="modaltolakiden-{{ $identity->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
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
    
        <div class="modal fade" id="modalappiden-{{ $identity->id }}" tabindex="-1" aria-labelledby="modalappiden" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modalappiden"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.appiden')
            </div>
            </div>
        </div> 
        @endforeach
    @endhasanyrole
    
    @hasrole('asesor')
    @foreach ($identitas_asesor as $identitas)
    <div class="modal fade" id="modallihat-{{ $identitas->id }}" tabindex="-1" aria-labelledby="modallihat" aria-hidden="true">
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
    @endhasrole

    
    
</div>