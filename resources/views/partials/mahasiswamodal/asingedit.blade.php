<form action="/mahasiswa/mahasiswa-asing/{{ $mhs->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        <div class="card-body px-20 pb-20">
            <div class="row">

                {{-- coding modal insert --}}
                <label for="lembaga"> Program Studi : </label>
                <div class="input-group mb-3">
                    <input type="text" name="program_studi" value="{{ $mhs->program_studi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga" class="fs-6 my-2"> Jumlah Mahasiswa Aktif </label>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      <input type="text" class="form-control form-control-sm mb-3" value="{{ $mhs->mahasiswa_aktif_ts_2 }}" name="mahasiswa_aktif_ts_2" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      <input type="text" class="form-control form-control-sm mb-3" value="{{ $mhs->mahasiswa_aktif_ts_1 }}" name="mahasiswa_aktif_ts_1" id="#">
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      <input type="text" class="form-control form-control-sm mb-3" value="{{ $mhs->mahasiswa_aktif_ts }}" name="mahasiswa_aktif_ts" id="#">
                    </div>
                  </div>
                <label for="lembaga" class="fs-6 my-2"> Jumlah Mahasiswa Asing Penuh Waktu <i>(Full-time)</i> </label>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      <input type="text" class="form-control form-control-sm mb-3" value="{{ $mhs->mahasiswa_asing_ft_ts_2 }}" name="mahasiswa_asing_ft_ts_2" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      <input type="text" class="form-control form-control-sm mb-3" value="{{ $mhs->mahasiswa_asing_ft_ts_1 }}" name="mahasiswa_asing_ft_ts_1" id="#">
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      <input type="text" class="form-control form-control-sm mb-3" value="{{ $mhs->mahasiswa_asing_ft_ts }}" name="mahasiswa_asing_ft_ts" id="#">
                    </div>
                  </div>
                <label for="lembaga" class="fs-6 my-2"> Jumlah Mahasiswa Asing Paruh Waktu <i>(Part-time)</i> </label>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      <input type="text" class="form-control form-control-sm mb-3" value="{{ $mhs->mahasiswa_asing_pt_ts_2 }}" name="mahasiswa_asing_pt_ts_2" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      <input type="text" class="form-control form-control-sm mb-3" value="{{ $mhs->mahasiswa_asing_pt_ts_1 }}" name="mahasiswa_asing_pt_ts_1" id="#">
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      <input type="text" class="form-control form-control-sm mb-3" value="{{ $mhs->mahasiswa_asing_pt_ts }}" name="mahasiswa_asing_pt_ts" id="#">
                    </div>
                  </div>
               {{-- coding modal insert akhir --}}

            </div>
        </div>
    </div>

    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>