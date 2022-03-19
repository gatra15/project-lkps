<!-- Main content -->
<div class="tab-pane fade show" id="daftar" role="tablist" aria-labelledby="daftar-tab">

    <!-- Default box -->
    {{-- <div class="card">
      <div class="card-header">
        <h3 class="card-title">Identitas Pengusul</h3> --}}

        {{-- <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div> --}}
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
                    <th  class="text-center align-middle" width="10%"> Opsi</th>
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
                    @hasrole('perwakilan')
                    <td class="project-actions text-right ms-1 ps-1">
                      <ul class="action-list d-flex justify-content-center " id="action">
                      
                          <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaledit"><i class="fas fa-edit"></i></a></li>
                          <li>
                              <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaldelete"><i class="fas fa-trash btn-del"></i></a></li>
                      @endhasrole
                      </ul>
                  </td>

                </tr>
                                  
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      {{-- MODAL LIHAT DATA --}}

</div>