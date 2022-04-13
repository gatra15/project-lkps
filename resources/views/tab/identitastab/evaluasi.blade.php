<style>
    #upload {
        opacity: 0;
}

div.shadow-sm {
    border: 0.2px rgb(112, 112, 112) solid;
}

#upload-label {
    position: absolute;
    top: 50%;
    left: 1rem;
    transform: translateY(-50%);
}

.image-area {
    border: 2px dashed rgba(14, 12, 12, 0.7);
    padding: 1rem;
    position: relative;
}

.image-area::before {
    content: 'Uploaded image result';
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 0.8rem;
    z-index: 1;
}

.image-area img {
    z-index: 2;
    position: relative;
}

</style>
<div class="tab-pane fade show" id="evaluasi" role="tablist" aria-labelledby="evaluasi-tab">
    

    <p class="d-flex justify-content-between">
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
        <p>
            <b>LAPORAN EVALUASI DIRI</b><br>
        </p>
        </div> 
    </div>

    @hasrole('perwakilan')
    <form id="mainform" method="post" action="/identitas-pengusul/lembar-evaluasi" enctype="multipart/form-data">

    @csrf
    <div class="modal-body">
        <input type="hidden" name="id" class="form-control" value=""> 
            <div class="input-group input-group-sm mb-3">
                
            <div class="input-group input-group-sm mb-3">
                <label class="kanan"> File Evaluasi</label>
                <input type="file" name="attachment" class="form-control lebar" id="customFile" required>
            </div>
            
        </div>
            <div class="modal-footer">
                <button type="submit"  class="btn btn-primary">Simpan</button>
            </div>
    
        </form>
    @endhasrole        
    
    
    @hasrole('dekan')
    @foreach($lembar as $data)

    <div class="modal-footer bg-whitet">

    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaltolakeval-{{ $data->id }}">
      Tolak
    </button>
    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalappeval-{{ $data->id }}">
      Approve
    </button>

    </div>
    
    

    <div class="modal fade" id="modaltolakeval-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.identitasmodal.tolakeval')
        </div>
        </div>
    </div> 

    <div class="modal fade" id="modalappeval-{{ $data->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.identitasmodal.appeval')
        </div>
        </div>
    </div> 

    
    
    @endforeach
    @endhasrole

    @hasanyrole('dekan|asesor')
    @foreach($lembar as $data)
    <p>File Evaluasi Diri : <a class="btn btn-success" href="{{ asset('storage/'.$data->attachment) }}"> File <i class="fas fa-file-archive"></i></a></p>
    @endforeach
    @endhasanyrole

</div>