<form action="/kinerja-dosen/luaran-dtps" method="post">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}
                <label for="luaran">Luaran</label>
                <input type="hidden" class="my-2" name="type_luaran" value="I">
                <label for="luaran">Judul</label>
                <input type="text" class="my-2" name="judul" required>
                <label for="luaran">Tahun</label>
                <input type="text" class="my-2" name="tahun" required>
                <label for="luaran">Keterangan</label>
                <input type="text" class="my-2" name="keterangan" required>
                
                

               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>