<form action="/luaran-capaian-tridharma/capaian/{{ $capaian->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosentetap"> Tahun Akademik :</label>
                <label for="capaianpembelajaran"> Jumlah Lulusan :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_lulusan" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $capaian->jumlah_lulusan }}" required>
                </div>
                <label for="lembaga" class="fs-6 my-2"> Indeks Prestasi Kumulatif </label>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-6 align-middle">
                      <label for="#">Min.</label>
                      <div class="input-group input-group-sm mb-3">
                      <input type="text" class="form-control mb-3" value="{{ $capaian->ipk_min }}" name="ipk_min" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                      </div>
                    </div>
                    <div class="form-group col-md-6 align-middle">
                      <label for="#">Max.</label>
                      <div class="input-group input-group-sm mb-3">
                      <input type="text" class="form-control mb-3" value="{{ $capaian->ipk_max }}" name="ipk_max" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                      </div>
                    </div>
                  </div>
                <label for="capaianpembelajaran"> Rata-rata :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="ipk_avg" value="{{ $capaian->ipk_avg }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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