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

                    <div>
                        
                    </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection