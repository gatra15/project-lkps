<div class="tab-pane active" id="kurikulum" role="tabpanel">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkurikulum">
            Tambah data
        </button>
    </p>
    <a href="/pendidikan/download/excel" class="btn btn-success">Excel</a>
    <a href="/pendidikan/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table3')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    <div class="collapse" id="des1">
    <div class="card card-body">
        <p>
            Tuliskan struktur program dan kelengkapan data mata kuliah sesuai dengan dokumen kurikulum program studi yang berlaku pada saat TS dengan mengikuti format berikut ini. <br> <br>
            <b>Keterangan</b> <br>
            1) Diisi dengan tanda centang V jika mata kuliah termasuk dalam mata kuliah kompetensi program studi. <br>
            2) Diisi dengan konversi bobot kredit ke jam pelaksanaan pembelajaran. Data ini diisi oleh pengusul dari program studi pada
            program Diploma Tiga/Sarjana/Sarjana Terapan. <br>
            3) Beri tanda V pada kolom unsur pembentuk Capaian Pembelajaran Lulusan (CPL) sesuai dengan rencana pembelajaran. <br>
            4) Diisi dengan nama dokumen rencana pembelajaran yang digunakan. <br>
        </p>
    </div> 
    </div>

{{-- CONTENT --}}
{{-- Modal Tambah Data Kurikulum --}}
    <div class="modal fade" id="modalkurikulum" tabindex="-1" aria-labelledby="modalkurikulum" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkurikulum">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.pendidikanmodal.kurikulum')
        </div>
        </div>
        </div>
    
{{-- TABLE AWAL --}}
@include('tab.pendidikantab.kurikulumtable')
{{-- TABLE AKHIR --}}

@foreach ($kurikulum['kurikulum'] as $kur)
            
<!-- Modal Tambah Data Kurikulum -->
<div class="modal fade" id="modalkurikulumedit-{{ $kur->id }}" tabindex="-1" aria-labelledby="modalkurikulumedit" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalkurikulumedit">Edit Data {{ $kur->nama_mata_kuliah }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.pendidikanmodal.kurikulumedit')
    </div>
    </div>
    </div>

    <!-- Modal Tambah Data Kurikulum -->
    <div class="modal fade" id="modalkurikulumdelete-{{ $kur->id }}" tabindex="-1" aria-labelledby="modalkurikulumdelete" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modalkurikulumdelete">Hapus Data {{ $kur->nama_mata_kuliah }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.pendidikanmodal.kurikulumdelete')
    </div>
    </div>
    </div>

    @endforeach
        
</div>
@include('layouts.table')