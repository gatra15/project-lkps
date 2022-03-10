<form action="/pendidikan/kepuasan-mahasiswa" method="POST">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                @foreach ($aspek as $aspeks)
                    
                
                {{-- coding modal insert --}}
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="aspek_id" value="{{ $aspeks->id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <h5 class="mb-2">{{ $aspeks->nama }}</h5>
                <label for="lembaga">Tingkat Kepuasan</label>
                <label for="lembaga">Sangat Baik :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="sangat_baik" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga">Baik :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="baik" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga">Cukup :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="cukup" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga">Kurang :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="kurang" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga">Rencana Tindak Lanjut oleh UPPS/PS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="rencana_tindak_lanjut" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
               {{-- coding modal insert akhir --}}

            {{-- script modal insert --}}
            {{-- script modal insert akhir--}}
            @endforeach

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>