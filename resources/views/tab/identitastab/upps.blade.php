<div class="tab-pane fade show" id="upps" role="tablist" aria-labelledby="upps-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
        @hasrole('perwakilan')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltambah">
            Tambah Data
        </button>
        @endhasrole
    </p>

    <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="modallihat" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modallihat">Tambah Data </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.identitasmodal.upps')
        </div>
        </div>
    </div>
    
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
            <p>
                Daftar Program Studi di Unit Pengelola Program Studi (UPPS) <br> <br>
                <b>Keterangan</b> <br>
                4) Diisi dengan jumlah mahasiswa aktif di masing-masing PS saat TS. <br>
            </p>
        </div> 
    </div>
    @include('tab.identitastab.uppstable')

    @foreach ($upps['data'] as $upps)

        <div class="modal fade" id="modaleditupps-{{ $upps->id }}" tabindex="-1" aria-labelledby="modaledit" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaledit">Edit Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.uppsedit')
            </div>
            </div>
        </div>
        
          <div class="modal fade" id="modaldeleteupps-{{ $upps->id }}" tabindex="-1" aria-labelledby="modaldelete" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaldelete">Hapus Data </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.uppsdelete')
            </div>
            </div>
        </div>

        <div class="modal fade" id="modaltolakupps-{{ $upps->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak? </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.tolakupps')
            </div>
            </div>
        </div> 
    
        <div class="modal fade" id="modalappupps-{{ $upps->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.identitasmodal.appupps')
            </div>
            </div>
        </div> 
    @endforeach
</div>