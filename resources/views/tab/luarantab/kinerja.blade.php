<div class="tab-pane fade show" id="kinerja" role="tabpanel" aria-labelledby="kinerja-tab">

  @include('layouts.alert')        
  @hasrole('perwakilan')
  @foreach ($kinerjaLulusan['data'] as $key => $data)
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
      <a class="btn btn-primary" data-toggle="collapse" href="#des5" role="button" aria-expanded="false" aria-controls="des5">
          Deskripsi
      </a>
  </p>
  @can ('download file')
  <a href="/luaran/kinerja-lulusan/download/excel" class="btn btn-success">Excel</a>
  <a href="/luaran/kinerja-lulusan/download/csv" class="btn btn-success">CSV</a>
  <input type="button" class="btn btn-primary" onclick="printDiv('print-table7')" value="Print Document" />
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
      Cara Download PDF
  </button>
  @endcan
  <div class="collapse" id="des5">
      <div class="card card-body">
          <p>
              Tuliskan tingkat/ukuran tempat kerja/berwirausaha lulusan <b>dalam 3 tahun,</b>  mulai TS-4 sampai dengan TS-2, dengan mengikuti format Tabel  berikut ini. Data diambil
              dari hasil studi penelusuran lulusan. <br>

          </p>
      </div> 
  </div>



      @include('tab.luarantab.kinerjatable')

      @foreach ($kinerjaLulusan['data'] as $data)
    <!-- Modal Tambah Edit Kinerja -->
    {{-- bagian id ditambahkan retrieve data caranya kasi tanda - kemudian kasi {{ $data->id }} --}}
    <div class="modal fade" id="modalkinerjaedit-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="modaldosenindustri">Edit Data Kinerja Lulusan </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @include('partials.luarancapaianmodal.kinerjaedit')
      </div>
      </div>
      </div>

    <!-- Modal Tambah Delete Kinerja -->
    <div class="modal fade" id="modalkinerjadelete-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
      <div class="modal-dialog modal-lg">
      <div class="modal-content">
          <div class="modal-header">
          <h5 class="modal-title" id="modaldosenindustri">Delete Data Kinerja Lulusan </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
          </div>
          @include('partials.luarancapaianmodal.kinerjadelete')
      </div>
      </div>
      </div>

      <div class="modal fade" id="modaltolakkiner-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.luarancapaianmodal.tolak5')
          </div>
          </div>
      </div> 
      
      <div class="modal fade" id="modalappkiner-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
          <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
          <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              </div>
              @include('partials.luarancapaianmodal.app5')
          </div>
          </div>
      </div> 
      @endforeach
      
{{-- CONTENT --}}


</div>
@include('layouts.table')