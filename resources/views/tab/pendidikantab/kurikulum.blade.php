<div class="tab-pane active" id="kurikulum" role="tabpanel">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
    <div class="collapse" id="collapseExample">
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

{{-- TABLE AWAL --}}
@include('tab.pendidikantab.kurikulumtable')
{{-- TABLE AKHIR --}}
</div>