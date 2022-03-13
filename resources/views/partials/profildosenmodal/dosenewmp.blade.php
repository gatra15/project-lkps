<form action="{{ url('/profil-dosen/dosen-ewmp') }}" method="post">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosenewmp"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> DTPS :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="dtps" id="inputGroupSelect01">
                        <option >pilih...</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <label for="dosenewmp"> PS yang Diakreditasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_akreditasi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> PS Lain di dalam PT :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_lain_dalam_pt" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> PS Lain di luar PT :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ps_lain_luar_pt" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> Penelitian :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="penelitian" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> PkM :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="pkm" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <label for="dosenewmp"> Tugas Tambahan dan/atau Penunjang :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="penunjang" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
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