<div class="tab-pane fade show active" id="capaian" role="tabpanel" aria-labelledby="capaian-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
    <div class="collapse" id="des1">
        <div class="card card-body">
            <p>
                Tuliskan data Indeks Prestasi Kumulatif (IPK) lulusan dalam 3 tahun terakhir dengan mengikuti format Tabel 8.a berikut ini. Data dilengkapi dengan jumlah lulusan pada setiap tahun kelulusan.
            </p>
            Keterangan: <br>
            TS = Tahun akademik penuh terakhir saat pengajuan usulan akreditasi.
        </div> 
    </div>

    {{-- TABLE --}}
    @include('tab.luarantab.capaiantable')
</div>