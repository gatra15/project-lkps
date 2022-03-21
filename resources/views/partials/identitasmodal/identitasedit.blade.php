<form action="/identitas-pengusul/{{ $identity->id }}" method="post">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
                
                {{-- coding modal insert --}}
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan" class="kanan"> Perguruan Tinggi </label>
                    <input type="text" name="perguruan_tinggi" class="form-control lebar" value="{{ $identity->perguruan_tinggi }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> UPPS </label>
                    <input type="text" name="unit_pengelola" class="form-control lebar" value="{{ $identity->unit_pengelola }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Jenis Program </label>
                    <input type="text" name="jenis_program" class="form-control lebar" value="{{ $identity->jenis_program }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nama Program Studi </label>
                    <input type="text" name="prodi" class="form-control lebar" value="{{ $identity->prodi }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                
                <label class="kanan"> Alamat </label>
                <div class="form">
                    <textarea class="form-control" placeholder="" id="floatingTextarea2" name="alamat" style="height: 200px"> {{ $identity->alamat }} </textarea>
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nomor Telepon </label>
                    <input type="text" name="no_telepon" class="form-control lebar" value="{{ $identity->no_telepon }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Email dan Website </label>
                    <input type="text" name="email_website" class="form-control lebar" value="{{ $identity->email_website }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nomor SK Pendirian PT 1) </label>
                    <input type="text" name="no_sk1" class="form-control lebar" value="{{ $identity->no_sk1 }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label for="lembaga" class="kanan"> File SK Pendirian PT 1)</label>
                    <input type="file" class="form-control lebar" name="no_sk1_berkas" id="customFile" />
                </div>
                <div class="form-text" style="color: red">Ganti File, Atau Kosongkan bila tidak perlu di ganti</div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Tanggal SK Pendirian PT </label>
                    <input type="text" name="tanggal_sk_pendirian" class="form-control lebar" value="{{ $identity->tanggal_sk_pendirian }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Pejabat Penandatangan SK Pendirian PT </label>
                    <input type="text" name="pejabat_penandatanganan" class="form-control lebar" value="{{ $identity->pejabat_penandatanganan }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nomor SK Pembukaan PS 2) </label>
                    <input type="text" name="no_sk2" class="form-control lebar" value="{{ $identity->no_sk2 }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label for="lembaga" class="kanan"> File SK Pembukaan PS 2)</label>
                    <input type="file" class="form-control lebar" name="no_sk2_berkas" id="customFile" />
                </div>
                <div class="form-text" style="color: red">Ganti File, Atau Kosongkan bila tidak perlu di ganti</div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Tanggal SK Pembukaan PS </label>
                    <input type="text" name="tanggal_sk_pembukaan" class="form-control lebar" value="{{ $identity->tanggal_sk_pembukaan }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Pejabat Penandatangan SK Pembukaan PS </label>
                    <input type="text" name="pejabat_pembukaan" class="form-control lebar" value="{{ $identity->pejabat_pembukaan }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> SK Pembukaan PS </label>
                    <input type="text" name="sk_pembukaan" class="form-control lebar" value="{{ $identity->sk_pembukaan }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Tahun Pertama Kali Menerima Mahasiswa </label>
                    <input type="text" name="tahun_pertama" class="form-control lebar" value="{{ $identity->tahun_pertama }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Akreditasi PS 3) </label>
                    <input type="text" name="peningkatan_terbaru" class="form-control lebar" value="{{ $identity->peningkatan_terbaru }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <label for="lembaga" class="kanan"> File Akreditasi PS 3)</label>
                    <input type="file" class="form-control lebar" name="peningkatan_terbaru_berkas" id="customFile" />
                </div>
                <div class="form-text" style="color: red">Ganti File, Atau Kosongkan bila tidak perlu di ganti</div>

                <div class="input-group input-group-sm mb-3">
                    <label class="kanan"> Nomor SK BAN-PT </label>
                    <input type="text" name="nomor_sk_banpt" class="form-control lebar" value="{{ $identity->nomor_sk_banpt }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="{{-- DI ISI VALUE DARI DATA YANG ADA --}}">
                </div>
                
                
            
               {{-- coding modal insert akhir --}}

            {{-- script modal insert --}}
            {{-- script modal insert akhir--}}
               

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>