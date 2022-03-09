<form action="/pendidikan/integrasi/{{ $integrasi->id }}" method="get">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Delete {{ $integrasi->judul }} ? </h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>