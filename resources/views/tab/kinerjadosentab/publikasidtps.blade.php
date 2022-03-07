<div class="tab-pane fade" id="publikasi" role="tabpanel" aria-labelledby="publikasi-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des4" role="button" aria-expanded="false" aria-controls="des4">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>

<div class="collapse" id="des4">
    <div class="card card-body">
        <p>
            Publikasi Ilmiah DTPS
        </p>
    </div> 
</div>

    <!-- Modal Tambah Data Publikasi DTPS -->
    <div class="modal fade" id="modaldosentetap" tabindex="-1" aria-labelledby="modaldosentetap" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="modaldosentetap">Tambah Data Dosen Tetap</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        {{-- @include('partials.profildosenmodal.dosentetap') --}}
    </div>
    </div>
    </div>

{{-- CONTENT --}}

    <div id="printElement container-fluid">
        <table id='form-print' class="table table-inverse text-center table-bordered table-condensed">
            <thead>
                <tr>

                    <th class="align-middle" scope="col" rowspan="2">Jenis</th>
                    <th scope="col" colspan="3">Jumlah Judul</th>
                    <th class="align-middle" scope="col" rowspan="2" >Jumlah</th>                    
                </tr>
                <tr>
                    <th scope="col">TS-2</th>
                    <th scope="col">TS-1</th>
                    <th scope="col">TS</th>
                </tr>

            </thead>
            <tbody>
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

            <!-- Modal Edit Data Publikasi DTPS -->
            <div class="modal fade" id="modaldosentetapedit" tabindex="-1" aria-labelledby="modaldosentetapedit" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modaldosentetapedit">Edit Data Dosen Tetap</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    {{-- @include('partials.profildosenmodal.dosentetapedit') --}}
                </div>
                </div>
            </div>
        
                <!-- Modal Delete Data Publikasi DTPS -->
            <div class="modal fade" id="modaldosentetapdelete" tabindex="-1" aria-labelledby="modaldosentetapdelete" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="modaldosentetapdelete">Yakin?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    {{-- @include('partials.profildosenmodal.dosentetapdelete') --}}
                </div>
                </div>
            </div>

            {{-- @endforeach --}}
            </tbody>

            
        </table> 
    </div>
</div>