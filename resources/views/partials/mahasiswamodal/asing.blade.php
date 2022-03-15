<form action="/mahasiswa/mahasiswa-asing" method="POST">
    @csrf
    <div class="modal-body">
        <div class="card-body px-20 pb-20">
            <div class="row">

                {{-- coding modal insert --}}
                <label for="lembaga"> Program Studi : </label>
                <div class="input-group mb-3">
                    <input type="text" name="program_studi" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <div class="form-row justify-content-center text-center">
                  <label for="dosentetap" class="fs-6"> Jumlah Mahasiswa Aktif</label>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      <input type="number" class="form-control form-control-sm mb-3" name="mahasiswa_aktif_ts_2" id="#" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      <input type="number" class="form-control form-control-sm mb-3" name="mahasiswa_aktif_ts_1" id="#" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      <input type="number" class="form-control form-control-sm mb-3" name="mahasiswa_aktif_ts" id="#" required>
                    </div>
                  </div>
                <div class="form-row justify-content-center text-center">
                  <label for="dosentetap" class="fs-6"> Jumlah Mahasiswa Asing Penuh Waktu <i>(Full-time)</i></label>
                </div>
  
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      <input type="number" class="form-control form-control-sm mb-3" name="mahasiswa_asing_ft_ts_2" id="#"  required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      <input type="number" class="form-control form-control-sm mb-3" name="mahasiswa_asing_ft_ts_1" id="#" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      <input type="number" class="form-control form-control-sm mb-3" name="mahasiswa_asing_ft_ts" id="#" required>
                    </div>
                  </div>
                <div class="form-row justify-content-center text-center">
                  <label for="dosentetap" class="fs-6"> Jumlah Mahasiswa Asing Paruh Waktu <i>(Part-time)</i></label>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      <input type="number" class="form-control form-control-sm mb-3" name="mahasiswa_asing_pt_ts_2" id="#"  required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      <input type="number" class="form-control form-control-sm mb-3" name="mahasiswa_asing_pt_ts_1" id="#" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      <input type="number" class="form-control form-control-sm mb-3" name="mahasiswa_asing_pt_ts" id="#" required>
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