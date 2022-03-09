<form action="/pendidikan/kepuasan-mahasiswa/{{ $kepuasan->id }}" method="POST">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                
                {{-- coding modal insert --}}
                <label for="lembaga"> Aspek yang Diukur</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="aspek[]"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="lembaga"> Tingkat Kepuasan Mahasiswa :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="tingkat" id="inputGroupSelect01">
                        <option>-- pilih --</option>
                        <option {{ $kepuasan->tingkat == 'Sangat Baik' ? 'selected' : '' }} value="Sangat Baik">Sangat Baik</option>
                        <option {{ $kepuasan->tingkat == 'Baik' ? 'selected' : '' }} value="Baik">Baik</option>
                        <option {{ $kepuasan->tingkat == 'Cukup' ? 'selected' : '' }} value="Cukup">Cukup</option>
                        <option {{ $kepuasan->tingkat == 'Kurang' ? 'selected' : '' }} value="Kurang">Kurang</option>
                    </select>
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
    <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>