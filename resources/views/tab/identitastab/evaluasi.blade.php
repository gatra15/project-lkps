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
    <form id="mainform" method="post" action="/identitas-pengusul/lembar-evaluasi" enctype="multipart/form-data">

    <p class="d-flex justify-content-between">
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
        <p>
            <b>LAPORAN EVALUASI DIRI</b><br>
        </p>
        </div> 
    </div>

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
</div>