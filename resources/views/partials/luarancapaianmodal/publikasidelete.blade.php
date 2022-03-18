<form action="/luaran-capaian-tridharma/publikasi-ilmiah/{{ $ts->tahun_laporan }}/{{ $ts->media_id }}" method="POST">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Menghapus  ? </h5>
        <input type="hidden" name="media_id" value='{{ $ts->media_id }}' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>