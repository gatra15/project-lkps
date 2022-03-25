<div class="card card-widget widget-user">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-warning">
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
            
            {{-- @if ()
        
            @endif
            @if ()
                
            @endif
            @if ()
                
            @endif
            @if ()
                
            @endif --}}
            
            <span class="description-text">A</span>
          </div>
          <!-- /.description-block -->
        </div>

      </div>
    </div>
</div>