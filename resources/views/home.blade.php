@extends('partials/sidebar')
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
                    <select id="thn_ajaran" class="form-control form-control-lg mb-3" aria-label=".form-control-lg example">
                        <option selected disabled>-- Pilih Tahun --</option>
                        
                        <option value="2010" >2010</option>
                        <option value="2011" >2011</option>
                        <option value="2012" >2012</option>
                        <option value="2013" >2013</option>
                        <option value="2014" >2014</option>
                        <option value="2015" >2015</option>
                        <option value="2016" >2016</option>
                        <option value="2017" >2017</option>
                        <option value="2018" >2018</option>
                        <option value="2019" >2019</option>
                        <option value="2020" >2020</option>
                        <option value="2021" >2021</option>
                        <option value="2022" >2022</option>
                    </select> 
                </div> 

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection