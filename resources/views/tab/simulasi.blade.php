@extends('partials.sidebar')
@extends('layouts.main2')




@section('content')
<div class="content-header">
    <div class="container-fluid">
            <h1>TAB PENILAIAN</h1>
    </div>
</div>

<div class="content">
    <div class="container-fluid">
        <div class="card">

            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="tatapamong-tab" data-toggle="tab" href="#tatapamong" role="tab" aria-controls="tatapamong" aria-selected="true">Tata Pamong Kerjasama </a>
                    </li>
                </ul>
            </div>
            {{-- End Card Header --}}
            
            {{-- Card Body --}}
            <div class="card-body">
                <div class="tab-content mt-3">
                    <div class="tab-content" id="myTabContent">

            <div id="print-table" class="container-fluid col-md-12 col-sm-6">
                <table class="table table-hover table-bordered">
                    <thead class="text-center" >
                        <tr >
                            <th width="1%">No</th>
                            <th width="10%">Indikator</th>
                            <th width="15%">Rumus</th>
                            <th width="5%">Faktor</th>
                            <th width="5%">Nilai Akreditasi
                            </th>
                        </tr>
                
                    </thead>
                
                    <tbody class="text-dark align-middle">
                        <tr>
                            
                        </tr>

                        <tr>

                        </tr>
                        
                    </tbody>
                </table>
            </div>

            
            
            
    </div>
    </div>
    </div>
</div>
</div>
</div>
@endsection
