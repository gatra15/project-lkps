<div class="tab-pane fade" id="mhs-asing" role="tabpanel" aria-labelledby="mhsAsing-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalmahasiswaasing">
            Tambah Data
        </a>
    </p>
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
    {{-- Modal Tambah --}}
    <div class="modal fade" id="modalmahasiswaasing" tabindex="-1" aria-labelledby="modalmahasiswaasing" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalmahasiswaasing">Tambah Data</h5>
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
        <h5 class="modal-title" id="modalmahasiswaasingedit">Edit Data</h5>
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
        <h5 class="modal-title" id="modalmahasiswaasingdelete">Hapus Data</h5>
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