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
                  <label for="#" class="text-center">Jumlah Mahasiswa Diterima :</label>
                  <input type="text" class="form-control form-control-sm mb-3" name="jumlah_mahasiswa" id="#" value="{{ $efektifitas->jumlah_mahasiswa }}">
                <div class="form-row justify-content-center">
                <label for="pengkuan"> Jumlah Mahasiswa yang Lulus pada :</label>
                </div>
                  
                  @if ( $efektifitas->id == 1 )
                      <label for="#">Akhir TS-3</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="ts3" id="#" value="{{ $efektifitas->ts3 }}" >
                  @endif
                  @if ( $efektifitas->id == 1 || $efektifitas->id == 2 )
  
                      <label for="#">Akhir TS-2</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="ts2" id="#" value="{{ $efektifitas->ts2 }}">
                  @endif
                  @if ( $efektifitas->id == 1 || $efektifitas->id == 2 || $efektifitas->id == 3)
                      <label for="#">Akhir TS-1</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="ts1" id="#" value="{{ $efektifitas->ts1 }}">
                  @endif
                      <label for="#">Akhir TS</label>
                      <input type="text" class="form-control form-control-sm mb-3" name="ts" id="#" value="{{ $efektifitas->ts }}">
                
                

               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>