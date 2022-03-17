<form action="/luaran-capaian-tridharma/kinerja-lulusan/{{ $data->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <div class="form-row justify-content-center">
                  <div class="form-group col-md-5 align-middle">
                  <label for="pengkuan"> Jumlah Lulusan :</label>
                  <div class="input-group mb-3">
                      <input type="number" name="jumlah_lulusan" value="{{ $data->jumlah_lulusan }}" class="form-control" required>
                  </div>
                  </div>
                  <div class="form-group col-md-5 align-middle">
                  <label for="pengkuan"> Jumlah Lulusan yang Terlacak :</label>
                  <div class="input-group mb-3">
                      <input type="number" name="jumlah_lulusan_terlacak" value="{{ $data->jumlah_lulusan_terlacak }}" class="form-control" required>
                  </div>
                  </div>
                  </div>
                  
                <label for="pengkuan"> Jumlah Lulusan Terlacak yang Bekerja berdasarkan Tingkat/Ukuran Tempat Kerja/Berwirausaha </label>
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">Lokal/ Wilayah/ Berwirausaha tidak Berizin</label>
                      <input type="number" class="form-control form-control-sm mb-3" value="{{ $data->tempat_wilayah_tidak_berizin }}" name="tempat_wilayah_tidak_berizin" id="#" >
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">Nasional/ Berwirausaha Berizin</label>
                      <input type="number" class="form-control form-control-sm mb-3" value="{{ $data->tempat_nasional_berizin}}" name="tempat_nasional_berizin" id="#">
                    </div>
                    <div class="form-group col-md-4 align-middle">
                      <label for="#">Multinasional/ Internasional <br> <br></label>
                      <input type="number" class="form-control  form-control-sm mb-3" value="{{ $data->internasional}}" name="internasional" id="#">
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