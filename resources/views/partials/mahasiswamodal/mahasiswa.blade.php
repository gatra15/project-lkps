<form action="/pendidikan/integrasi" method="POST">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                
                {{-- coding modal insert --}}
                <label for="lembaga"> Daya Tampung </label>
                <div class="input-group mb-3">
                    <input type="text" name="judul" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                
                <label for="lembaga" class="fs-4 mb-4 mt-3"> Jumlah Calon Mahasiswa</label>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-6 align-middle">
                      <label for="#">Pendaftar</label>
                      <input type="#" class="form-control form-control-sm mb-3" id="#" >
                    </div>
                    <div class="form-group col-md-6 align-middle">
                      <label for="#">Lulus Seleksi</label>
                      <input type="#" class="form-control form-control-sm mb-3" id="#">
                    </div>
                  </div>
                
                <label for="lembaga"> Mata Kuliah :</label>
                <div class="input-group mb-3">
                    <input type="text" name="mata_kuliah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Bentuk Integrasi :</label>
                <div class="input-group mb-3">
                    <input type="text" name="bentuk_integrasi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
               {{-- coding modal insert akhir --}}

            {{-- script modal insert --}}
            {{-- script modal insert akhir--}}
               

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>