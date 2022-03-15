<form action="/user/{{ $users->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}
                
                <label for="pengkuan"> Nama : </label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="name" class="form-control" value="{{ $users->name }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Email :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="email" value="{{ $users->email }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Role :</label>
                <div class="input-group input-group-sm mb-3">
                    <select id="role" name="role_id" class="form-control form-control-lg mb-3" aria-label=".form-control-lg">
                        <option>Pilih Role</option>
                       @foreach($role as $roles)
                        <option {{ $users->role->name == $roles->name ? 'selected' : '' }} value="{{ $roles->id }}">{{ $roles->name }}</option>
                       @endforeach
                    </select>
                </div>
                <label for="pengkuan"> Prodi :</label>
                
                <div class="input-group input-group-sm mb-3">
                    <select id="prodi" name="prodi_id" class="form-control form-control-lg mb-3" aria-label=".form-control-lg">
                        <option>Pilih prodi</option>
                        
                       @foreach($prodi as $prodis)
                       
                       @if ($users->prodi != null)
                       <option {{ $users->prodi->name == $prodis->name ? 'selected' : '' }} value="{{ $prodis->id }}">{{ $prodis->name }}</option>
                       @else
                       <option value="{{ $prodis->id }}">{{ $prodis->name }}</option>
                       @endif
                        
                       @endforeach
                    </select>
                </div>
                
               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>

