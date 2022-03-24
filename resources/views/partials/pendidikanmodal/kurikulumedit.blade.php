<form action="/pendidikan/{{ $kur->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                
                {{-- coding modal insert --}}
                <div class="form-row justify-content-center">
                    <div class="form-group col-md-6 align-middle">
                        <label for="#">Semester : <br> <br> </label>
                        <select class="custom-select custom-select-sm" aria-label=".form-control-lg" name="semester" value="{{ $kur->semester }}">
                            @php
                                $prodis = [1,2,3,4,5,6,7,8,9,10,11,12]
                            @endphp
                            <option>{{ $kur->semester }}</option>
                            <?php foreach($prodis as $prodi) : ?>
                                <option value="<?php echo $prodi; ?>"><?php echo $prodi; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6 align-middle">
                      <label for="#" class="text-center">Kode Mata Kuliah : <br> <br> </label>
                      <div class="input-group input-group-sm mb-3">
                        <input type="text" name="kode_mata_kuliah" value="{{ $kur->kode_mata_kuliah }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                    </div>
                    </div>
                </div>
                
                <label for="kurikulum"> Nama Mata Kuliah :</label>
                <div class="input-group mb-3">
                    <input type="text" name="nama_mata_kuliah" value="{{ $kur->nama_mata_kuliah }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>

                    <div class="form-row justify-content-center text-center mt-5 mb-3">
                        <label for="dosentetap" class="fs-6"> Bukti Kredit (SKS)</label>
                      </div>
                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-4 align-middle">
                          <label for="#">Kuliah/ Responsi/ Tutorial : <br> <br> </label>
                          <input type="number" class="form-control form-control-sm mb-3" name="bobot_kuliah" value="{{ $kur->bobot_kuliah }}"  id="#" required>
                        </div>
                        <div class="form-group col-md-4 align-middle">
                          <label for="#">Seminar : <br> <br> <br> </label>
                          <input type="number" class="form-control form-control-sm mb-3" name="bobot_seminar" value="{{ $kur->bobot_seminar }}" id="#" required>
                        </div>
                        <div class="form-group col-md-4 align-middle">
                          <label for="#">Praktikum/ Praktik/ Praktik Lapangan :</label>
                          <input type="number" class="form-control form-control-sm mb-3" name="bobot_praktikum" value="{{ $kur->bobot_praktikum }}" id="#" required>
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-6 align-middle">
                            <label for="#">Mata Kuliah Kompetensi : <br> <br></label>
                            <select class="custom-select custom-select-sm" name="mata_kuliah_kompetensial" id="inputGroupSelect01" required>
                                <option {{ $kur->mata_kuliah_kompetensial == '1' ? 'selected' : '' }} value="1">Iya</option>
                                <option {{ $kur->mata_kuliah_kompetensial == '0' ? 'selected' : '' }} value="0">Tidak</option>
                          </select>
                        </div>
                        <div class="form-group col-md-6 align-middle">
                        <label for="kurikulum"> Konversi Kredit ke Jam : <br> <br></label>
                        <div class="input-group input-group-sm mb-3">
                            <input type="number" name="konversi_kredit_jam" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                        </div>
                        </div>
                    </div>

                    <div class="form-row justify-content-center">
                        <div class="form-group col-md-3 align-middle">
                            <label for="#">Sikap :  <br> <br> </label>
                            <select class="custom-select" name="capaian_sikap" id="inputGroupSelect01" required>
                                <option {{ $kur->capaian_sikap == '1' ? 'selected' : '' }} value="1">Iya</option>
                                <option {{ $kur->capaian_sikap == '0' ? 'selected' : '' }} value="0">Tidak</option>
                          </select>
                          </div>
                        <div class="form-group col-md-3 align-middle">
                            <label for="#">Penge- <br> tahuan :</label>
                            <select class="custom-select" name="capaian_pengetahuan" id="inputGroupSelect01" required>
                                <option {{ $kur->capaian_pengetahuan == '1' ? 'selected' : '' }} value="1">Iya</option>
                                <option {{ $kur->capaian_pengetahuan == '0' ? 'selected' : '' }} value="0">Tidak</option>
                          </select>
                        </div>
                        <div class="form-group col-md-3 align-middle">
                          <label for="#">Ketrampilan Umum :  </label>
                          <select class="custom-select" name="capaian_ketrampilan_umum" id="inputGroupSelect01" required>
                            <option {{ $kur->capaian_ketrampilan_umum == '1' ? 'selected' : '' }} value="1">Iya</option>
                            <option {{ $kur->capaian_ketrampilan_umum == '0' ? 'selected' : '' }} value="0">Tidak</option>
                        </select>
                        </div>
                        <div class="form-group col-md-3 align-middle">
                          <label for="#">Ketrampilan Khusus : </label>
                          <select class="custom-select" name="capaian_ketrampilan_khusus" id="inputGroupSelect01" required>
                            <option {{ $kur->capaian_ketrampilan_khusus == '1' ? 'selected' : '' }} value="1">Iya</option>
                            <option {{ $kur->capaian_ketrampilan_khusus == '0' ? 'selected' : '' }} value="0">Tidak</option>
                        </select>
                        </div>
                    </div>
                
                

                
                <label for="kurikulum"> Dokumen Rencana Pembelajaran :</label>
                <div class="input-group mb-3">
                    <select class="custom-select custom-select-sm" name="document_rencana_pembelajaran" id="inputGroupSelect01" required>
                        <option {{ $kur->document_rencana_pembelajaran == '1' ? 'selected' : '' }} value="1">Iya</option>
                        <option {{ $kur->document_rencana_pembelajaran == '0' ? 'selected' : '' }} value="0">Tidak</option>
                    </select>
                </div>
                <label for="kurikulum"> Unit Penyelenggara :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="unit_penyelenggara" value="{{ $kur->unit_penyelenggara }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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