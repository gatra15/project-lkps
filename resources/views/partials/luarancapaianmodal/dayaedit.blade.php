<form action="/luaran-capaian-tridharma/daya-saing/{{ $data->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}
                <label>@php echo $data->tahun->name @endphp</label>
                <div class="input-group input-group-sm mb-3">
                  <input type="hidden" name="tahun_id" class="form-control" value="{{ $data->tahun_id }}"  required>
              </div>
                
                <div class="form-row justify-content-center">
                <div class="form-group col-md-6 align-middle">
                <label for="pengkuan"> Jumlah Lulusan :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="number" name="jumlah_lulusan" class="form-control" value="{{ $data->jumlah_lulusan }}"  required>
                </div>
                </div>
                <div class="form-group col-md-6 align-middle">
                <label for="pengkuan"> Jumlah Lulusan yang Terlacak :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="number" name="jumlah_lulusan_terlacak" value="{{ $data->jumlah_lulusan_terlacak }}" class="form-control" required>
                </div>
                </div>
                </div>
                <label for="pengkuan"> Jumlah Lulusan Terlacak dengan Waktu Tunggu Mendapatkan Pekerjaan : </label>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">WT < 6 bulan</label>
                      <input type="number" name="waktu_tunggu_6" class="form-control" value="{{ $data->waktu_tunggu_6 }}" required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">6 ≤ WT ≤ 18 bulan</label>
                      <input type="number" name="waktu_tunggu_6_18" class="form-control" value="{{ $data->waktu_tunggu_6_18 }}"  required>
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">WT > 18 bulan</label>
                      <input type="number" name="waktu_tunggu_18" class="form-control" value="{{ $data->waktu_tunggu_18 }}"  required>
                    </div>
                  </div>
                
                

               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>