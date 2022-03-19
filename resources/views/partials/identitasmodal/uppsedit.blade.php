<form action="" method="get">
    @csrf
    <div class="modal-body">
        <div class="card-body px-20 pb-20">
            <div class="row">
                
                {{-- coding modal insert --}}
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan" class="kanan"> Jenis Program </label>
                    <input type="text" name="perguruan_tinggi" class="form-control lebar" value="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nama Program Studi  </label>
                    <input type="text" name="unit_pengelola" class="form-control lebar" value="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Jenis Program </label>
                    <input type="text" name="jenis_program" class="form-control lebar" value="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Status/ Peringkat </label>
                    <input type="text" name="prodi" class="form-control lebar" value="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> No dan Tgl SK  </label>
                    <input type="text" name="no_telepon" class="form-control lebar" value="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Tanggal Kadaluarsa </label>
                    <input type="date" name="tanggal_pengisian" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="DD-MM-YYYY" value="{{ old('date') }}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Jumlah Mahasiswa saat TS </label>
                    <input type="text" name="email_website" class="form-control lebar" value="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</form>