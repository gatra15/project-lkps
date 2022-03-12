<!-- Main content -->
<div class="tab-pane fade show" id="identitasisi" role="tablist" aria-labelledby="identitasisi-tab">
          {{-- MODAL LIHAT DATA --}}
          <div class="modal fade" id="modallihat" tabindex="-1" aria-labelledby="modallihat" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modallihat">Data dari {{--  --}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.identitas')
            </div>
            </div>
        </div>

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
                    <th style="width: 1%">No</th>
                    <th style="width: 20%">Perguruan Tinggi</th>
                    <th style="width: 30%">Unit Pengelola Prodi</th>
                    <th style="width: 20%">Jenis Prodi</th>
                    <th style="width: 16%" class="text-center">Nama Prodi</th>
                    <th style="width: 20%"> Lihat Data </th>
                </tr>
            </thead>
            <tbody>
                {{-- TABEL --}}
                <tr>
                    <td>eko</td>
                    <td>eko</td>
                    <td>eko</td>
                    <td>eko</td>
                    <td>eko</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-warning btn-sm" href="#" data-toggle="modal" data-target="#modallihat">
                            <i class="fas fa-eye"></i>
                            View
                        </a>
                        {{-- <a class="btn btn-info btn-sm" href="#">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="#">
                            <i class="fas fa-trash">
                            </i>
                            Delete
                        </a> --}}
                    </td>
                </tr>
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->


</div>