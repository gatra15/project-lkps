<<<<<<< HEAD
<form action="/profil-dosen/pembimbing-ta/{{ $sdm->id }}" method="get">
    <div class="modal-body">
        @csrf
        {{-- @method('get') --}}
        <h5 class="text-center">Yakin Ingin Menghapus {{ $sdm->nama }} ? </h5>
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