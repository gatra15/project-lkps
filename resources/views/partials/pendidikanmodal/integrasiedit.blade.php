<form action="/pendidikan/integrasi/{{ $integrasi->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                
                {{-- coding modal insert --}}
                <label for="lembaga"> Judul Penelitian/PkM</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="judul" value="{{ $integrasi->judul }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama_dosen" value="{{ $integrasi->nama_dosen }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Mata Kuliah :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="mata_kuliah" value="{{ $integrasi->mata_kuliah }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Bentuk Integrasi :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bentuk_integrasi" value="{{ $integrasi->bentuk_integrasi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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