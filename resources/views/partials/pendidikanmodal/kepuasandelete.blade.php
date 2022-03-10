<form action="/pendidikan/kepuasan-mahasiswa/{{ $kepuasan->id }}" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Menghapus ? </h5>
        <input type="hidden" name="aspek_id" value="{{ $kepuasan->aspek_id }}">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>