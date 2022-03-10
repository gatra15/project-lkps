<<<<<<< HEAD
<form action="#" method="get">
    <div class="modal-body">
        @csrf
        {{-- @method('get') --}}
        <h5 class="text-center">Yakin Ingin Menghapus {{-- $sdm->nama_dosen --}} ? </h5>
=======
<form action="/luaran-capaian-tridharma/prestasi-mahasiswa/{{ $prestasi->id }}" method="get">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Menghapus {{ $prestasi->nama }} ? </h5>
>>>>>>> aa816b7a45619c243d0cc81933cc1c357a01b4f9
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>