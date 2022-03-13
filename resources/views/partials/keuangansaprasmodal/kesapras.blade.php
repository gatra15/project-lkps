<form action="url('/keuangan-sarana-prasarana')" method="POST">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="pengkuan"> Jenis Penggunaan :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="#" id="inputGroupSelect01">
                        <option selected>-- pilih --</option>
                        <option value="a">Biaya Dosen (Gaji, Honor)</option>
                        <option value="b">Biaya Tenaga Kependidikan (Gaji, Honor)</option>
                        <option value="c">Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)</option>
                        <option value="d">Biaya Operasional Pembelajaran (Bahan dan Peralatan Habis Pakai)</option>
                        <option value="Internasional">Biaya Operasional Tidak Langsung ( Listrik , dll )</option>
                        <option value="Internasional">Biaya operasional kemahasiswaan</option>
                        <option value="Internasional">Biaya Penelitian</option>
                        <option value="Internasional">Biaya PkM</option>
                        <option value="Internasional">Biaya Investasi SDM</option>
                        <option value="Internasional">Biaya Investasi Sarana</option>
                        <option value="Internasional">Biaya Investasi Prasarana</option>
                    </select>
                </div>
                <h4 class="text-center align-middle"> Unit Pengelola Program Studi (Rp.)  :</h4> 
                <label for="pengkuan"> TS-2 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="#" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> TS-1 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="#" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> TS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="#" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <h4 class="text-center align-middle"> Program Studi (Rp.)  :</h4> 
                <label for="pengkuan"> TS-2 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="#" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> TS-1 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="#" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> TS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="#" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>

                
                

               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>