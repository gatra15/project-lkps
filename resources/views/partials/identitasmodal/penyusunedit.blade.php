<form  method="post" action="/identitas-pengusul/tim-penyusun/{{ $tim->id }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <input type="hidden" name="id" class="form-control" value="">
            
            <div class="input-group input-group-sm mb-3">
                <label class="kanan"> Nama </label>
                <input type="text" name="nama" class="form-control lebar " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="{{ $tim->nama }}">
            </div>
            <div class="input-group input-group-sm mb-3">
                <label class="kanan"> NIDN </label>
                <input type="text" name="nidn" class="form-control lebar"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="{{ $tim->nidn }}">

            </div>
            <div class="input-group input-group-sm mb-3">
                <label class="kanan"> Jabatan </label>
                <input type="text" name="jabatan" class="form-control lebar " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required value="{{ $tim->jabatan }}">
                
            </div>
            <div class="input-group input-group-sm mb-3">
                <label class="kanan"> Tanggal Pengisian </label>
                {{-- type='date' wae syah --}}
                <input type="date" name="tanggal_pengisian" class="form-control lebar" 
                value="{{ $tim->tanggal_pengisian }}">
                
            </div>
            <div class="input-group input-group-sm mb-3 mt-4">
                <label class="kanan"> File Tanda Tangan  </label>
                <input type="file" name="ttd" class="form-control lebar" id="customFile" >
            </div>

        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Update</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </form>
