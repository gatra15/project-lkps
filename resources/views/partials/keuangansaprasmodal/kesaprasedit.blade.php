<form action="/keuangan-sarana-prasarana/{{ $data->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}  
                <div class="form-row justify-content-center text-center mb-6">
                    <label for="dosentetap" class="fs-6"> {{ $data->sarana_id == 1 ? $data->biaya->text : $data->sarana->text }}</label>
                </div>
                <input type="hidden" name="sarana_id" value="{{ $data->sarana_id }}" >
                <input type="hidden" name="biaya_id" value="{{ $data->biaya_id }}" >
                <div class="form-row justify-content-center text-center mt-5">
                  <label for="dosentetap" class="fs-6"> Unit Pengelola Program Studi (Rp.)  :</label>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts2 }}" id="#"  required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts1 }}" id="#" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#" required>
                    </div>
                  </div>
                <div class="form-row justify-content-center text-center">
                  <label for="dosentetap" class="fs-6"> Program Studi (Rp.)</label>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      <input type="number" name="ps_ts2" value="{{ $data->ps_ts2 }}" class="form-control" id="#"  required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      <input type="number" name="ps_ts1" value="{{ $data->ps_ts1 }}" class="form-control"  id="#" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      <input type="number" name="ps_ts" value="{{ $data->ps_ts }}" class="form-control" id="#" required>
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