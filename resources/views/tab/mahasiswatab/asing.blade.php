<div class="tab-pane fade" id="mhs-asing" role="tabpanel" aria-labelledby="mhsAsing-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalmahasiswaasing">
            Tambah Data
        </a>
    </p>
    <a href="/mahasiswa/asing/download/excel" class="btn btn-success">Excel</a>
    <a href="/mahasiswa/asing/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table2')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
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
    <div class="modal fade" id="modalmahasiswaasing" tabindex="-1" aria-labelledby="modalmahasiswaasing" aria-hidden="true">
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
    </div>

{{-- TABLE --}}

@include('tab.mahasiswatab.asingtable')
{{-- End --}}

@foreach ($mahasiswa_asing['mahasiswa'] as $mhs)

<div class="modal fade" id="modalmahasiswaasingedit-{{ $mhs->id }}" tabindex="-1" aria-labelledby="modalmahasiswaasingedit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalmahasiswaasingedit">Edit Data {{ $mhs->program_studi }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.mahasiswamodal.asingedit')
    </div>
    </div>
</div>
<div class="modal fade" id="modalmahasiswaasingdelete-{{ $mhs->id }}" tabindex="-1" aria-labelledby="modalmahasiswaasingdelete" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalmahasiswaasingdelete">Hapus Data {{ $mhs->program_studi }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.mahasiswamodal.asingdelete')
    </div>
    </div>
</div>    
@endforeach

</div>
@include('layouts.table')