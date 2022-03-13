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
<div class="tab-pane fade show" id="penyusun" role="tablist" aria-labelledby="penyusun-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
        <p>
            Di isi oleh tim penyusun
        </p>
        </div> 
    </div>

    <form id="mainform" method="post" action="#">
        @csrf
    <div class="modal-body">
        <input type="hidden" name="id" class="form-control" value="">
            
            <div class="input-group input-group-sm mb-3">
                <label class="kanan"> Nama </label>
                <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <label class="kanan"> NIDN </label>
                <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <label class="kanan"> Jabatan </label>
                <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            </div>
            <div class="input-group input-group-sm mb-3">
                <label class="kanan"> Tanggal Pengisian </label>
                <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="DD-MM-YYYY">
            </div>
            <div class="input-group input-group-sm mb-3 mt-4">
                <div class="input-group input-group-sm mb-3 px-2 py-2 bg-white shadow-sm">
                    <input id="upload" type="file" onchange="readURL(this);" class="form-control border-2">
                    <label id="upload-label" for="upload" class="font-weight-light text-muted">Pilih File Tanda Tangan ( Gambar )</label>
                    <div class="input-group-append">
                        <label for="upload" class="btn btn-light m-0 px-4"> <i class="fa fa-cloud-upload mr-2 text-muted"></i><small class="text-uppercase font-weight-bold text-muted">Pilih File</small></label>
                    </div>
                </div>
            </div>

            {{-- PREVIEW TANDA TANGAN --}}
            <p class="font-italic text-dark text-center">File Tanda Tangan :</p>
            <div class="image-area mt-4"><img id="imageResult" src="#" alt="" class="img-fluid rounded shadow-sm mx-auto d-block"></div>
        </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit"  class="btn btn-primary">Simpan</button>
            </div>
    </form>
</div>

<script>
    /*  ==========================================
    SHOW UPLOADED IMAGE
* ========================================== */
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#imageResult')
                .attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

$(function () {
    $('#upload').on('change', function () {
        readURL(input);
    });
});

/*  ==========================================
    SHOW UPLOADED IMAGE NAME
* ========================================== */
var input = document.getElementById( 'upload' );
var infoArea = document.getElementById( 'upload-label' );

input.addEventListener( 'change', showFileName );
function showFileName( event ) {
  var input = event.srcElement;
  var fileName = input.files[0].name;
  infoArea.textContent = 'File name: ' + fileName;
}
</script>