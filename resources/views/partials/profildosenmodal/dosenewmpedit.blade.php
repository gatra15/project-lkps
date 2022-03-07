<form action="/profil-dosen/dosen-ewmp/{{ $sdm->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosenewmp"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama" value="{{ $sdm->nama }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> DTPS :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="dtps" id="inputGroupSelect01">
                        <option >pilih...</option>
                        <option {{ $sdm->dtps == '1' ? 'selected' : '' }} value="1">Iya</option>
                        <option {{ $sdm->dtps == '0' ? 'selected' : '' }} value="0">Tidak</option>
                    </select>
                </div>
                <label for="dosenewmp"> PS yang Diakreditasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_akreditasi" value="{{ $sdm->ps_akreditasi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> PS Lain di dalam PT :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_lain_dalam_pt" value="{{ $sdm->ps_lain_dalam_pt }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> PS Lain di luar PT :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_lain_luar_pt" value="{{ $sdm->ps_lain_luar_pt }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> Penelitian :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="penelitian" value="{{ $sdm->penelitian }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> PkM :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="pkm" value="{{ $sdm->pkm }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> Tugas Tambahan dan/atau Penunjang :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="penunjang" value="{{ $sdm->penunjang }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> Jumlah (sks) :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="sks" value="{{ $sdm->sks }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> Rata-rata per Semester (sks) :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="average_per_sks" value="{{ $sdm->average_per_sks }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
               {{-- coding modal insert akhir --}}

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>