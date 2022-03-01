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
              <a class="nav-link active" id="kualitas-tab" data-toggle="tab" href="#kualitas" role="tab" aria-controls="kualitas" aria-selected="true">List User</a>
            </li>
          </ul>
          
    </div>
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kualitas" role="tabpanel" aria-labelledby="kualitas-tab">
                    <a href="#" class="btn btn-primary">Tambah Data</a>
    {{-- CONTENT --}}
        
        <table class="table text-center table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
       
            </thead>
    
            <tbody class="text-dark">
    
                <tr>
                </tr>
    
            </tbody>
        </table> 
    
        {{-- AKHIR CONTENT --}}
                </div>
              </div>
        </div>
    </div>
@endsection