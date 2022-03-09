@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
<!-- JUDUL -->
<body>
<div class="content-header">
    <div class="container-fluid">
            <h1>TATA PAMONG, TATA KELOLA, DAN KERJASAMA</h1>
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
                      <a class="nav-link active" id="pendidikan-tab" data-toggle="tab" href="#pendidikan" role="tab" aria-controls="pendidikan" aria-selected="true">Pendidikan</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="penelitian-tab" data-toggle="tab" href="#penelitian" role="tab" aria-controls="penelitian" aria-selected="false">Penelitian</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pkm-tab" data-toggle="tab" href="#pkm" role="tab" aria-controls="pkm" aria-selected="false">Pengabdian Kepada Masyarakat</a>
                    </li>
                </ul>
            </div>
            {{-- End Card Header --}}
            
            {{-- Card Body --}}
            <div class="card-body">
                <div class="tab-content mt-3">
                    <div class="tab-content" id="myTabContent">

                        {{-- TATA PAMONG AWAL --}}
                        @include('tab.tatapamongtab.pendidikan')
                        {{-- TATA PAMONG AKHIR  --}}

                        {{-- Tab --}}
                        @include('tab.tatapamongtab.penelitian')
                        {{-- End Tab --}}


                        {{-- Tab --}}
                        @include('tab.tatapamongtab.pkm')
                        {{-- End Tab --}}
                        
                    </div>
                </div>
            </div>
            {{-- End Card Body --}}
        </div>
    </div>
</div>

</body>
@endsection