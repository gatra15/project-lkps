<<<<<<< HEAD
{{-- <form action="/kinerja-dosen" method="post"> --}}
=======
<form action="/luaran-capaian-tridharma/prestasi-mahasiswa/{{ $prestasi->id }}" method="post">
    @method('put')
>>>>>>> aa816b7a45619c243d0cc81933cc1c357a01b4f9
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

<<<<<<< HEAD
                <label for="pengkuan"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Bidang Keahlian :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bidang_keahlian" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Rekognisi dan Bukti Pendukung :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bukti_pendukung" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
=======
                <label for="pengkuan"> Nama Kegiatan :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama_kegiatan" value="{{ $prestasi->nama_kegiatan }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Tahun Perolehan :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="tahun_perolehan" value="{{ $prestasi->tahun_perolehan }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
>>>>>>> aa816b7a45619c243d0cc81933cc1c357a01b4f9
                </div>
                <label for="pengkuan"> Tingkat :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="tingkat" id="inputGroupSelect01">
<<<<<<< HEAD
                        <option selected>pilih...</option>
                        <option value="Wilayah">Wilayah</option>
                        <option value="Nasional">Nasional</option>
                        <option value="Internasional">Internsional</option>
                    </select>
                </div>
                <label for="pengkuan"> Tahun:</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="tahun" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
=======
                        <option >pilih...</option>
                        <option {{ $prestasi->tingkat == 'Lokal/Wilayah' ? 'selected' : '' }} value="Lokal/Wilayah">Lokal/Wilayah</option>
                        <option {{ $prestasi->tingkat == 'Nasional' ? 'selected' : '' }} value="Nasional">Nasional</option>
                        <option {{ $prestasi->tingkat == 'Internasional' ? 'selected' : '' }} value="Internasional">Internsional</option>
                    </select>
                </div>
                <label for="pengkuan"> Prestasi yang Dicapai:</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="type_prestasi" value="{{ $prestasi->type_prestasi }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
>>>>>>> aa816b7a45619c243d0cc81933cc1c357a01b4f9
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