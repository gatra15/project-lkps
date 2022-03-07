<form action="{{ url('/profil-dosen/dosen-tidak-tetap') }}" method="POST">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosentetap"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama_dosen" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> NIDN / NIDK :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nidn_nidk" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Pendidikan Magister / Magister Terapan / Spesialis :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="pendidikan_pasca_sarjana_magister" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Pendidikan Doktor / Doktor Terapan / Spesialis :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="pendidikan_pasca_sarjana_doktor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Bidang Keahlian :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bidang_keahlian" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Kesesuaian dengan Kompetensi Inti PS :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="kesesuaian_ps" id="inputGroupSelect01">
                        <option selected>pilih...</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <label for="dosentetap"> Jabatan Akademik :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jabatan_akademik" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Sertifikat Pendidik Profesional :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="sertifikat_pendidik_profesi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Sertifikat Kompetensi / Profesi / Industri :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="sertifikat_kompetensi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Mata Kuliah yang Diampu pada PS yang Diakreditasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="mata_kuliah_akreditasi_diampu" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Kesesuaian Bidang Keahlian dengan Mata Kuliah yang Diampu :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="kesesuaian_mata_kuliah_diampu" id="inputGroupSelect01">
                        <option selected>pilih...</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <label for="dosentetap"> Mata Kuliah yang Diampu pada PS Lain :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="mata_kuliah_diampu_ps_lain" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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