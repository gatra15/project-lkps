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
            @foreach ($simulasi as $sim)
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="simulasi-tab" data-toggle="tab" href="#simulasi-{{ $sim->id }}" role="tab" aria-controls="simulasi" aria-selected="true"> Simulasi Penilaian </a>
                    </li>
                    {{-- <li class="nav-item">
                      <a class="nav-link" id="simpan-tab" data-toggle="tab" href="#simpan" role="tab" aria-controls="simpan" aria-selected="true"> Data Penilaian </a>
                    </li> --}}
                </ul>
            </div>
            {{-- End Card Header --}}
            
            {{-- Card Body --}}
            <div class="card-body">
                <div class="tab-content mt-3">
                    <div class="tab-content" id="myTabContent">
                    
                    <div class="tab-pane fade show active" id="simulasi-{{ $sim->id }}" role="tabpanel" aria-labelledby="simulasi-tab" >
                        <p class="d-flex justify-content-between">
                            <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
                                    Deskripsi
                            </a>
                        </p>
                        <div class="collapse" id="des1">
                                <div class="card card-body">
                                    <p>
                                    Isi form yang berwarna putih sesuai panduan dari PDF
                                    </p>
                                </div> 
                            </div>
                        @include('partials.simulasi.simulasitable')
                    </div>

                    {{-- <div class="tab-pane fade show" id="simpan" role="tabpanel" aria-labelledby="simpan-tab" >
                        <p class="d-flex justify-content-between">
                            <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
                                    Deskripsi
                            </a>
                        </p>
                        <div class="collapse" id="des1">
                                <div class="card card-body">
                                    <p>
                                    Hasil Penilaian Akhir
                                    </p>
                                </div> 
                            </div>
                        @include('partials.simulasi.nilaitable')
                           
                    </div> --}}
            
    <div class="modal fade" id="modalhitung-{{ $sim->id }}" tabindex="-1" aria-labelledby="modallihat" aria-hidden="true">
        <div class="modal-dialog modal">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modallihat"> Hasil  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.simulasi.hitungnilai')
        </div>
        </div>
    </div>       

    <div class="modal fade" id="modaldel-{{ $sim->id }}" tabindex="-1" aria-labelledby="modallihat" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modallihat"> Hasil  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.simulasi.kosongkan')
        </div>
        </div>
    </div>       
    @endforeach

    </div>
    </div>
    </div>
</div>
</div>
</div>
@endsection
