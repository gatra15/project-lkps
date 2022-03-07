    {{-- AWAL PANEL + BUTTON --}}
    <div class="tab-pane fade" id="karya" role="tabpanel" aria-labelledby="karya-tab">
        <p class="d-flex justify-content-between">
            <a class="btn btn-primary" data-toggle="collapse" href="#des5" role="button" aria-expanded="false" aria-controls="des5">
                Deskripsi
            </a>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Tambah data
            </button>
        </p>

    {{-- DESKRIPSI --}}
    <div class="collapse" id="des5">
        <div class="card card-body">
            <p>
                Tuliskan judul artikel karya ilmiah DTPS yang disitasi dalam <b> 3 tahun terakhir  </b> dengan
                mengikuti format Tabel berikut ini. Judul artikel yang disitasi harus relevan dengan
                bidang program studi. <br> <br>
            </p>
        </div> 
    </div>

    <!-- Modal Tambah Data Karya Ilmiah DTPS -->
    <div class="modal fade" id="modalkaryailmiah" tabindex="-1" aria-labelledby="modalkaryailmiah" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkaryailmiah">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.karilm')
        </div>
        </div>
    </div>

    {{-- CONTENT --}}
    <div id="printElement container-fluid">
        <table id='form-print' class="table text-center table-bordered table-condensed">
            <thead>
                <tr>

                    <th class="align-middle" scope="col" rowspan="2">No</th>
                    <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                    <th class="align-middle" scope="col" rowspan="2">Judul Artikel yang Disitasi (Jurnal/Buku,Volume, Tahun, Nomor,Halaman)</th>
                    <th class="align-middle" scope="col" rowspan="2" >Jumlah Sitasi</th>                    
                </tr>


            </thead>

            <tbody class="text-dark">
                <tr>
                    <td>Eko</td>
                    <td>Eko</td>
                    <td>Eko</td>
                </tr>
            {{-- @foreach ($mahasiswa_asing as $mhs)
            <tr>
            @for ($i = 0; $i < $count; $i++)
            <td>{{ $i }}</td>
            @endfor
            <td>{{ $mhs->daya_tampung }}</td> 
            <td>{{ $mhs->c_pendaftar }}</td> 
            <td>{{ $mhs->c_lulus_seleksi }}</td> 
            <td>{{ $mhs->mahasiswa_reguler }}</td> 
            <td>{{ $mhs->mahasiswa_transfer }}</td> 
            <td>{{ $mhs->mahasiswa_aktif_reguler }}</td> 
            <td>{{ $mhs->mahasiswa_aktif_transfer }}</td>
            </tr>
             --}}

            <!-- Modal Edit Data K.Ilm DTPS -->
            <div class="modal fade" id="modalkaryailmiahedit" tabindex="-1" aria-labelledby="modalkaryailmiahedit" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalkaryailmiahedit">Edit Data Dosen Tetap</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.karilmedit')
            </div>
            </div>
            </div>
        
            <!-- Modal Delete Data K.Ilm DTPS -->
            <div class="modal fade" id="modalkaryailmiahdelete" tabindex="-1" aria-labelledby="modalkaryailmiahdelete" aria-hidden="true">
            <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="modalkaryailmiahdelete">Yakin?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.karilmdelete')
            </div>
            </div>
            </div>

            {{-- @endforeach --}}

            <tr>
                <td colspan="2"><b>Jumlah</b></td>
                <td></td>
                <td></td>
            </tr>
            </table> 
        </div>
    </div>