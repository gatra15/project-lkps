<form action="/luaran-capaian-tridharma/publikasi-ilmiah/{{ $ts->tahun_laporan }}/{{ $ts->media_id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosentetap"> Media Publikasi :</label>
                <p>@php echo $ts->media->media @endphp</p>
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="media_id" value="{{ $ts->media_id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
                </div>
                
                <label for="penelitian"> Jumlah Judul </label>
                <div class="form-row justify-content-center text-center">
                    <div class="form-group col-md-4 align-middle">
                    <label for="dosentetap"> TS-2 :</label>
                      <input name="jumlah_ts2" value="{{ $ts->jumlah_ts2 }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                        <label for="dosentetap"> TS-1 :</label>
                        <input name="jumlah_ts1" value="{{ $ts->jumlah_ts1 }}"  class="form-control form-control-sm mb-3" type="number" min="1" required>
                      </div>
                    <div class="form-group col-md-4 align-middle">
                        <label for="dosentetap"> TS :</label>
                        <input name="jumlah_ts" value="{{ $ts->jumlah_ts2 }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
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