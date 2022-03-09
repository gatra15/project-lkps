<form action="/profil-dosen/dosen-tidak-tetap/{{ $sdm->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosentetap"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama" value="{{ $sdm->nama }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> NIDN / NIDK :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="no_id" value="{{ $sdm->no_id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Pendidikan Pasca Sarjana :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="pendidikan_pasca_sarjana" value="{{ $sdm->pendidikan_pasca_sarjana }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Bidang Keahlian :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bidang_keahlian" value="{{ $sdm->bidang_keahlian }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Jabatan Akademik :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jabatan_akademik" value="{{ $sdm->jabatan_akademik }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Sertifikat Pendidik Profesional :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="sertifikat_pendidikan_profesi" value="{{ $sdm->sertifikat_pendidikan_profesi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Sertifikat Kompetensi / Profesi / Industri :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="sertifikat_profesi" value="{{ $sdm->sertifikat_profesi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Mata Kuliah yang Diampu pada PS yang Diakreditasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="mata_kuliah_diampu_ps_akreditasi" value="{{ $sdm->mata_kuliah_diampu_ps_akreditasi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="kesesuaian_mata_kuliah_diampu"  id="inputGroupSelect01">
                        <option>pilih...</option>
                        <option {{ $sdm->kesesuaian_mata_kuliah_diampu == '1' ? 'selected' : '' }} value="1">Iya</option>
                        <option {{ $sdm->kesesuaian_mata_kuliah_diampu == '0' ? 'selected' : '' }} value="0">Tidak</option>
                    </select>
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