<form action="/kinerja-dosen/publikasi-dtps/{{ $publikasis->id }}" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Menghapus ? </h5>
        <input type="hidden" name="media_id" value="{{ $publikasis->media_id }}">
        <input type="hidden" name="jumlah_ts2" value="">
        <input type="hidden" name="jumlah_ts1" value="">
        <input type="hidden" name="jumlah_ts" value="">
        <input type="hidden" name="jumlah" value="">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>