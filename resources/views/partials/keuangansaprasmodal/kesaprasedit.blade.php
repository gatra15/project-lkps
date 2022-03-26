<form action="/keuangan-sarana-prasarana/{{ $data->tahun_laporan }}/{{ $data->sarana_id }}/{{ $data->code }}" method="POST">
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
                <div class="form-row justify-content-between ">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>
                      @if ($data->sarana_id == 1)
                      {{-- Biaya 1 --}}
                        @if ($data->biaya_id == 1)
                          @foreach ($ts2 as $value)
                            <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 2 --}}
                        @if ($data->biaya_id == 2)
                          @foreach ($ts2_sarana12 as $value)
                            <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 3 --}}
                        @if ($data->biaya_id == 3)
                          @foreach ($ts2_sarana13 as $value)
                            <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 4 --}}
                        @if ($data->biaya_id == 4)
                          @foreach ($ts2_sarana14 as $value)
                            <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                      @endif

                      {{-- Sarana 2 --}}
                      @if ($data->sarana_id == 2)
                        @foreach ($ts2_sarana2 as $value)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 3 --}}
                      @if ($data->sarana_id == 3)
                        @foreach ($ts2_sarana3 as $value)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 4 --}}
                      @if ($data->sarana_id == 4)
                        @foreach ($ts2_sarana4 as $value)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 5 --}}
                      @if ($data->sarana_id == 5)
                        @foreach ($ts2_sarana5 as $value)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 6 --}}
                      @if ($data->sarana_id == 6)
                        @foreach ($ts2_sarana6 as $value)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 7 --}}
                      @if ($data->sarana_id == 7)
                        @foreach ($ts2_sarana7 as $value)
                          <input type="number" name="unit_pengelola_ts2" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      

                      
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      @if ($data->sarana_id == 1)
                        {{-- Biaya 1 --}}
                        @if ($data->biaya_id == 1)
                          @foreach ($ts1 as $value)
                            <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 2 --}}
                        @if ($data->biaya_id == 2)
                          @foreach ($ts1_sarana12 as $value)
                            <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 3 --}}
                        @if ($data->biaya_id == 3)
                          @foreach ($ts1_sarana13 as $value)
                            <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 4 --}}
                        @if ($data->biaya_id == 4)
                          @foreach ($ts1_sarana14 as $value)
                            <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                      @endif
                      
                      {{-- Sarana 2 --}}
                      @if ($data->sarana_id == 2)
                        @foreach ($ts1_sarana2 as $value)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 3 --}}
                      @if ($data->sarana_id == 3)
                        @foreach ($ts1_sarana3 as $value)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 4 --}}
                      @if ($data->sarana_id == 4)
                        @foreach ($ts1_sarana4 as $value)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 5 --}}
                      @if ($data->sarana_id == 5)
                        @foreach ($ts1_sarana5 as $value)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 6 --}}
                      @if ($data->sarana_id == 6)
                        @foreach ($ts1_sarana6 as $value)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 7 --}}
                      @if ($data->sarana_id == 7)
                        @foreach ($ts1_sarana7 as $value)
                          <input type="number" name="unit_pengelola_ts1" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      @if ($data->sarana_id == 1)
                        {{-- Biaya 1 --}}
                        @if ($data->biaya_id == 1)
                          @foreach ($ts as $value)
                            <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 2 --}}
                        @if ($data->biaya_id == 2)
                          @foreach ($ts_sarana12 as $value)
                            <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 3 --}}
                        @if ($data->biaya_id == 3)
                          @foreach ($ts_sarana13 as $value)
                            <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 4 --}}
                        @if ($data->biaya_id == 4)
                          @foreach ($ts_sarana14 as $value)
                            <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                          @endforeach
                        @endif
                      @endif
                      
                      {{-- Sarana 2 --}}
                      @if ($data->sarana_id == 2)
                        @foreach ($ts_sarana2 as $value)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 3 --}}
                      @if ($data->sarana_id == 3)
                        @foreach ($ts_sarana3 as $value)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 4 --}}
                      @if ($data->sarana_id == 4)
                        @foreach ($ts_sarana4 as $value)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 5 --}}
                      @if ($data->sarana_id == 5)
                        @foreach ($ts_sarana5 as $value)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 6 --}}
                      @if ($data->sarana_id == 6)
                        @foreach ($ts_sarana6 as $value)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 7 --}}
                      @if ($data->sarana_id == 7)
                        @foreach ($ts_sarana7 as $value)
                          <input type="number" name="unit_pengelola_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      
                    </div>
                  </div>
                  
                <div class="form-row justify-content-center text-center">
                  <label for="dosentetap" class="fs-6"> Program Studi (Rp.)</label>
                </div>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-2</label>

                      @if ($data->sarana_id == 1)
                      {{-- Biaya 1 --}}
                        @if ($data->biaya_id == 1)
                          @foreach ($ts2 as $value)
                            <input type="number" name="ps_ts2" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 2 --}}
                        @if ($data->biaya_id == 2)
                          @foreach ($ts2_sarana12 as $value)
                            <input type="number" name="ps_ts2" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 3 --}}
                        @if ($data->biaya_id == 3)
                          @foreach ($ts2_sarana13 as $value)
                            <input type="number" name="ps_ts2" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 4 --}}
                        @if ($data->biaya_id == 4)
                          @foreach ($ts2_sarana14 as $value)
                            <input type="number" name="ps_ts2" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                      @endif

                      {{-- Sarana 2 --}}
                      @if ($data->sarana_id == 2)
                        @foreach ($ts2_sarana2 as $value)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 3 --}}
                      @if ($data->sarana_id == 3)
                        @foreach ($ts2_sarana3 as $value)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 4 --}}
                      @if ($data->sarana_id == 4)
                        @foreach ($ts2_sarana4 as $value)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 5 --}}
                      @if ($data->sarana_id == 5)
                        @foreach ($ts2_sarana5 as $value)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 6 --}}
                      @if ($data->sarana_id == 6)
                        @foreach ($ts2_sarana6 as $value)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 7 --}}
                      @if ($data->sarana_id == 7)
                        @foreach ($ts2_sarana7 as $value)
                          <input type="number" name="ps_ts2" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                     
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS-1</label>
                      @if ($data->sarana_id == 1)
                      {{-- Biaya 1 --}}
                        @if ($data->biaya_id == 1)
                          @foreach ($ts1 as $value)
                            <input type="number" name="ps_ts1" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 2 --}}
                        @if ($data->biaya_id == 2)
                          @foreach ($ts1_sarana12 as $value)
                            <input type="number" name="ps_ts1" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 3 --}}
                        @if ($data->biaya_id == 3)
                          @foreach ($ts1_sarana13 as $value)
                            <input type="number" name="ps_ts1" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 4 --}}
                        @if ($data->biaya_id == 4)
                          @foreach ($ts1_sarana14 as $value)
                            <input type="number" name="ps_ts1" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                      @endif

                      {{-- Sarana 2 --}}
                      @if ($data->sarana_id == 2)
                        @foreach ($ts1_sarana2 as $value)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 3 --}}
                      @if ($data->sarana_id == 3)
                        @foreach ($ts1_sarana3 as $value)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 4 --}}
                      @if ($data->sarana_id == 4)
                        @foreach ($ts1_sarana4 as $value)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 5 --}}
                      @if ($data->sarana_id == 5)
                        @foreach ($ts1_sarana5 as $value)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 6 --}}
                      @if ($data->sarana_id == 6)
                        @foreach ($ts1_sarana6 as $value)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 7 --}}
                      @if ($data->sarana_id == 7)
                        @foreach ($ts1_sarana7 as $value)
                          <input type="number" name="ps_ts1" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                        @endforeach
                      @endif
                      
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">TS</label>
                      @if ($data->sarana_id == 1)
                      {{-- Biaya 1 --}}
                        @if ($data->biaya_id == 1)
                          @foreach ($ts as $value)
                            <input type="number" name="ps_ts" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 2 --}}
                        @if ($data->biaya_id == 2)
                          @foreach ($ts_sarana12 as $value)
                            <input type="number" name="ps_ts" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 3 --}}
                        @if ($data->biaya_id == 3)
                          @foreach ($ts_sarana13 as $value)
                            <input type="number" name="ps_ts" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                        {{-- Biaya 4 --}}
                        @if ($data->biaya_id == 4)
                          @foreach ($ts_sarana14 as $value)
                            <input type="number" name="ps_ts" class="form-control" value="{{ $value->ps_ts }}" id="#"  required>
                          @endforeach
                        @endif
                      @endif

                      {{-- Sarana 2 --}}
                      @if ($data->sarana_id == 2)
                        @foreach ($ts2_sarana2 as $value)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 3 --}}
                      @if ($data->sarana_id == 3)
                        @foreach ($ts2_sarana3 as $value)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 4 --}}
                      @if ($data->sarana_id == 4)
                        @foreach ($ts2_sarana4 as $value)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 5 --}}
                      @if ($data->sarana_id == 5)
                        @foreach ($ts2_sarana5 as $value)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 6 --}}
                      @if ($data->sarana_id == 6)
                        @foreach ($ts2_sarana6 as $value)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
                        @endforeach
                      @endif

                      {{-- Sarana 7 --}}
                      @if ($data->sarana_id == 7)
                        @foreach ($ts2_sarana7 as $value)
                          <input type="number" name="ps_ts" class="form-control" value="{{ $value->unit_pengelola_ts }}" id="#"  required>
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