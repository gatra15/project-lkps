<form action="/pendidikan/kepuasan-mahasiswa/{{ $kepuasan->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                
                {{-- coding modal insert --}}
                <label for="lembaga"> Aspek yang Diukur</label>
                <p>@php echo $kepuasan->aspek->aspek @endphp</p> 
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="aspek_id" value="{{ $kepuasan->aspek_id }}"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Tingkat Kepuasan Mahasiswa :</label>
                <label for="lembaga"> Sangat Baik :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="sangat_baik" value="{{ $kepuasan->sangat_baik }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Baik :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="baik" value="{{ $kepuasan->baik }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Cukup :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="cukup" value="{{ $kepuasan->cukup }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Kurang :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="kurang" value="{{ $kepuasan->kurang }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga">Rencana Tindak Lanjut oleh UPPS/PS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="rencana_tindak_lanjut" value="{{ $kepuasan->rencana_tindak_lanjut }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
               {{-- coding modal insert akhir --}}

            {{-- script modal insert --}}
            {{-- script modal insert akhir--}}
               

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>