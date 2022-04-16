<div class="tab-pane fade show active" id="pengakuan" role="tabpanel" aria-labelledby="pengakuan-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des1" role="button" aria-expanded="false" aria-controls="des1">
            Deskripsi
        </a>
        @hasrole('perwakilan')
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpengakuan">
            Tambah data
        </button>
        @endhasrole
    </p>
    @can('download file')
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table4')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    @endcan
<div class="collapse" id="des1">
    <div class="card card-body">
        <p>
            Tuliskan pengakuan/rekognisi atas kepakaran/prestasi/kinerja DTPS yang diterima
            dalam 3 tahun terakhir dengan mengikuti format Tabel berikut ini : <br> <br>
            <b>Keterangan</b> <br>
            <sup>1)</sup> Pengakuan atau rekognisi atas kepakaran/prestasi/kinerja dapat berupa: <br>
            a) menjadi visiting lecturer atau visiting scholar di program studi/perguruan tinggi
            terakreditasi A/Unggul atau program studi/perguruan tinggi internasional bereputasi. <br>
            b) menjadi keynote speaker/invited speaker pada pertemuan ilmiah tingkat nasional/
            internasional. <br>
            c) menjadi editor atau mitra bestari pada jurnal nasional terakreditasi/jurnal
            internasional bereputasi di bidang yang sesuai dengan bidang program studi. <br>
            d) menjadi staf ahli/narasumber di lembaga tingkat wilayah/nasional/internasional
            pada bidang yang sesuai dengan bidang program studi (untuk pengusul dari
            program studi pada program Sarjana/Magister/Doktor), atau menjadi tenaga
            ahli/konsultan di lembaga/industri tingkat wilayah/nasional/ internasional pada
            bidang yang sesuai dengan bidang program studi (untuk pengusul dari program
            studi pada program Diploma Tiga/Sarjana Terapan/Magister Terapan/Doktor
            Terapan). <br>
            e) mendapat penghargaan atas prestasi dan kinerja ditingkat wilayah /nasional /internasional. <br>
            <sup>2)</sup> Diisi dengan tanda centang V pada kolom yang sesuai.
        </p>
    </div> 
</div>
    
<!-- Modal Tambah Data Pengakuan DTPS -->
    <div class="modal fade" id="modalpengakuan" tabindex="-1" aria-labelledby="modalpengakuan" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalpengakuan">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.pengakuan')
        </div>
        </div>
        </div>

{{-- TABLE HERE --}}
@include('tab.kinerjadosentab.pengakuantable')

    @foreach ($pengakuans as $pengakuan)
    
    <!-- Modal Edit Data Pengakuan DTPS -->
    <div class="modal fade" id="modalpengakuanedit-{{ $pengakuan->id }}" tabindex="-1" aria-labelledby="modalpengakuanedit" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalpengakuanedit">Edit Data {{ $pengakuan->nama }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.pengakuanedit')
        </div>
        </div>
        </div>

        <!-- Modal Delete Data Pengakuan DTPS -->
        <div class="modal fade" id="modalpengakuandelete-{{ $pengakuan->id }}" tabindex="-1" aria-labelledby="modalpengakuandelete" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modalpengakuandelete">Hapus Data {{ $pengakuan->nama }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.kinerjadosenmodal.pengakuandelete')
        </div>
        </div>
        </div>

        <div class="modal fade" id="modaltolakpengakuan-{{ $pengakuan->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak??  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.tolak')
            </div>
            </div>
        </div> 
        
        <div class="modal fade" id="modalapppengakuan-{{ $pengakuan->id }}" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
            <h5 class="modal-title" id="modaltolak"> Approve?  </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @include('partials.kinerjadosenmodal.app')
            </div>
            </div>
        </div> 

        @endforeach 
</div>
@include('layouts.table')