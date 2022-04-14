<div class="tab-pane fade show active" id="kualitas" role="tabpanel" aria-labelledby="kualitas-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalchartmhs">
            Chart Mahasiswa
        </button> 
    </p>
    @can('download file')
    <a href="mahasiswa/download/excel" class="btn btn-success">Excel</a>
    <a href="/mahasiswa/download/csv" class="btn btn-success">CSV</a>
    
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <p>
                Tuliskan data daya tampung, jumlah calon mahasiswa (pendaftar dan peserta yang lulus
                seleksi), jumlah mahasiswa baru (reguler dan transfer) dan jumlah mahasiswa aktif
                (reguler dan transfer) <b>dalam 5 tahun terakhir</b>  di Program Studi yang diakreditasi dengan
                mengikuti format berikut ini. <br> <br>
            
                <b>Keterangan</b> <br>
                TS = Tahun akademik penuh terakhir saat pengajuan usulan akreditasi. <br>
                N<sub>A</sub> = Jumlah calon mahasiswa pendaftar <br>
                N<sub>B</sub> = Jumlah calon mahasiswa lulus seleksi <br>
                N<sub>C</sub> = Jumlah mahasiswa baru reguler <br>
                N<sub>D</sub> = Jumlah mahasiswa baru transfer <br>
                N<sub>M</sub> = Jumlah mahasiswa aktif reguler + mahasiswa aktif transfer <br>

        </p>
        </div> 
    </div>

    
{{-- TABLE --}}
@include('tab.mahasiswatab.mahasiswatable')
{{-- End Table --}}

    @foreach ($mahasiswa['mahasiswa'] as $key => $mhs)
    <!-- Modal Edit -->
    <div class="modal fade" id="modalmahasiswaedit-{{ $mhs->id }}" tabindex="-1" aria-labelledby="modalmahasiswaedit" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalmahasiswaedit">Edit Data Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.mahasiswaedit')
        </div>
        </div>
    </div>
    <!-- Modal De;ete -->
    <div class="modal fade" id="modalmahasiswadelete-{{ $mhs->id }}" tabindex="-1" aria-labelledby="modalmahasiswadelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalmahasiswadelete">Hapus Data Mahasiswa</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.mahasiswadelete')
        </div>
        </div>
    </div>

    <div class="modal fade" id="modaltolakmhs-{{ $mhs->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.tolak')
        </div>
        </div>
    </div> 
    
    <div class="modal fade" id="modalappmhs-{{ $mhs->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.app')
        </div>
        </div>
    </div> 

    @endforeach


      
  
</div>
@include('layouts.table')

<div class="modal fade" id="modalchartmhs" tabindex="-1" aria-labelledby=modalchartmhs aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id=modalchartmhs>Chart Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.mahasiswamodal.chart')
    </div>
    </div>
</div>

