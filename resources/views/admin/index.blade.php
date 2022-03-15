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
                <h1>User Access</h1>
        </div>
    </div>
    {{-- CSS ISENG AKHIR --}}
    
    <div class="content">
    <div class="container-fluid">
            <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link  active" id="kualitas-tab" data-toggle="tab" href="#kualitas" role="tab" aria-controls="kualitas" aria-selected="true">List User</a>
            </li>
          </ul>
          
    </div>
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kualitas" role="tabpanel" aria-labelledby="kualitas-tab">
                <p class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaluser">
                        Tambah Data
                    </button>
                </p>
                <div class="input-group input-group-sm rounded align-right" style = "padding: 1px 1px 1px 600px;">
                    <input  width="20%" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                  </div>
    {{-- CONTENT --}}

      <!-- Modal Tambah Data -->
        <div class="modal fade" id="modaluser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.modaladmin.user')
            </div>
            </div>
        </div>  

        <table class="table text-center table-bordered">
            <thead class="align-middle">
                <tr>
                    <th class="putih" scope="col" width="1%">No</th>
                    <th class="putih" scope="col" width="35%">Nama</th>
                    <th class="putih" scope="col" width="30%">Email</th>
                    <th class="putih" scope="col" width="20%">Role</th>
                    <th class="putih" scope="col" width="24%">Action</th>
                </tr>
       
            </thead>
    
            <tbody class="text-dark">
                @foreach ($user as $users)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $users->name }}</td>
                    <td>{{ $users->email }}</td>
                    <td>{{ $users->role->name }}</td>
                    
                </tr>
    
             <!-- Modal Edit Data -->
            <div class="modal fade" id="modaluseredit-{{ $users->id }}" tabindex="-1" aria-labelledby="modaluseredit" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modaluseredit">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.modaladmin.useredit')
                </div>
                </div>
            </div>  

        <!-- Modal Hapus Data -->
        <div class="modal fade" id="modaluserdelete-{{ $users->id }}" tabindex="-1" aria-labelledby="modaluserdelete" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaluserdelete">Hapus User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.modaladmin.userdelete')
            </div>
            </div>
        </div>     
                @endforeach
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

