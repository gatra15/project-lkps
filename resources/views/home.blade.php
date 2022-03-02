@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
<!-- JUDUL -->
<div class="content-header">
    <div class="container-fluid">
        <h2>DASHBOARD</h2>
    </div>

<!-- TAB -->
</div>
<div class="content">
    <div class="container-fluid">
        <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true"> Daftar </a>
            </li>
        </ul>
    </div>

    <!-- ISI  -->
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-pane active" id="dashboard" role="tabpanel">
                
                <div class="mb-5 pb-2">
                    <label for="exampleInputEmail1" class="form-label h3">Pilih Tahun Laporan</label> 
                    <div id="emailHelp" class="form-text">Pilih tahun untuk melihat atau input data laporan.</div>
                    


                    <select name="tahunlaporan" id="thn_ajaran" class="form-control" aria-label=".form-control-lg example">
                        
                        <option selected >-- Pilih Tahun --</option>
                        
                        @foreach ($select as $option)
                        <option value="{{ $option->id }}" >{{ $option->tahun_laporan }}</option>
                        @endforeach
                        
                    </select>

                    {{-- <select class="js-states browser-default select2" name="shopping_id" required id="shopping_id">
                        <option value="option_select" disabled selected>Shoppings</option>
                        @foreach($select as $option)
                            <option value="{{ $option->tahun_laporan }}" {{$company->shopping_id == $shopping->id  ? 'selected' : ''}}>{{ $shopping->fantasyname}}</option>
                        @endforeach
                    </select> --}}

                </div> 

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

@endsection