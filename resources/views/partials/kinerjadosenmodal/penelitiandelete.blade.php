<form action="/kinerja-dosen/penelitian-dtps/{{ $ts->tahun_laporan }}/{{ $ts->sumber_id }}" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Menghapus ? </h5>
        <input type="hidden" name="sumber_id" value="{{ $ts->sumber_id }}">
        @foreach ($penelitians['ts2'] as $ts2)
        <input type="hidden" name="jumlah_ts2" value="">
        @endforeach
        @foreach ($penelitians['ts1'] as $ts1)
        <input type="hidden" name="jumlah_ts1" value="">
        @endforeach
        <input type="hidden" name="jumlah_ts" value="">
        <input type="hidden" name="jumlah" value="">
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>