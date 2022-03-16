<form action="/mahasiswa/{{ $mhs->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                
                <div class="form-row justify-content-center text-center">
                <label for="dosentetap" class=""> Daya Tampung :</label>
                </div>
                <div class="form-row justify-content-center text-center">
                <div class="form-group col-md-6 align-middle">
                    <input type="number" name="daya_tampung" value="{{ $mhs->daya_tampung }}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                </div>
                <div class="form-row justify-content-center text-center ">
                    <label for="dosentetap" class="fs-5"> Jumlah Calon Mahasiswa</label>
                </div>
                <div class="form-row justify-content-center text-center">
                    <div class="form-group col-md-5 align-middle">
                    <label for="dosentetap"> Pendaftar :</label>
                        <input name="c_pendaftar" value="{{ $mhs->c_pendaftar }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                    </div>
                    <div class="form-group col-md-5 align-middle">
                        <label for="dosentetap"> Lulus Seleksi :</label>
                        <input name="c_lulus_seleksi" value="{{ $mhs->c_lulus_seleksi }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        </div>
                </div>

                <div class="form-row justify-content-center text-center ">
                    <label for="dosentetap" class="fs-5"> Jumlah Mahasiswa Baru</label>
                </div>
                <div class="form-row justify-content-center text-center">
                    <div class="form-group col-md-5 align-middle">
                    <label for="dosentetap"> Reguler :</label>
                        <input name="mahasiswa_reguler" value="{{ $mhs->mahasiswa_reguler }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                    </div>
                    <div class="form-group col-md-5 align-middle">
                        <label for="dosentetap"> Transfer :</label>
                        <input name="mahasiswa_transfer" value="{{ $mhs->mahasiswa_transfer }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        </div>
                </div>

                <div class="form-row justify-content-center text-center ">
                    <label for="dosentetap" class="fs-5"> Jumlah Mahasiswa Aktif </label>
                </div>
                <div class="form-row justify-content-center text-center">
                    <div class="form-group col-md-5 align-middle">
                    <label for="dosentetap"> Reguler :</label>
                        <input name="mahasiswa_aktif_reguler" value="{{ $mhs->mahasiswa_aktif_reguler }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                    </div>
                    <div class="form-group col-md-5 align-middle">
                        <label for="dosentetap"> Transfer :</label>
                        <input name="mahasiswa_aktif_transfer" value="{{ $mhs->mahasiswa_aktif_transfer }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
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