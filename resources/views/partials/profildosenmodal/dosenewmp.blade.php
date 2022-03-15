<form action="{{ url('/profil-dosen/dosen-ewmp') }}" method="post">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosenewmp"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> DTPS :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="dtps" id="inputGroupSelect01">
                        <option >pilih...</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <div class="form-row justify-content-center text-center mb-4">
                  <label for="dosentetap" class="fs-6"> Ekuivalen Waktu Mengajar Penuh(EWMP) pada saat TS dalam satuan kredit semester (sks) </label>
                </div>
                <div class="form-row justify-content-center text-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">PS yang Diakreditasi :</label>
                      <input type="number" name="ps_akreditasi" class="form-control form-control-sm mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">PS Lain di dalam PT :</label>
                      <input type="number" name="ps_lain_dalam_pt" class="form-control form-control-sm mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">PS Lain di luar PT :</label>
                      <input type="number" name="ps_lain_luar_pt" class="form-control form-control-sm mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#"> <br> <br> Penelitian :</label>
                      <input type="number" name="penelitian" class="form-control form-control-sm mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#"> <br> <br> PkM :</label>
                      <input type="number" name="pkm" class="form-control form-control-sm mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">Tugas Tambahan dan/atau Penunjang :</label>
                      <input type="number" name="penunjang" class="form-control form-control-sm mb-3" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" id="#" >
                    </div>
                    
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