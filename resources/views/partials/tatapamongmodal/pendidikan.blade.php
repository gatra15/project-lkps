<form action="{{ url('/tata-pamong-tata-kelola-kerjasama') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                
                {{-- coding modal insert --}}
                <label for="lembaga"> Tema :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="tridharma" id="inputGroupSelect01" required>
                        <option selected>pilih...</option>
                        <option value="Pendidikan">Pendidikan</option>
                        <option value="Penelitian">Penelitian</option>
                        <option value="Pengabdian Kepada Masyarakat">Pengabdian Kepada Masyarakat</option>
                    </select>
                </div>
                <label for="lembaga"> Lembaga Mitra :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="lembaga_mitra" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Tingkat :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="tingkat" id="inputGroupSelect01" >
                        <option selected>pilih...</option>
                        <option value="Internasional">Internasional</option>
                        <option value="Nasional">Nasional</option>
                        <option value="Lokal">Lokal</option>
                    </select>
                </div>
                <label for="lembaga"> Judul Kegiatan Bersama :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="judul_kegiatan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Manfaat Bagi PS yang Diakreditasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="manfaat" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Waktu dan Durasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="waktu_durasi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Bukti Kerjasama :</label>
                <div class="input-group input-group-sm mb-3">
                <input type="file" name="bukti_kerjasama" class="form-control" id="customFile" required>
                </div>
               {{-- coding modal insert akhir --}}

            {{-- script modal insert --}}
            {{-- script modal insert akhir--}}
               

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>