@extends('partials.sidebar')
@extends('layouts.main')

@section('content')

<!-- JUDUL -->
<div class="content-header">
    <div class="container-fluid">
            <h1>PKM</h1>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
            <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pkm-tab" data-toggle="tab" href="#pkm" role="tab" aria-controls="pkm" aria-selected="true">PkM DTPS yang Melibatkan Mahasiswa</a>
            </li>
        </ul>
    </div>

    <!-- ISI BODY  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-content" id="myTabContent">


            {{-- CONTENT --}}
                @include('tab.pkmtab.pkm')
            {{-- AKHIR CONTENT --}}
        </div>
        </div>
        </div>

</div>
</div>
</div>
@endsection