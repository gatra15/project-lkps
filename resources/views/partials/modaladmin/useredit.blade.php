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
                    <select id="role" class="form-control form-control-lg mb-3" aria-label=".form-control-lg">
                        @php
                            $roles = ['Admin','Dekan','Perwakilan','Audit']
                        @endphp
                        <option>Pilih Role</option>
                       @foreach($roles as $role)
                        <option {{ $user->role->name == $role ? 'selected' : '' }} value="{{ $role }}">{{ $role }}</option>
                       @endforeach
                    </select>
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
