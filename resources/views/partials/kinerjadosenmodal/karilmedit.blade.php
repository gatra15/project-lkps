<form action="/kinerja-dosen/karya-ilmiah/{{ $karil->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="pengkuan"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama_dosen" value="{{ $karil->nama_dosen }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Judul Artikel yang Disitasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="judul" value="{{ $karil->judul }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Jumlah :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_sitasi" value="{{ $karil->jumlah_sitasi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>