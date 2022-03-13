<form action="/kinerja-dosen/{{ $pengakuan->id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="pengkuan"> Nama Dosen :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="nama" value="{{ $pengakuan->nama }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Bidang Keahlian :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="bidang_keahlian" value="{{ $pengakuan->bidang_keahlian }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Rekognisi dan Bukti Pendukung :</label>
                <div class="input-group input-group-sm mb-3">
                <input type="file" class="form-control" name="bukti_pendukung" id="customFile" required />
                </div>
                <small for=""><a href="{{ asset('storage/'.$pengakuan->bukti_pendukung) }}">{{ $pengakuan->bukti_pendukung }}</a></small>
                <label for="pengkuan"> Tingkat :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="tingkat" id="inputGroupSelect01">
                        <option>pilih...</option>
                        <option {{ $pengakuan->tingkat == 'Wilayah' ? 'selected' : '' }} value="Wilayah">Wilayah</option>
                        <option {{ $pengakuan->tingkat == 'Nasional' ? 'selected' : '' }} value="Nasional">Nasional</option>
                        <option {{ $pengakuan->tingkat == 'Internasional' ? 'selected' : '' }} value="Internasional">Internsional</option>
                    </select>
                </div>
                <label for="pengkuan"> Tahun :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="tahun" value="{{ $pengakuan->tahun }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
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