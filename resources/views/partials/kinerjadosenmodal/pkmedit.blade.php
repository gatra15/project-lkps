<<<<<<< HEAD
<form action="/kinerja-dosen/pkm-dtps/{{ $pkms->id }}" method="POST">
    @method('put')
=======
{{-- <form action="/kinerja-dosen" method="post"> --}}
>>>>>>> 05dc11eaa73031f6da20d8c7f54eb9a6633bc0f8
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}

<<<<<<< HEAD
                <label for="dosentetap"> Sumber Daya Pembiyaan :</label>
                <p>@php echo $pkms->sumber_detail->sumberdaya @endphp</p>
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="sumber_id" value="{{ $pkms->sumber_id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
                </div>
                <label>Jumlah Judul</label>
                <label for="dosentetap"> TS-2 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ts2" value="{{ $pkms->jumlah_ts2 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS-1 :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ts1" value="{{ $pkms->jumlah_ts1 }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> TS :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah_ts" value="{{ $pkms->jumlah_ts }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="dosentetap"> Jumlah :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="jumlah" value="{{ $pkms->jumlah }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
=======
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
                </div>
                <label for="pengkuan"> Tingkat :</label>
                <div class="input-group mb-3">
                    <select class="custom-select" name="tingkat" id="inputGroupSelect01">
                        <option selected>pilih...</option>
                        <option value="Wilayah">Wilayah</option>
                        <option value="Nasional">Nasional</option>
                        <option value="Internasional">Internsional</option>
                    </select>
                </div>
                <label for="pengkuan"> Tahun:</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="tahun" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                
                
>>>>>>> 05dc11eaa73031f6da20d8c7f54eb9a6633bc0f8

               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
<<<<<<< HEAD
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
=======
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
>>>>>>> 05dc11eaa73031f6da20d8c7f54eb9a6633bc0f8
    </div>
</form>