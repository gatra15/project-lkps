<form action="/profil-dosen/pembimbing-ta/{{ $sdm->id }}" method="get">
    <div class="modal-body">
        @csrf
        {{-- @method('get') --}}
        <h5 class="text-center">Yakin Ingin Menghapus {{ $sdm->nama }} ? </h5>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>