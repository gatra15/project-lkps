<form action="/mahasiswa/{{ $mhs->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosentetap"> Tahun Akademik :</label>
                <p>@php echo $mhs->tahun->name @endphp</p>
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="tahun_id" value="{{ $mhs->tahun_id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
                </div>
                <label for="dosentetap"> Daya Tampung :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="daya_tampung" value="{{ $mhs->daya_tampung }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Jumlah Calon Mahasiswa</label>
                <label for="dosentetap"> Pendaftar :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="c_pendaftar" value="{{ $mhs->c_pendaftar }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Lulus Seleksi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="c_lulus_seleksi" value="{{ $mhs->c_lulus_seleksi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Jumlah Mahasiswa Baru</label>
                <label for="dosentetap"> Reguler :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="mahasiswa_reguler" value="{{ $mhs->mahasiswa_reguler }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Transfer :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="mahasiswa_transfer" value="{{ $mhs->mahasiswa_transfer }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Jumlah Mahasiswa Aktif</label>
                <label for="dosentetap"> Reguler :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="mahasiswa_aktif_reguler" value="{{ $mhs->mahasiswa_aktif_reguler }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Transfer :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="mahasiswa_aktif_transfer" value="{{ $mhs->mahasiswa_aktif_transfer }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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