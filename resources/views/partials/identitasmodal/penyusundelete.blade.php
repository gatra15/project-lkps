<form action="/identitas-pengusul/tim-penyusun/{{ $tim->id }}" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin ingin menghapus data? </h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>