<form action="/pendidikan/kepuasan-mahasiswa" method="POST">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">                   
                
                {{-- coding modal insert --}}
                <div class="input-group input-group-sm mb-3">
                    <input type="text" name="aspek_id" value="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                    <input type="hidden" name="sangat_baik" value="">
                    <input type="hidden" name="baik" value="">
                    <input type="hidden" name="cukup" value="">
                    <input type="hidden" name="kurang" value="">
                    <input type="hidden" name="rencana_tindak_lanjut" value="">
               {{-- coding modal insert akhir --}}

            {{-- script modal insert --}}
            {{-- script modal insert akhir--}}

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Tambah</button>
    </div>
</form>