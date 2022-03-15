<form action="/luaran-capaian-tridharma/efektifitas/{{ $efektifitas->id }}" method="post">
    <div class="modal-body">
        @csrf
        {{-- @method('get') --}}
        <h5 class="text-center">Yakin Ingin Menghapus {{-- $sdm->nama_dosen --}} ? </h5>
        <input type="hidden" name="tahun_id" value="{{ $efektifitas->tahun_id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>