{{-- <form action="/kinerja-dosen" method="post"> --}}
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="pengkuan"> Nomor Pilihan :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="#" id="inputGroupSelect01">
                        <option selected>pilih...</option>
                        <option value="I">I</option>
                        <option value="II">II</option>
                        <option value="III">III</option>
                        <option value="IV">IV</option>
                    </select>
                </div>
                <label for="pengkuan"> Judul :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="#" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Tahun :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="#" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Keterangan:</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="#" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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