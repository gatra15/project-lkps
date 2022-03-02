
<form action="#" method="post">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
                
                    <div class="col-lg-15 mb-1">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="label1">Tahun Akademik</span>
                            <input type="text" class="form-control" placeholder="Masukkan Daya Tampung"
                                aria-label="tahun_akademik" required name="tahun_akademik" aria-describedby="label1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="label2">Daya Tampung</span>
                            <input type="text" class="form-control" placeholder="Masukkan Daya Tampung"
                                aria-label="daya_tampung" required name="daya_tampung" aria-describedby="label2">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="label3">Calon Pendaftar</span>
                            <input type="text" class="form-control" placeholder="Masukkan Calon Pendaftar"
                                aria-label="c_pendaftar" required name="c_pendaftar" aria-describedby="label3">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="label4">Calon Lulus Seleksi</span>
                            <input type="text" class="form-control" placeholder="Masukkan Daya Tampung"
                                aria-label="c_lulus_seleksi" required name="c_lulus_seleksi" aria-describedby="label4">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="label2">Calon Pendaftar</span>
                            <input type="text" class="form-control" placeholder="Masukkan Calon Pendaftar"
                                aria-label="mahasiswa_reguler" required name="mahasiswa_reguler" aria-describedby="label2">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="label1">Daya Tampung</span>
                            <input type="text" class="form-control" placeholder="Masukkan Daya Tampung"
                                aria-label="mahasiswa_transfer" required name="mahasiswa_transfer" aria-describedby="label1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="label2">Calon Pendaftar</span>
                            <input type="text" class="form-control" placeholder="Masukkan Calon Pendaftar"
                                aria-label="mahasiswa_aktif_reguler" required name="mahasiswa_aktif_reguler" aria-describedby="label2">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="label1">Daya Tampung</span>
                            <input type="text" class="form-control" placeholder="Masukkan Daya Tampung"
                                aria-label="mahasiswa_aktif_transfer" required name="mahasiswa_aktif_transfer" aria-describedby="label1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="label2">Calon Pendaftar</span>
                            <input type="text" class="form-control" placeholder="Masukkan Calon Pendaftar"
                                aria-label="tahun_laporan" required name="tahun_laporan" aria-describedby="label2">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="label2">Calon Pendaftar</span>
                            <input type="text" class="form-control" placeholder="Masukkan Calon Pendaftar"
                                aria-label="prodi" required name="prodi" aria-describedby="label2">
                        </div>
                    </div>
            
            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="button" class="btn btn-primary">Tambah</button>
    </div>
</form>