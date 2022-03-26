<div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-info">
      <h5 class="widget-user-desc">Hasil Nilai Tahun <b> {{ session('tahun_laporan') }}</b></h5>
      <h5 class="widget-user-desc">Akreditasi Dari Prodi <b> {{ session()->has('prodi') ? session('prodi') : auth()->user()->prodi->name  }}</b></h5>
    </div>
    <div class="widget-user-image">
      <img class="img-circle elevation-2" src="{{ asset('dist/img/undip.png') }}" alt="User Avatar">
    </div>
    
    <div class="card-footer">
      <div class="row">

        <div class="col-sm-6 border-right">
          <div class="description-block">
            <h5 class="description-header">SKOR NILAI</h5>
            <span class="description-text">400 {{-- value nilai --}}</span>
          </div>
          <!-- /.description-block -->
        </div>
  
    

        <div class="col-sm-6 border-right">
          <div class="description-block">
            <h5 class="description-header">HASIL NILAI</h5>
            
            {{-- @if ($sum_nilai_akhir > 361 && $sum_nilai_akhir <= 400 )
            <span class="description-text">Unggul</span>
            @elseif ($sum_nilai_akhir > 301 && $sum_nilai_akhir <= 361 )
            <span class="description-text">Baik Sekali</span>   
            @elseif ($sum_nilai_akhir > 200 && $sum_nilai_akhir <= 301 )
             <span class="description-text">Baik</span>   
            @elseif ($sum_nilai_akhir < 200 )
            <span class="description-text">Tidak Terakreditasi</span>    
            @else
            <span class="description-text">Tidak Di Ketahui</span>
            @endif --}}

          </div>
          <!-- /.description-block -->
        </div>

      </div>
    </div>

    <div class="modal-footer">

    <form action="/simulasi/approve/{{ $sim->id }}" method="post">
      @method('put')
      @csrf
    <button type="submit" class="btn btn-success btn-sm">
      Approve 
    </button>
    </form>

    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaltolak-{{ $sim->id }}">
      Tolak
    </button>
  </div>

</div>