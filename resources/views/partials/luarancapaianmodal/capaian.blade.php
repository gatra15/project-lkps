{{-- <form action="/kinerja-dosen" method="post"> --}}
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="pengkuan"> Tahun Lulus : </label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="#" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Jumlah Lulus :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bidang_keahlian" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Indeks Prestasi Kumulatif (IPK) :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bukti_pendukung" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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
