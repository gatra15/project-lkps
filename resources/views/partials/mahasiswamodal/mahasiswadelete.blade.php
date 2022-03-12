<form action="/mahasiswa/delete/{{ $mhs->id }}" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin ingin menghapus data Mahasiswa pada {{ $mhs->tahun->name }} ? </h5>
        <input type="hidden" name="tahun_id" value="{{ $mhs->tahun_id }}">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>