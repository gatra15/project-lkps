@extends('partials.sidebar')
@extends('layouts.main')

@section('content')


<div class="content-header">
    <div class="container-fluid">
            <h1>MAHASISWA</h1>
    </div>
</div>


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

{{-- content  --}}
@include('tab.mahasiswatab.mahasiswa')

{{-- content --}}
@include('tab.mahasiswatab.asing')
          </div>
    </div>
</div>
          </div>
    </div>
</div>


@endsection
