<form action="/user" method="post">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}
                
                <label for="pengkuan"> Nama : </label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Email :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Password :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="password" name="password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Role :</label>
                <div class="input-group input-group-sm mb-3">
                    <select id="role" name="role_id" class="form-control form-control-lg mb-3" aria-label=".form-control-lg">
                        <option>Pilih Role</option>
                        @foreach($role as $roles) : ?>
                        <option value="{{ $roles->id }}">{{ $roles->name }}</option>
                       @endforeach
                    </select>
                </div>
                <label for="pengkuan"> Prodi :</label>
                <div class="input-group input-group-sm mb-3">
                    <select id="prodi" name="prodi_id" class="form-control form-control-lg mb-3" aria-label=".form-control-lg">
                        <option>Pilih Prodi</option>
                        @foreach($prodi as $prodis) : ?>
                        <option value="{{ $prodis->id }}">{{ $prodis->name }}</option>
                       @endforeach
                    </select>
                </div>
                
               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>
