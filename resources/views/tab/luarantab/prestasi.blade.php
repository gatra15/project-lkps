<div class="tab-pane fade" id="prestasi" role="tabpanel" aria-labelledby="prestasi-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des2" role="button" aria-expanded="false" aria-controls="des2">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
    <div class="collapse" id="des2">
        <div class="card card-body">
            <p>
                Tuliskan prestasi akademik/non-akademik yang dicapai mahasiswa Program Studi dalam 5 tahun terakhir dengan mengikuti format Tabel 8.b.1) berikut ini. Data dilengkapi dengan keterangan kegiatan yang diikuti (nama kegiatan, tahun, tingkat, dan prestasi yang dicapai).
            </p>
        </div> 
    </div>

    @include('tab.luarantab.prestasitable')
</div>