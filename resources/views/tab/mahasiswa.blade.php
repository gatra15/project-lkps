@extends('partials.sidebar')
@extends('layouts.main')

@section('content')



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

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        @include('partials.form')
                    </div>
                    </div>
                </div>
                
{{-- CONTENT --}}
<div id="printElement">
    <table id='form-print' class="table text-center table-bordered">
        <thead >
            <tr>
                <th class="align-middle" scope="col" rowspan="2">Tahun Akademik</th>
                <th class="align-middle" scope="col" rowspan="2">Daya Tampung</th>
                <th scope="col" colspan="2">Jumlah Calon Mahasiswa</th>
                <th scope="col" colspan="2">Jumlah Mahasiswa Baru</th>
                <th scope="col" colspan="2">Jumlah Mahasiswa Aktif</th>  
                <th class="align-middle" scope="col" rowspan="2">Action</th>  
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
            <?php $i=4; ?>
            @foreach ($mahasiswa as $index => $mhs)
                <tr>
                   <td>TS-{{ $i }}</td>
                   <td>{{ $mhs->daya_tampung }}</td> 
                   <td>{{ $mhs->c_pendaftar }}</td> 
                   <td>{{ $mhs->c_lulus_seleksi }}</td> 
                   <td>{{ $mhs->mahasiswa_reguler }}</td> 
                   <td>{{ $mhs->mahasiswa_transfer }}</td> 
                   <td>{{ $mhs->mahasiswa_aktif_reguler }}</td> 
                   <td>{{ $mhs->mahasiswa_aktif_transfer }}</td>
                   <td>
                    <ul class="action-list d-flex justify-content-center" id="action">
                        <li><a href="#" class="btn btn-primary m-1"><i class="fas fa-edit"></i></a></li>
                        <li><a href="#" class="btn btn-danger m-1"><i class="fas fa-trash"></i></a></li>
                    </ul></td>
                 <?php $i-- ?>
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
                        <h5 class="modal-title" id="modal2">Tambah Mahasiswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <p>FOrm</p>
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
            <thead>
                <tr>
                    <th class="align-middle" scope="col" rowspan="2">No</th>
                    <th class="align-middle" scope="col" rowspan="2">Program Studi</th>
                    <th scope="col" colspan="3">Jumlah Mahasiswa Aktif</th>
                    <th scope="col" colspan="3" >Jumlah Mahasiswa Asing Penuh Waktu(Full-time)</th>
                    <th scope="col" colspan="3">Jumlah Mahasiswa Asing Paruh Waktu(Part-time)</th>  
                </tr>
                <tr>
                    <th scope="col">TS-2</th>
                    <th scope="col">TS-1</th>  
                    <th scope="col">TS</th>
                    <th scope="col">TS-2</th>
                    <th scope="col">TS-1</th>  
                    <th scope="col">TS</th> 
                    <th scope="col">TS-2</th>
                    <th scope="col">TS-1</th>  
                    <th scope="col">TS</th>     
                </tr>
        
            </thead>

            <tbody class="text-dark">
                @foreach ($mahasiswa_asing as $mhs)
                    <tr>
                        @for ($i = 0; $i < $count; $i++)
                        <td>{{ $i }}</td>
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
        </table> 
    </div>


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
