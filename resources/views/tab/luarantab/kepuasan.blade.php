<div class="tab-pane fade show" id="kepuasan" role="tabpanel" aria-labelledby="kepuasan-tab">

  @include('layouts.alert')        
  @hasrole('perwakilan')
  @foreach ($kepuasanPengguna['kepuasan'] as $data)
    @if ($data->alert == 'success')
    <div class="alert alert-success alert-fixed alert-dismissible fade show center-block"  role="alert">
      element tabel ke - {{ $loop->iteration }} {{ $data->comment }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @elseif ($data->alert == 'warning')
    <div class="alert alert-danger alert-fixed-tolak alert-dismissible fade show center-block"  role="alert">
      {{ $data->comment }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @else
    <div class="alert alert-secondary alert-fixed alert-dismissible fade show center-block"  role="alert">
      element tabel ke - {{ $loop->iteration }} belum ada respon dari dekan.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif
  @endforeach
  @endhasrole

  <p class="d-flex justify-content-between">
      <a class="btn btn-primary" data-toggle="collapse" href="#des6" role="button" aria-expanded="false" aria-controls="des6">
          Deskripsi
      </a>
  </p>
  @can ('download file')
  <a href="/luaran/kepuasan-pengguna/download/excel" class="btn btn-success">Excel</a>
  <a href="/luaran/kepuasan-pengguna/download/csv" class="btn btn-success">CSV</a>
  <input type="button" class="btn btn-primary" onclick="printDiv('print-table5')" value="Print Document" />
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
      Cara Download PDF
  </button>
  @endcan
  <div class="collapse" id="des6">
      <div class="card card-body">
          <p>
              Tuliskan hasil pengukuran kepuasan pengguna lulusan berdasarkan aspek-aspek: <br> 
              1) etika, <br> 
              2) keahlian pada bidang ilmu (kompetensi utama), <br> 
              3) kemampuan berbahasa asing, <br> 
              4) penggunaan teknologi informasi, <br> 
              5) kemampuan berkomunikasi, <br> 
              6) kerjasama dan <br> 
              7) pengembangan diri, <br> 
              dengan mengikuti format Tabel berikut ini. Data diambil dari hasil studi penelusuran lulusan. <br>

          </p>
      </div> 
  </div>
  
      @include('tab.luarantab.kepuasantable')

      @foreach ($kepuasanPengguna['kepuasan'] as $data)
      {{-- bagian id tambahin tanda - dan {{ $data->id }} --}}
    <!-- Modal Tambah Edit Luaran -->
    <div class="modal fade" id="modalkepuasanedit-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="modaldosenindustri">Edit Data Kepuasan </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @include('partials.luarancapaianmodal.kepuasanedit')
      </div>
      </div>
      </div>

    <!-- Modal Tambah Delete Luaran -->
      {{-- bagian id tambahin tanda - dan {{ $data->id }} contoh modaldelet-{{ $data->id }} --}}
    <div class="modal fade" id="modalkepuasandelete-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="modaldosenindustri">Delete Data Kepuasan </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @include('partials.luarancapaianmodal.kepuasandelete')
      </div>
      </div>
      </div>

      <div class="modal fade" id="modaltolakpuas-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.luarancapaianmodal.tolak7')
          </div>
          </div>
      </div> 
      
      <div class="modal fade" id="modalapppuas-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.luarancapaianmodal.app7')
          </div>
          </div>
      </div> 
      @endforeach
  
</div>
@include('layouts.table')