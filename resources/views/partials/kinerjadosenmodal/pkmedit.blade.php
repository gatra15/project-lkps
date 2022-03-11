<form action="/kinerja-dosen/pkm-dtps/{{ $pkm->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosentetap"> Sumber Daya Pembiyaan :</label>
                <p>@php echo $pkm->sumber_detail->sumberdaya @endphp</p>
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="sumber_id" value="{{ $pkm->sumber_id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
                </div>
                <label>Jumlah Judul</label>
                <label for="dosentetap"> TS-2 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ts2" value="{{ $pkm->jumlah_ts2 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS-1 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ts1" value="{{ $pkm->jumlah_ts1 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ts" value="{{ $pkm->jumlah_ts }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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