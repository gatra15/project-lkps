<form action="/keuangan-sarana-prasarana/{{ $data->tahun_laporan }}/{{ $data->sarana_id }}/{{ $data->biaya_id }}" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Menghapus Data ? </h5>
        <input type="hidden" name="sarana_id" value="{{ $data->sarana_id }}" >
        <input type="hidden" name="biaya_id" value="{{ $data->biaya_id }}" >
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>