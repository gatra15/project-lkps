<form action="/luaran-capaian-tridharma/prestasi-mahasiswa/{{ $prest->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="pengkuan"> Nama Kegiatan :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama_kegiatan" value="{{ $prest->nama_kegiatan }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Tahun Perolehan :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="tahun_perolehan" value="{{ $prest->tahun_perolehan }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Tingkat :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="tingkat" id="inputGroupSelect01">
                        <option >pilih...</option>
                        <option {{ $prest->tingkat == 'Lokal/Wilayah' ? 'selected' : '' }} value="Lokal/Wilayah">Lokal/Wilayah</option>
                        <option {{ $prest->tingkat == 'Nasional' ? 'selected' : '' }} value="Nasional">Nasional</option>
                        <option {{ $prest->tingkat == 'Internasional' ? 'selected' : '' }} value="Internasional">Internsional</option>
                    </select>
                </div>
                <label for="pengkuan"> Prestasi yang Dicapai:</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="type_prestasi" value="{{ $prest->type_prestasi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                
                

               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>