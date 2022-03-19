<div class="tab-pane fade show active" id="identitas" role="tablist" aria-labelledby="kualitas-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Deskripsi
        </a>
    </p>
 
    <div class="collapse" id="collapseExample">
        <div class="card card-body">
        <p>
            <b>Keterangan</b> <br>
            1) Lampirkan salinan Surat Keputusan Pendirian Perguruan Tinggi. <br>
            2) Lampirkan salinan Surat Keputusan Pembukaan Program Studi. <br>
            3) Lampirkan salinan Surat Keputusan Akreditasi Program Studi terbaru <br>
        </p>
        </div> 
    </div>

    <form action="/identitas-pengusul" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">
            
            <div class="card-body px-20 pb-20">
                <div class="row">
                    
                    {{-- coding modal insert --}}
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan" class="kanan"> Perguruan Tinggi </label>
                        <input type="text" name="perguruan_tinggi" class="form-control lebar"  >
                    </div>
                    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> UPPS </label>
                        <input type="text" name="unit_pengelola" class="form-control lebar"  >
                    </div>
                    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Jenis Program </label>
                        <input type="text" name="jenis_program" class="form-control lebar" >
                    </div>
                    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Nama Program Studi </label>
                        <input type="text" name="prodi" class="form-control lebar" >
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Alamat </label>
                        <input type="text" name="prodi" class="form-control lebar" >
                    </div>
                    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Nomor Telepon </label>
                        <input type="text" name="no_telepon" class="form-control lebar"  >
                    </div>
    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Email dan Website </label>
                        <input type="text" name="email_website" class="form-control lebar"  >
                    </div>
                    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Nomor SK Pendirian PT </label>
                        <input type="text" name="np_sk1" class="form-control lebar"  >
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> File SK Pendirian PT 1) </label>
                        <input type="file" name="no_sk1_berkas" class="form-control lebar" id="customFile" required>
                    </div>
    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Tanggal SK Pendirian PT </label>
                        <input type="text" name="tanggal_sk_pendirian" class="form-control lebar"  >
                    </div>
    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Pejabat Penandatangan SK Pendirian PT </label>
                        <input type="text" name="pejabat_penandatanganan" class="form-control lebar" >
                    </div>
                    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Nomor SK Pembukaan PS </label>
                        <input type="text" name="no_sk2" class="form-control lebar"  >
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> File SK Pembukaan PS 2) </label>
                        <input type="file" name="no_sk2_berkas" class="form-control lebar" id="customFile" required>
                    </div>
    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Tanggal SK Pembukaan PS </label>
                        <input type="text" name="tanggal_sk_pembukaan" class="form-control lebar"  >
                    </div>
    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Pejabat Penandatangan SK Pembukaan PS </label>
                        <input type="text" name="pejabat_pembukaan" class="form-control lebar"  >
                    </div>
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> SK Pembukaan PS </label>
                        <input type="text" name="sk_pembukaan" class="form-control lebar"  >
                    </div>
    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Tahun Pertama Kali Menerima Mahasiswa </label>
                        <input type="text" name="tahun_pertama" class="form-control lebar"  >
                    </div>

                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Akreditasi PS </label>
                        <input type="text" name="peningkatan_terbaru" class="form-control lebar"  >
                    </div>
    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> File Akreditasi PS 3) </label>
                        <input type="file" name="peningkatan_terbaru_berkas" class="form-control lebar" id="customFile" required>
                    </div>
    
                    <div class="input-group input-group-sm mb-3">
                        <label class="kanan"> Nomor SK BAN-PT </label>
                        <input type="text" name="nomor_sk_banpt" class="form-control lebar"  >
                    </div>
                    
                    
                
                   {{-- coding modal insert akhir --}}
    
                {{-- script modal insert --}}
                {{-- script modal insert akhir--}}
                   
    
                </div>
            </div>
        
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Tambah</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </form>

</div>
