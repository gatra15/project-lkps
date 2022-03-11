<form action="/profil-dosen/pembimbing-ta" method="POST">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosentetap"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>

                <label for="" class="fs-5 mt-3 mb-4"> Pada PS Yang Diakreditasi</label>
                <label for="dosentetap"> TS-2 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_akreditasi_ts2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS-1 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_akreditasi_ts1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_akreditasi_ts" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                {{-- <label for="dosentetap"> Rata-rata :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_akreditasi_average" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div> --}}

                <label for="" class="fs-5 mt-3 mb-4"> Pada PS Lain di PT</label>
                <label for="dosentetap"> TS-2 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_lain_ts2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS-1 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_lain_ts1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_lain_ts" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                {{-- <label for="dosentetap"> Rata-rata :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_lain_average" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div> --}}
                {{-- <label for="dosentetap"> Rata-rata Jumlah Bimbingan di Semua Program/Semester :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="average" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div> --}}

               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>