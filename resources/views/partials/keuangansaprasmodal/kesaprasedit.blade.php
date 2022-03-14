<form action="/keuangan-sarana-prasarana/{{ $data->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}
                <label for="pengakuan">{{ $data->sarana_id == 1 ? $data->biaya->text : $data->sarana->text }}</label>
                <input type="hidden" name="sarana_id" value="{{ $data->sarana_id }}">
                <input type="hidden" name="biaya_id" value="{{ $data->biaya_id }}">
                {{-- <h4 class="text-center align-middle"> Unit Pengelola Program Studi (Rp.)  :</h4>  --}}
                <label for="pengakuan"> Unit Pengelola Program Studi (Rp.)  : </label>
                <label for="pengkuan"> TS-2 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts2 }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> TS-1 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts1 }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> TS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <h4 class="text-center align-middle"> Program Studi (Rp.)  :</h4> 
                <label for="pengkuan"> TS-2 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_ts2" value="{{ $data->ps_ts2 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> TS-1 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_ts1" value="{{ $data->ps_ts1 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> TS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_ts" value="{{ $data->ps_ts }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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