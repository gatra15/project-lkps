<form action="/identitas-pengusul/lembar-evaluasi/approve/{{ $data->id }}" method="post">
    <div class="modal-body">
        @method('put')
        @csrf
        <h5 class="text-center">Approve ?</h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Yakin</button>
    </div>
</form>