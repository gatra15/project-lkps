<form action="/luaran-capaian-tridharma/luaran-mahasiswa/{{ $data->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}
                Ini Luaran Edit
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="type_luaran" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $data->type_luaran }}" required>
                </div>
                <label for="pengkuan"> Judul :</label>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="judul" value="{{ $data->judul }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                </div>
                <label for="pengkuan"> Tahun:</label>
                <div class="input-group input-group-sm mb-3">
                    <select class="custom-select" name="tahun" value="{{ $data->tahun }}" id="inputGroupSelect01">
                @php
                    $years = range(2000, strftime("%Y", time()));
                @endphp
                <option >{{ $data->tahun }}</option>
                <?php foreach($years as $year) : ?>
                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                <?php endforeach; ?>
                    </select>
                </div>
                <label class="kanan"> Keterangan: </label>
                <div class="form">
                    <textarea class="form-control" type="text" name="keterangan" placeholder="" id="floatingTextarea2" style="height: 200px" required> {{ $data->keterangan }} </textarea>
                </div>
                

               {{-- coding modal insert akhir --}}
               

            {{-- </div> --}}
        </div>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
<button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>