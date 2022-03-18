<form action="/keuangan-sarana-prasarana/{{ $data->tahun_laporan }}/{{ $data->sarana_id }}/{{ $data->biaya_id }}" method="POST">
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

                Sarana : {{ $data->sarana_id }} <br>
                Biaya : {{ $data->biaya_id }}
                <div class="form-row justify-content-center text-center mt-5">
                  <label for="dosentetap" class="fs-6"> Unit Pengelola Program Studi (Rp.)  :</label>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      @if ($data->sumber_id == 1 && $data->sarana_id == 1)
                        @foreach ($ts2 as $ts)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $ts->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      {{-- @if ($data->sumber_id == 1 && $data->sarana_id == 2)
                        @foreach ($ts2_sarana12 as $data)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 3)
                        @foreach ($ts2_sarana13 as $data)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 4)
                        @foreach ($ts2_sarana14 as $data)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 2)
                        @foreach ($ts2_sarana2 as $data)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 3)
                        @foreach ($ts2_sarana3 as $data)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 4)
                        @foreach ($ts2_sarana4 as $data)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 5)
                        @foreach ($ts2_sarana5 as $data)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 6)
                        @foreach ($ts2_sarana6 as $data)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 7)
                        @foreach ($ts2_sarana7 as $data)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif --}}

                      
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      @if ($data->sumber_id == 1 && $data->sarana_id == 1)
                        @foreach ($ts1 as $data)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      {{-- @if ($data->sumber_id == 1 && $data->sarana_id == 2)
                        @foreach ($ts1_sarana12 as $data)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 3)
                        @foreach ($ts1_sarana13 as $data)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 4)
                        @foreach ($ts1_sarana14 as $data)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 2)
                        @foreach ($ts1_sarana2 as $data)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 3)
                        @foreach ($ts1_sarana3 as $data)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 4)
                        @foreach ($ts1_sarana4 as $data)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 5)
                        @foreach ($ts1_sarana5 as $data)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 6)
                        @foreach ($ts1_sarana6 as $data)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 7)
                        @foreach ($ts1_sarana7 as $data)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif --}}
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      @if ($data->sumber_id == 1 && $data->sarana_id == 1)
                        @foreach ($ts as $data)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      {{-- @if ($data->sumber_id == 1 && $data->sarana_id == 2)
                        @foreach ($ts_sarana12 as $data)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 3)
                        @foreach ($ts_sarana13 as $data)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 4)
                        @foreach ($ts_sarana14 as $data)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 2)
                        @foreach ($ts_sarana2 as $data)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 3)
                        @foreach ($ts_sarana3 as $data)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 4)
                        @foreach ($ts_sarana4 as $data)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 5)
                        @foreach ($ts_sarana5 as $data)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 6)
                        @foreach ($ts_sarana6 as $data)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 7)
                        @foreach ($ts_sarana7 as $data)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $data->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif --}}
                    </div>
                  </div>
                <div class="form-row justify-content-center text-center">
                  <label for="dosentetap" class="fs-6"> Program Studi (Rp.)</label>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      @if ($data->sumber_id == 1 && $data->sarana_id == 1)
                        @foreach ($ts2 as $data)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 2)
                        @foreach ($ts2_sarana12 as $data)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 3)
                        @foreach ($ts2_sarana13 as $data)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 4)
                        @foreach ($ts2_sarana14 as $data)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 2)
                        @foreach ($ts2_sarana2 as $data)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 3)
                        @foreach ($ts2_sarana3 as $data)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 4)
                        @foreach ($ts2_sarana4 as $data)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 5)
                        @foreach ($ts2_sarana5 as $data)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 6)
                        @foreach ($ts2_sarana6 as $data)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 7)
                        @foreach ($ts2_sarana7 as $data)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      @if ($data->sumber_id == 1 && $data->sarana_id == 1)
                        @foreach ($ts1 as $data)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 2)
                        @foreach ($ts1_sarana12 as $data)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 3)
                        @foreach ($ts1_sarana13 as $data)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 4)
                        @foreach ($ts1_sarana14 as $data)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 2)
                        @foreach ($ts1_sarana2 as $data)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 3)
                        @foreach ($ts1_sarana3 as $data)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 4)
                        @foreach ($ts1_sarana4 as $data)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 5)
                        @foreach ($ts1_sarana5 as $data)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 6)
                        @foreach ($ts1_sarana6 as $data)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 7)
                        @foreach ($ts1_sarana7 as $data)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      @if ($data->sumber_id == 1 && $data->sarana_id == 1)
                        @foreach ($ts as $data)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 2)
                        @foreach ($ts_sarana12 as $data)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 3)
                        @foreach ($ts_sarana13 as $data)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 1 && $data->sarana_id == 4)
                        @foreach ($ts_sarana14 as $data)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 2)
                        @foreach ($ts_sarana2 as $data)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 3)
                        @foreach ($ts_sarana3 as $data)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 4)
                        @foreach ($ts_sarana4 as $data)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 5)
                        @foreach ($ts_sarana5 as $data)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 6)
                        @foreach ($ts_sarana6 as $data)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      @if ($data->sumber_id == 7)
                        @foreach ($ts_sarana7 as $data)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $data->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
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