<form action="/penelitian/{{ $penelitian->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                
                {{-- coding modal insert --}}
                <label for="lembaga">Nama Dosen : </label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama_dosen" value="{{ $penelitian->nama_dosen }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Tema Penelitian ( Sesuai Roadmap ) :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="tema" value="{{ $penelitian->tema }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Nama Mahasiswa :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama_mahasiswa" value="{{ $penelitian->nama_mahasiswa }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Judul Kegiatan :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="judul" value="{{ $penelitian->judul }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Tahun :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="number" min="2000" max="2050" name="tahun" value="{{ $penelitian->tahun }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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