<div class="tab-pane fade show active" id="kualitas" role="tabpanel" aria-labelledby="kualitas-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
            <a type="button" class="btn btn-primary hidden" data-toggle="modal" data-target="#modalmahasiswa">
            Tambah Data
        </a>
    </p>
    <a href="/mahasiswa/download-excel" class="btn btn-success">Excel</a>
    <a href="/mahasiswa/download-csv" class="btn btn-success">CSV</a>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <p>
                Tuliskan data daya tampung, jumlah calon mahasiswa (pendaftar dan peserta yang lulus 
                seleksi), jumlah mahasiswa baru (reguler dan transfer) dan jumlah mahasiswa aktif 
                (reguler dan transfer) dalam 5 tahun terakhir di Program Studi yang diakreditasi dengan 
                mengikuti format Tabel 2.a berikut ini.
            </p>
            Keterangan: <br>
            TS = Tahun akademik penuh terakhir saat pengajuan usulan akreditasi.
        </div> 
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalmahasiswa" tabindex="-1" aria-labelledby="modalmahasiswa" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalmahasiswa">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.mahasiswa')
        </div>
        </div>
    </div>
    
{{-- TABLE --}}
@include('tab.mahasiswatab.mahasiswatable')

</div>