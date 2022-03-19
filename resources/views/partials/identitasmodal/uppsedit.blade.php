<form action="/identitas-pengusul/upps/{{ $upps->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        <div class="card-body px-20 pb-20">
            <div class="row">
                
                {{-- coding modal insert --}}
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan" class="kanan"> Jenis Program </label>
                    <input type="text" name="jenis_program" class="form-control lebar" value="{{ $upps->jenis_program }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label for="exampleInputEmail1" class="kanan">Nama Program Studi</label> 
                    <select id="prodi" name="program_studi" class="form-control mt-3" aria-label=".form-control-lg">
                    <option value="{{ $upps->program_studi }}">{{ $upps->program_studi }}</option>
                    @foreach($prodi as $prodis) 
                    <option {{ session('prodi') == $prodis ? 'selected' : '' }}value="{{ $prodis->name }}">{{ $prodis->name }}</option>
                    @endforeach
                    </select>
                </div>
            
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Status/ Peringkat </label>
                    <input type="text" name="status_peringkat" class="form-control lebar" value="{{ $upps->status_peringkat }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> No dan Tgl SK  </label>
                    <input type="text" name="no_sk" class="form-control lebar" value="{{ $upps->no_sk }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Tanggal Kadaluarsa </label>
                    <input type="date" name="tanggal_kadaluarsa" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="DD-MM-YYYY" value="{{ $upps->tanggal_kadaluarsa }}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Jumlah Mahasiswa saat TS </label>
                    <input type="text" name="jumlah_mahasiswa" class="form-control lebar" value="{{ $upps->jumlah_mahasiswa }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</form>