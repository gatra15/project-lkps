<form action="/pendidikan" method="POST">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                
                {{-- coding modal insert --}}
                <label for="kurikulum"> Semester :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="semester" id="inputGroupSelect01" >
                        <option selected>pilih...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>
                <label for="kurikulum"> Kode Mata Kuliah :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="kode_mata_kuliah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="kurikulum"> Nama Mata Kuliah :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama_mata_kuliah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="kurikulum"> Mata Kuliah Kompetensi :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="mata_kuliah_kompetensial" id="inputGroupSelect01" >
                        <option selected>pilih...</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <label for="kurikulum"> Kualiah/ Responsi/ Tutorial :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bobot_kuliah" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="kurikulum"> Seminar :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bobot_seminar" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="kurikulum"> Praktikum/ Praktik/ Praktik Lapangan :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bobot_praktikum" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="kurikulum"> Konversi Kredit ke Jam :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="konversi_kredit_jam" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="kurikulum"> Sikap :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="capaian_sikap" id="inputGroupSelect01" >
                        <option selected>pilih...</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <label for="kurikulum"> Pengetahuan :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="capaian_pengetahuan" id="inputGroupSelect01" >
                        <option selected>pilih...</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <label for="kurikulum"> Ketrampilan Umum :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="capaian_ketrampilan_umum" id="inputGroupSelect01" >
                        <option selected>pilih...</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <label for="kurikulum"> Ketrampilan Khusus :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="capaian_ketrampilan_khusus" id="inputGroupSelect01" >
                        <option selected>pilih...</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <label for="kurikulum"> Dokumen Rencana Pembelajaran :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="document_rencana_pembelajaran" id="inputGroupSelect01" >
                        <option selected>pilih...</option>
                        <option value="1">Iya</option>
                        <option value="0">Tidak</option>
                    </select>
                </div>
                <label for="kurikulum"> Unit Penyelenggara :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="unit_penyelenggara" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
               {{-- coding modal insert akhir --}}

            {{-- script modal insert --}}
            {{-- script modal insert akhir--}}
               

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>