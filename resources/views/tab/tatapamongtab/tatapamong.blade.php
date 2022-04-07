<div class="tab-pane fade show active" id="pendidikan" role="tabpanel" aria-labelledby="pendidikan-tab" >
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
            Deskripsi
        </a>
        @hasrole('perwakilan')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikan">
            Tambah data
        </button>
        @endhasrole
    </p>
    @can('download file')
        <a href="{{ url('tata-pamong/download-excel') }}" class="btn btn-success">Excel</a>
        <a href="{{ url('tata-pamong/download-csv') }}" class="btn btn-success">CSV</a>
    @endcan
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    <div class="collapse" id="des1">
        <div class="card card-body">
            <p>
            Tuliskan kerjasama tridharma di Unit Pengelola Program Studi (UPPS) dalam 3 tahun
            terakhir dengan mengikuti format berikut ini. <br> <br>

            <b>Keterangan :</b> <br>
            1) Beri tanda V pada kolom yang sesuai. <br>
            2) Diisi dengan judul kegiatan kerjasama yang sudah terimplementasikan, melibatkan
            sumber daya dan memberikan manfaat bagi Program Studi yang diakreditasi. <br>
            3) Bukti kerjasama dapat berupa Surat Penugasan, Surat Perjanjian Kerjasama (SPK),
            bukti-bukti pelaksanaan (laporan, hasil kerjasama, luaran kerjasama), atau bukti lain
            yang relevan. Dokumen Memorandum of Understanding (MoU), Memorandum of
            Agreement (MoA), atau dokumen sejenis yang memayungi pelaksanaan kerjasama,
            tidak dapat dijadikan bukti realisasi kerjasama. <br>
            </p>
        </div> 
    </div>
    
<!-- Modal Tambah Data Pendidikan -->
<div class="modal fade" id="modalpendidikan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Tambah Data Tata Pamong Kerjasama</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
@include('partials.tatapamongmodal.pendidikan')
</div>
</div>
</div>

    {{-- CONTENT --}}
    @include('tab.tatapamongtab.tatapamongtable')
    {{-- End Content --}}
    
    @foreach ($kerjasama as $indikator)

<!-- Modal Edit Data Pendidikan -->
<div class="modal fade" id="modalpendidikanedit-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data {{ $indikator->tridharma }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.tatapamongmodal.pendidikanedit')
    </div>
    </div>
</div>


 <!-- Modal Delete Data Pendidikan -->
 <div class="modal fade" id="modalpendidikandelete-{{ $indikator->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data {{ $indikator->tridharma }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.tatapamongmodal.pendidikandelete')
        
    </div>
    </div>
</div>
        @endforeach
</div>

@include('layouts.table')