<div class="tab-pane fade show active" id="mahasiswa" role="tabpanel" aria-labelledby="mahasiswa-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
            Deskripsi
        </a>
    </p>
    <div class="collapse" id="des1">
        <div class="card card-body">
            <p>
                Tuliskan data penelitian DTPS yang dalam pelaksanaannya melibatkan mahasiswa
                Program Studi pada TS-2 sampai dengan TS dengan mengikuti format Tabel 
                berikut ini. <br> <br>
            
            <b>Keterangan</b>  <br>
            1) Judul kegiatan yang melibatkan mahasiswa dalam penelitian dosen dapat berupa
            Tugas Akhir, Perancangan, Pengembangan Produk/Jasa, atau kegiatan lain yang
            relevan <br>
        </p>
        </div> 
    </div>
    {{-- CONTENT --}}

        @include('tab.penelitiantab.penelitiantable')
    
</div>