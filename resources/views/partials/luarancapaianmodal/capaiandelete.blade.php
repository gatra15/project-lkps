<form action="/luaran-capaian-tridharma/capaian/{{ $capaian->id }}" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Menghapus Data ? </h5>
        <input type="hidden" name="tahun_id" value="{{ $capaian->tahun_id }}">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>