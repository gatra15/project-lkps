<div class="tab-pane fade" id="mhs-asing" role="tabpanel" aria-labelledby="mhsAsing-tab">

    @include('layouts.alert')        
    @hasrole('perwakilan')
    @foreach ($mahasiswa_asing['mahasiswa'] as $key => $mhs)

      @if ($mhs->alert == 'success')
      <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} {{ $mhs->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @elseif ($mhs->alert == 'warning')
      <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
        {{ $mhs->comment }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @else
      <div class="alert alert-secondary alert-fixed alert-dismissible fade show center-block"  role="alert">
        element tabel ke - {{ $loop->iteration }} belum ada respon dari dekan.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
        
    @endforeach
    @endhasrole 

    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
        
    </p>
    @can('download file')
    <a href="/mahasiswa/asing/download/excel" class="btn btn-success">Excel</a>
    <a href="/mahasiswa/asing/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table2')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <p>
            Tuliskan jumlah mahasiswa asing yang terdaftar di seluruh program studi pada UPPS
            dalam <b>3 tahun terakhir</b>  dengan mengikuti format Tabel berikut ini. <br> <br>
            <b>Keterangan</b> <br>
            Mahasiswa asing dapat terdaftar untuk mengikuti program pendidikan secara penuh
            waktu <i>(full-time)</i>  atau paruh waktu <i>(part-time)</i>. Mahasiswa asing paruh waktu adalah mahasiswa yang terdaftar di Program Studi untuk mengikuti kegiatan pertukaran studi
            <i>(student exchange), credit earning</i>, atau kegiatan sejenis yang relevan.
            </p>
        </div> 
    </div>
    {{-- Modal Tambah --}}
    {{-- <div class="modal fade" id="modalmahasiswaasing" tabindex="-1" aria-labelledby="modalmahasiswaasing" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalmahasiswaasing">Tambah Data </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.asing')
        </div>
        </div>
    </div> --}}

{{-- TABLE --}}

@include('tab.mahasiswatab.asingtable')
{{-- End --}}

    @foreach ($mahasiswa_asing['mahasiswa'] as $key => $mhs)

    <div class="modal fade" id="modalmahasiswaasingedit-{{ $mhs['id'] }}" tabindex="-1" aria-labelledby="modalmahasiswaasingedit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalmahasiswaasingedit">Edit Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.asingedit')
        </div>
        </div>
    </div>

    <div class="modal fade" id="modalmahasiswaasingdelete-{{ $mhs['id'] }}" tabindex="-1" aria-labelledby="modalmahasiswaasingdelete" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalmahasiswaasingdelete">Hapus Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.asingdelete')
        </div>
        </div>
    </div>  
    
    <div class="modal fade" id="modaltolakasg-{{ $mhs['id'] }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.tolak2')
        </div>
        </div>
    </div> 
    
    <div class="modal fade" id="modalappasg-{{ $mhs['id'] }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.app2')
        </div>
        </div>
    </div>

    @endforeach

</div>
@include('layouts.table')