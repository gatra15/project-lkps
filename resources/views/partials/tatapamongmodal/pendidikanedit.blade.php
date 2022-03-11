<form action="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        <div class="card-body px-20 pb-20">
            <div class="row">
            
                {{-- coding modal insert --}}
                <label for="lembaga"> Tema :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="tridharma" value="{{ $indikator->tridharma }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
                </div>
                <label for="lembaga"> Lembaga Mitra :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="lembaga_mitra" value="{{ $indikator->lembaga_mitra }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Tingkat :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="tingkat" id="inputGroupSelect01" >
                        <option >pilih...</option>
                        <option {{ $indikator->tingkat == 'Internasional' ? 'selected' : '' }} value="Internasional">Internasional</option>
                        <option {{ $indikator->tingkat == 'Nasional' ? 'selected' : '' }}  value="Nasional">Nasional</option>
                        <option {{ $indikator->tingkat == 'Lokal' ? 'selected' : '' }}  value="Lokal">Lokal</option>
                    </select>
                </div>
                <label for="lembaga"> Judul Kegiatan Bersama :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="judul_kegiatan" value="{{ $indikator->judul_kegiatan }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Manfaat Bagi PS yang Diakreditasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="manfaat" value="{{ $indikator->manfaat }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Waktu dan Durasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="waktu_durasi" value="{{ $indikator->waktu_durasi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Bukti Kerjasama :</label>
                <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" name="bukti_kerjasama" value="{{ $indikator->bukti_kerjasama }}" class="custom-file-input" id="inputGroupFile02" required>
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="Upload">Pilih File</label>
                </div>
                </div>
               {{-- coding modal insert akhir --}}

            {{-- script modal insert --}}
            {{-- script modal insert akhir--}}
               

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
