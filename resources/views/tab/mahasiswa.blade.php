@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
{{-- CSS ISENG --}}
<style>
table.table-bordered{
    border:1px solid black;
    margin-top:20px;
  }
table.table-bordered > thead > tr > th{
    border:1px solid black;
}
table.table-bordered > tbody > tr > td{
    border:1px solid black;
}

</style> 


    <div class="content-header">
    <div class="container-fluid">
            <h1>MAHASISWA</h1>
    </div>
</div>
{{-- CSS ISENG AKHIR --}}

<div class="content">
<div class="container-fluid">
        <div class="card">
<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="kualitas-tab" data-toggle="tab" href="#kualitas" role="tab" aria-controls="kualitas" aria-selected="true">Kualitas Input Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="mhsAsing-tab" data-toggle="tab" href="#mhs-asing" role="tab" aria-controls="mhs-asing" aria-selected="false">Mahasiswa Asing</a>
        </li>
      </ul>
      
</div>
<div class="card-body">
    <div class="tab-content mt-3">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="kualitas" role="tabpanel" aria-labelledby="kualitas-tab">
                <p class="d-flex justify-content-between">
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Deskripsi
                    </a>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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
                <input type="button" class="btn btn-primary" onclick="GeneratePdf();" value="Download">
                <button class="btn btn-primary" id="printButton">
                    Print
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        ...
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                    </div>
                </div>
                
{{-- CONTENT --}}
<div id="printElement">
    <table id='form-print' class="table text-center table-bordered">
        <thead class="thead-dark">
            <tr>
                <th class="align-middle" scope="col" rowspan="2">Tahun Akademik</th>
                <th class="align-middle" scope="col" rowspan="2">Daya Tampung</th>
                <th scope="col" colspan="2">Jumlah Calon Mahasiswa</th>
                <th scope="col" colspan="2">Jumlah Mahasiswa Baru</th>
                <th scope="col" colspan="2">Jumlah Mahasiswa Aktif</th>  
            </tr>
            <tr>
                <th scope="col">Pendaftar</th>
                <th scope="col">Lulus Seleksi</th>
                <th scope="col">Reguler</th>
                <th scope="col">Transfer</th>   
                <th scope="col">Reguler</th>
                <th scope="col">Transfer</th>      
            </tr>
    
        </thead>

        <tbody class="text-dark">
            @foreach ($mahasiswa as $mhs)
                <tr>
                    @for ($i=4; $i<=1; $i--);
                    <td>TS-{{ $i }}</td>
                    @endfor
                   <td>{{ $mhs->daya_tampung }}</td> 
                   <td>{{ $mhs->c_pendaftar }}</td> 
                   <td>{{ $mhs->c_lulus_seleksi }}</td> 
                   <td>{{ $mhs->mahasiswa_reguler }}</td> 
                   <td>{{ $mhs->mahasiswa_transfer }}</td> 
                   <td>{{ $mhs->mahasiswa_aktif_reguler }}</td> 
                   <td>{{ $mhs->mahasiswa_aktif_transfer }}</td>
                </tr>
            @endforeach
            

        </tbody>
    </table> 
</div>

    {{-- AKHIR CONTENT --}}
            

            </div>
            <div class="tab-pane fade" id="mhs-asing" role="tabpanel" aria-labelledby="mhsAsing-tab">
                <p class="d-flex justify-content-between">
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Deskripsi
                    </a>
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal2">
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
                <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modal2" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="modal2">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>Mahasiswa</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                    </div>
                </div>
    
    {{-- CONTENT --}}
    
    <table class="table">
        <thead>

            <tr>
                <th scope="col">No</th>
                <th scope="col">Lembaga Mitra</th>
                <th scope="col">Judul Kegiatan Kerjasama</th>
                <th scope="col">Manfaat bagi PS yang Diakretasi</th>
                <th scope="col">Waktu dan Durasi</th>
                <th scope="col">Bukti Kerjasama</th>
            </tr>

        </thead>

        <tbody>
            {{-- @foreach ($kerjasama as $kerja)
            <tr>

            </tr>
            @endforeach --}}
        </tbody>
    </table> 

    {{-- AKHIR CONTENT --}}
            </div>
          </div>
    </div>
</div>
<script>
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
</script>

@endsection
