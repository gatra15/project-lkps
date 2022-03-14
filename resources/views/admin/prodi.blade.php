@extends('partials.sideadmin')
@extends('layouts.main')

@section('content')
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
    
    table thead tr th.putih {
        background-color: white;
        border-bottom: 3px solid black;
    }
    </style> 
    
    
    <div class="content-header">
        <div class="container-fluid">
                <h1>Prodi Access</h1>
        </div>
    </div>
    {{-- CSS ISENG AKHIR --}}
    
    <div class="content">
    <div class="container-fluid">
            <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link  active" id="prodi-tab" data-toggle="tab" href="#prodi" role="tab" aria-controls="prodi" aria-selected="true">List Prodi</a>
            </li>
          </ul>
          
    </div>
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="prodi" role="tabpanel" aria-labelledby="prodi-tab">
                <p class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalprodi">
                        Tambah Data
                    </button>
                </p>
                <div class="input-group input-group-sm rounded align-right" style = "padding: 1px 1px 1px 600px;">
                    <input  width="20%" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                  </div>
    {{-- CONTENT --}}

    <!-- Modal Tambah Data -->
    <div class="modal fade" id="modalprodi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Prodi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.modaladmin.prodi')
        </div>
        </div>
    </div>  

        <table class="table text-center table-bordered">
            <thead class="align-middle">
                <tr>
                    <th class="putih" scope="col" width="1%">#</th>
                    <th class="putih" scope="col" width="40%">Nama</th>
                    <th class="putih" scope="col" width="45%">Tingkat</th>
                    <th class="putih" scope="col" width="24%">Action</th>
                </tr>
       
            </thead>
    
            <tbody class="text-dark">
    
                <tr>
                    
                </tr>

     <!-- Modal Edit Data -->
     <div class="modal fade" id="modalprodiedit-{{--  --}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.modaladmin.prodiedit')
        </div>
        </div>
    </div>  

    <!-- Modal Hapus Data -->
    <div class="modal fade" id="modalprodidelete-{{--  --}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @include('partials.modaladmin.prodidelete')
        </div>
        </div>
    </div>     

            </tbody>
        </table> 
    
        {{-- AKHIR CONTENT --}}
                </div>
              </div>
        </div>
    </div>
        </div>
    </div>

@endsection

