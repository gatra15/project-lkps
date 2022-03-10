<<<<<<< HEAD
<form action="/kinerja-dosen/penelitian-dtps/{{ $penelitian->id }}" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Menghapus ? </h5>
        <input type="hidden" name="sumber_id" value="{{ $penelitian->sumber_id }}">
        <input type="hidden" name="jumlah_ts2" value="">
        <input type="hidden" name="jumlah_ts1" value="">
        <input type="hidden" name="jumlah_ts" value="">
        <input type="hidden" name="jumlah" value="">
=======
<form action="#" method="get">
    <div class="modal-body">
        @csrf
        {{-- @method('get') --}}
        <h5 class="text-center">Yakin Ingin Menghapus {{-- $sdm->nama_dosen --}} ? </h5>
>>>>>>> 05dc11eaa73031f6da20d8c7f54eb9a6633bc0f8
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>