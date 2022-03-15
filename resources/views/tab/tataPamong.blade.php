@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
<!-- JUDUL -->
<body>
<div class="content-header">
    <div class="container-fluid">
            <h1>TAB TATA PAMONG, TATA KELOLA, DAN KERJASAMA</h1>
    </div>
</div>


<div class="content">
    <div class="container-fluid">
        <div class="card">
            {{-- Card Header --}}
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
                      <a class="nav-link active" id="tatapamong-tab" data-toggle="tab" href="#tatapamong" role="tab" aria-controls="tatapamong" aria-selected="true">Tata Pamong Kerjasama </a>
                    </li>
                </ul>
            </div>
            {{-- End Card Header --}}
            
            {{-- Card Body --}}
            <div class="card-body">
                <div class="tab-content mt-3">
                    <div class="tab-content" id="myTabContent">

                        {{-- TATA PAMONG AWAL --}}
                        @include('tab.tatapamongtab.tatapamong')
                        {{-- TATA PAMONG AKHIR  --}}
                        
                    </div>
                </div>
            </div>
            {{-- End Card Body --}}
        </div>
    </div>
</div>

</body>
@endsection