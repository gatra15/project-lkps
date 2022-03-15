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
                    <th style="width: 1%"  class="text-center align-middle">No</th>
                    <th style="width: 20%" class="text-center align-middle">Nama</th>
                    <th style="width: 10%" class="text-center align-middle">NIDN</th>
                    <th style="width: 20%" class="text-center align-middle">Jabatan</th>
                    <th style="width: 15%" class="text-center align-middle">Tanggal Pengisian</th>
                    <th style="width: 25%" class="text-center align-middle"> TTD</th>
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
                                  
                @endforeach
            </tbody>
        </table>
      </div>
      <!-- /.card-body -->
      {{-- MODAL LIHAT DATA --}}

</div>