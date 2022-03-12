<form action="#" method="POST">
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                
                {{-- coding modal insert --}}
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan" class="kanan"> Perguruan Tinggi </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> UPPS </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Jenis Program </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nama Program Studi </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                
                <label class="kanan"> Alamat </label>
                <div class="form">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"> ini isi </textarea>
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nomor Telepon </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Email dan Website </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nomor SK Pendirian PT </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Tanggal SK Pendirian PT </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> SK Pendirian PT </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nomor SK Pembukaan PS </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Tanggal SK Pembukaan PS </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> SK Pembukaan PS </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Tahun Pertama Kali Menerima Mahasiswa </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Akreditasi PS </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nomor SK BAN-PT </label>
                    <input type="text" name="lembaga_mitra" class="form-control lebar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                
                
            
               {{-- coding modal insert akhir --}}

            {{-- script modal insert --}}
            {{-- script modal insert akhir--}}
               

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </div>
</form>