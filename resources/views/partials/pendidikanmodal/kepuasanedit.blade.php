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
                    <input type="hidden" name="aspek_id" value="{{ $kepuasan->aspek_id }}"  class="form-control" required>
                </div>

                <div class="form-row justify-content-center text-center">
                    <label for="dosentetap" class="fs-5"> Tingkat Kepuasan Mahasiswa :</label>
                  </div>
                  <div class="form-row justify-content-center">
                      <div class="form-group col-md-3 align-middle">
                        <label for="#">Sangat Baik (%) :</label>
                        <input type="number" class="form-control form-control-sm mb-3" name="sangat_baik" value="{{ $kepuasan->sangat_baik }}" min="1" max="100" required>
                      </div>
                      <div class="form-group col-md-3 align-middle">
                        <label for="#"> Baik (%) :</label>
                        <input type="number" class="form-control form-control-sm mb-3" name="baik" value="{{ $kepuasan->sangat_baik }}" min="1" max="100" required>
                      </div>
                      <div class="form-group col-md-3 align-middle">
                        <label for="#">Cukup (%) :</label>
                        <input type="number" class="form-control form-control-sm mb-3" name="cukup" value="{{ $kepuasan->sangat_baik }}" min="1" max="100" required>
                      </div>
                      <div class="form-group col-md-3 align-middle">
                        <label for="#">Kurang (%) :</label>
                        <input type="number" class="form-control form-control-sm mb-3" name="kurang" value="{{ $kepuasan->sangat_baik }}" min="1" max="100" required>
                      </div>
                  </div>

                <label for="lembaga">Rencana Tindak Lanjut oleh UPPS/PS :</label>
                <div class="input-group mb-3">
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