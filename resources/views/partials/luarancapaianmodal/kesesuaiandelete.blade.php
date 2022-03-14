<form action="/luaran-capaian-tridharma/kesesuain-bidang/{{ $kesesuaian->id }}" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Menghapus Data ? </h5>
        <input type="hidden" name="tahun_id" class="form-control" value="{{ $kesesuaian->tahun_id }}"  required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>