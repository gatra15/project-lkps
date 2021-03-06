<form action="/luaran-capaian-tridharma/kesesuain-bidang/{{ $kesesuaian->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- Comment AGAR tidak ERROR --}}

                {{ $kesesuaian->id }}

              <div class="form-row justify-content-center">
                <div class="form-group col-md-5 align-middle">
                <label for="pengkuan"> Jumlah Lulusan :</label>
                <div class="input-group mb-3">
                    <input type="number" name="jumlah_lulusan" class="form-control" value="{{ $kesesuaian->jumlah_lulusan }}"  required>
                </div>
                </div>
                <div class="form-group col-md-5 align-middle">
                <label for="pengkuan"> Jumlah Lulusan yang Terlacak :</label>
                <div class="input-group mb-3">
                    <input type="number" name="jumlah_lulusan_terlacak" value="{{ $kesesuaian->jumlah_lulusan_terlacak }}" class="form-control" required>
                </div>
                </div>
                </div>
                <label for="pengkuan"> Jumlah Lulusan Terlacak dengan Tingkat Kesesuaian Bidang Kerja :</label>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">Rendah <sup>1)</sup></label>
                      <input type="text" class="form-control form-control-sm mb-3" name="kesesuaian_rendah"  value="{{ $kesesuaian->kesesuaian_rendah }}" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">Sedang <sup>2)</sup></label>
                      <input type="text" class="form-control form-control-sm mb-3" name="kesesuaian_sedang"  value="{{ $kesesuaian->kesesuaian_sedang }}" id="#">
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">Tinggi <sup>3)</sup></label>
                      <input type="text" class="form-control form-control-sm mb-3" name="kesesuaian_tinggi"  value="{{ $kesesuaian->kesesuaian_tinggi }}" id="#">
                    </div>
                  </div>

               {{-- coding modal insert akhir --}}
            
            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>