@extends('partials.sidebar')
@extends('layouts.main')

@section('content')

<div class="content-header">
    <div class="container-fluid">
            <h1>TAB PENELITIAN</h1>
    </div>
</div>

<!-- MENU ATAS -->
<div class="content">
    <div class="container-fluid">
            <div class="card">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                @if ($message = Session::get('error'))
                <div class="alert alert-danger">
                    <strong>{{ $message }}</strong>
                </div>
                @endif
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="mahasiswa-tab" data-toggle="tab" href="#mahasiswa" role="tab" aria-controls="mahasiswa" aria-selected="true">Penelitian DTPS yang Melibatkan Mahasiswa</a>
            </li>
          </ul>
          
    </div>
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">

                @include('tab.penelitiantab.penelitian')
                
        </div>
        </div>
        </div>
    </div>
    </div>
    </div>

@endsection