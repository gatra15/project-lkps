<form action="/prodi/" method="post">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
            
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="pengkuan"> Nama : </label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                
                
               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="button" onclick="this.form.submit()" id="btn" data-dismiss="modal" class="btn btn-primary">Tambah</button>
    </div>
</form>

