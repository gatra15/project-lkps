<form action="/identitas-pengusul/delete/{{ $identity->id }}" method="get">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin ingin menghapus data Identitas Pengusul? </h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>