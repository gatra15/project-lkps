<<<<<<< HEAD
<form action="/profil-dosen/pembimbing-ta/{{ $sdm->id }}" method="POST">
    @method('put')
=======
{{-- <form action="/kinerja-dosen" method="post"> --}}
>>>>>>> 05dc11eaa73031f6da20d8c7f54eb9a6633bc0f8
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

<<<<<<< HEAD
                <label for="dosentetap"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama" value="{{ $sdm->nama }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <h5>Jumlah Mahasiswa yang Dibimbing</h5>
                <h6>pada PS yang Diakreditasi</h6>
                <label for="dosentetap"> TS-2 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_akreditasi_ts2" value="{{ $sdm->jumlah_ps_akreditasi_ts2 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS-1 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_akreditasi_ts1" value="{{ $sdm->jumlah_ps_akreditasi_ts1 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_akreditasi_ts"
                    value="{{ $sdm->jumlah_ps_akreditasi_ts }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Rata-rata :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_akreditasi_average" value="{{ $sdm->jumlah_ps_akreditasi_average }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <h6>pada PS Lain di PT</h6>
                <label for="dosentetap"> TS-2 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_lain_ts2" value="{{ $sdm->jumlah_ps_lain_ts2 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS-1 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_lain_ts1" value="{{ $sdm->jumlah_ps_lain_ts1 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_lain_ts" value="{{ $sdm->jumlah_ps_lain_ts }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Rata-rata :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ps_lain_average"
                    value="{{ $sdm->jumlah_ps_lain_average }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Rata-rata Jumlah Bimbingan di Semua Program/Semester :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="average" value="{{ $sdm->average }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
=======
                <label for="pengkuan"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Bidang Keahlian :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bidang_keahlian" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Rekognisi dan Bukti Pendukung :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bukti_pendukung" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Tingkat :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="tingkat" id="inputGroupSelect01">
                        <option selected>pilih...</option>
                        <option value="Wilayah">Wilayah</option>
                        <option value="Nasional">Nasional</option>
                        <option value="Internasional">Internsional</option>
                    </select>
                </div>
                <label for="pengkuan"> Tahun:</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="tahun" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                
                
>>>>>>> 05dc11eaa73031f6da20d8c7f54eb9a6633bc0f8

               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
<<<<<<< HEAD
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
=======
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
>>>>>>> 05dc11eaa73031f6da20d8c7f54eb9a6633bc0f8
    </div>
</form>