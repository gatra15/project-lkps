<div class="tab-pane fade" id="efektifitas" role="tabpanel" aria-labelledby="efektifitas-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
    <div class="collapse" id="des3">
        <div class="card card-body">
            <p>
                Tuliskan masa studi lulusan untuk dengan mengikuti format Tabel 8.c berikut ini. <br>
                Tabel 8.c. Masa Studi Lulusan Program Studi <br>
                Diisi oleh pengusul dari Program Studi pada Program Sarjana/Sarjana Terapan
            </p>
        </div> 
    </div>

        {{-- PRESTASI AWAL --}}
        @include('tab.luarantab.efektivitastable')
        {{-- PRESTASI AKHIR --}}

</div>