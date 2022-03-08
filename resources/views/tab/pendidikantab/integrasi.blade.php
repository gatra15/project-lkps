<div class="tab-pane fade show" id="integrasi" role="tabpanel">
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
            Tuliskan judul penelitian/PkM DTPS yang terintegrasi ke dalam pembelajaran/
            pengembangan matakuliah dalam 3 tahun terakhir dengan mengikuti format Tabel
            berikut ini. <br> <br>
            <b>Keterangan</b> <br>
            1) Judul penelitian dan PkM tercatat di unit/lembaga yang mengelola kegiatan
            penelitian/PkM di tingkat Perguruan Tinggi/UPPS. <br>
            2) Bentuk integrasi dapat berupa tambahan materi perkuliahan, studi kasus, Bab/
            Subbab dalam buku ajar, atau bentuk lain yang relevan. <br>
        </p>
    </div> 
    </div>

{{-- CONTENT --}}

{{-- TABLE AWAL --}}
@include('tab.pendidikantab.integrasitable')
{{-- TABLE AKHIR --}}
</div>