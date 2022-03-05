<form action="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" method="post">
    <div class="modal-body">
        @csrf
        @method('get')
        <h5 class="text-center">Yakin Ingin Delete {{ $indikator->tridharma }} dengan lembaga {{ $indikator->lembaga_mitra }}? </h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>