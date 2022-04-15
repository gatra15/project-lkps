    {{-- AWAL PANEL + BUTTON --}}
    <div class="tab-pane fade" id="karya" role="tabpanel" aria-labelledby="karya-tab">
        <p class="d-flex justify-content-between">
            <a class="btn btn-primary" data-toggle="collapse" href="#des5" role="button" aria-expanded="false" aria-controls="des5">
                Deskripsi
            </a>
            @hasrole('perwakilan')
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkaryailmiah">
                Tambah data
            </button>
            @endhasrole
        </p>
        @can('download file')
    <a href="/kinerja-dosen/karya-ilmiah/download/excel" class="btn btn-success">Excel</a>
    <a href="/kinerja-dosen/karya-ilmiah/download/csv" class="btn btn-success">CSV</a>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table')" value="Print Document" />
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
            Cara Download PDF
        </button>
        @endcan

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
            <h5 class="modal-title" id="modalkaryailmiah">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.karilm')
        </div>
        </div>
    </div>

    {{-- Table Here --}}
    @include('tab.kinerjadosentab.karyailmiahdtpstable') 


     @foreach ($karyailmiah['karyailmiah'] as $karil)  
    <!-- Modal Edit Data K.Ilm DTPS -->
    <div class="modal fade" id="modalkaryailmiahedit-{{ $karil->id }}" tabindex="-1" aria-labelledby="modalkaryailmiahedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkaryailmiahedit">Edit Data {{ $karil->nama_dosen }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.karilmedit')
        </div>
        </div>
        </div>
    
        <!-- Modal Delete Data K.Ilm DTPS -->
        <div class="modal fade" id="modalkaryailmiahdelete-{{ $karil->id }}" tabindex="-1" aria-labelledby="modalkaryailmiahdelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalkaryailmiahdelete">Hapus Data {{ $karil->nama_dosen }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.karilmdelete')
        </div>
        </div>
        </div>

        <div class="modal fade" id="modaltolakkar-{{ $karil->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.tolak5')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalappkar-{{ $karil->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.app5')
            </div>
            </div>
        </div> 
        @endforeach

    </div>
@include('layouts.table')