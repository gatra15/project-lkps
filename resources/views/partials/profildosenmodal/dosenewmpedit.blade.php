<form action="/profil-dosen/dosen-ewmp/{{ $ewmp->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL ewmp DOSENS --}}

                <label for="dosenewmp"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama" value="{{ $ewmp->nama }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> DTPS :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="dtps" id="inputGroupSelect01">
                        <option >pilih...</option>
                        <option {{ $ewmp->dtps == '1' ? 'selected' : '' }} value="1">Iya</option>
                        <option {{ $ewmp->dtps == '0' ? 'selected' : '' }} value="0">Tidak</option>
                    </select>
                </div>
                <label for="dosenewmp"> PS yang Diakreditasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_akreditasi" value="{{ $ewmp->ps_akreditasi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> PS Lain di dalam PT :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_lain_dalam_pt" value="{{ $ewmp->ps_lain_dalam_pt }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> PS Lain di luar PT :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_lain_luar_pt" value="{{ $ewmp->ps_lain_luar_pt }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> Penelitian :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="penelitian" value="{{ $ewmp->penelitian }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> PkM :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="pkm" value="{{ $ewmp->pkm }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> Tugas Tambahan dan/atau Penunjang :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="penunjang" value="{{ $ewmp->penunjang }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
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