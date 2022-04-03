<form action="/profil-dosen/pembimbing-ta/{{ $sdm['tahun_laporan'] }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <input type="hidden" name="id" value="{{ $sdm['id'] }}">
                <label for="dosentetap"> Nama Dosen :</label>
                <div class="input-group mb-3">
                    <input type="text" name="nama" value="{{ $sdm['nama'] }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>

                <div class="form-row justify-content-center text-center">
                    <label for="dosentetap" class="fs-6"> Pada PS Yang Diakreditasi</label>
                </div>
                <div class="form-row justify-content-center text-center">
                    <div class="form-group col-md-4 align-middle">
                    <label for="dosentetap"> TS-2 :</label>
                        <input name="jumlah_ps_akreditasi_ts2" class="form-control form-control-sm mb-3" type="number" min="1" value="{{ $sdm['jumlah_ps_akreditasi_ts2'] }}" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                        <label for="dosentetap"> TS-1 :</label>

                            <input name="jumlah_ps_akreditasi_ts1" class="form-control form-control-sm mb-3" type="number" min="1" value="{{ $sdm['jumlah_ps_akreditasi_ts1'] }}" required>
                      </div>
                    <div class="form-group col-md-4 align-middle">
                        <label for="dosentetap"> TS :</label>
                            <input name="jumlah_ps_akreditasi_ts" class="form-control form-control-sm mb-3" type="number" min="1" value="{{ $sdm['jumlah_ps_akreditasi_ts'] }}" required>
                    </div>
                </div>

                <div class="form-row justify-content-center text-center">
                    <label for="dosentetap" class="fs-6"> Pada PS Lain di PT</label>
                </div>
                <div class="form-row justify-content-center text-center">
                    <div class="form-group col-md-4 align-middle">
                    <label for="dosentetap"> TS-2 :</label>
                      <input name="jumlah_ps_lain_ts2" class="form-control form-control-sm mb-3" type="number" min="1" value="{{ $sdm['jumlah_ps_lain_ts2'] }}" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                        <label for="dosentetap"> TS-1 :</label>
                        <input name="jumlah_ps_lain_ts1" class="form-control form-control-sm mb-3" type="number" min="1" value="{{ $sdm['jumlah_ps_lain_ts'] }}" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                        <label for="dosentetap"> TS :</label>
                        <input name="jumlah_ps_lain_ts" class="form-control form-control-sm mb-3" type="number" min="1" value="{{ $sdm['jumlah_ps_lain_ts'] }}" required>
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