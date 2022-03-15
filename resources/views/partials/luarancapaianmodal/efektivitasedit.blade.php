<form action="/luaran-capaian-tridharma/efektifitas/{{ $efektifitas->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                {{-- Beri Value {{ $efektifitas->name }} --}}
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="tahun_id" value="{{ $efektifitas->tahun_id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <div class="form-row justify-content-center">
                <div class="form-group col-md-3 align-middle">
                  <label for="#">Jumlah Mahasiswa Diterima :</label>
                  <input type="text" class="form-control form-control-sm mb-3" name="jumlah_mahasiswa" id="#" value="{{ $efektifitas->jumlah_mahasiswa }}">
                </div>
                </div>
                <div class="form-row justify-content-center">
                <label for="pengkuan"> Jumlah Mahasiswa yang Lulus pada :</label>
                </div>
                {{-- <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">Akhir TS-6</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="mahasiswa_aktif_ts_2" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">Akhir TS-5</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="mahasiswa_aktif_ts_1" id="#">
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">Akhir TS-4</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="mahasiswa_aktif_ts" id="#">
                    </div>
                  </div> --}}
                  
                <div class="form-row justify-content-center">
                  @if ( $efektifitas->id == 1 )
                    <div class="form-group col-md-3 align-middle">
                      <label for="#">Akhir TS-3</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="ts3" id="#" value="{{ $efektifitas->ts3 }}" >
                    </div>
                  @endif
                  @if ( $efektifitas->id == 1 || $efektifitas->id == 2 )
                    <div class="form-group col-md-3 align-middle">
                      <label for="#">Akhir TS-2</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="ts2" id="#" value="{{ $efektifitas->ts2 }}">
                    </div>
                  @endif
                  @if ( $efektifitas->id == 1 || $efektifitas->id == 2 || $efektifitas->id == 3)
                    <div class="form-group col-md-3 align-middle">
                      <label for="#">Akhir TS-1</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="ts1" id="#" value="{{ $efektifitas->ts1 }}">
                    </div>
                  @endif
                    <div class="form-group col-md-3 align-middle">
                      <label for="#">Akhir TS</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="ts" id="#" value="{{ $efektifitas->ts }}">
                    </div>
                  </div>
                
                

               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>