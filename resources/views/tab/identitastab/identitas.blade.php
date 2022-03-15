<div class="tab-pane fade show active" id="identitas" role="tablist" aria-labelledby="kualitas-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
    </p>
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
        <p>
            Di isi oleh pengusul
        </p>
        </div> 
    </div>

    <form id="mainform" method="post" action="/identitas-pengusul">
        @csrf


            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Perguruan Tinggi <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="perguruan_tinggi" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Unit Pengelola Program Studi    <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="unit_pengelola" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Jenis Program   <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="jenis_program" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Nama Program Studi   <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="prodi" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Alamat   <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="alamat" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Nomor Telepon    <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="no_telepon" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">E-Mail dan Website    <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="email_website" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Nomor SK Pendirian PT 1)   <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="no_sk1" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Tanggal SK Pendirian PT   <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="tanggal_sk_pendirian" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Pejabat Penandatangan SK Pendirian PT   <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="pejabat_penandatanganan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Nomor SK Pembukaan PS 2)   <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="no_sk2" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Tanggal SK Pembukaan PS  <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="tanggal_sk_pembukaan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Pejabat Penandatangan SK Pembukaan PS  <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="pejabat_pembukaan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> SK Pembukaan PS  <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="sk_pembukaan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Tahun Pertama Kali Menerima Mahasiswa  <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="tahun_pertama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Peringkat Terbaru Akreditasi PS  <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="peningkatan_terbaru" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Nomor SK BAN-PT  <span>:</span></label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" value="" name="nomor_sk_banpt" required>
                </div>
            </div>

    


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit"  class="btn btn-primary">Simpan</button>
        </div>

</form>   
</div>
