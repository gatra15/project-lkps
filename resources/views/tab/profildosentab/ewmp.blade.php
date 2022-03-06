<div class="tab-pane fade" id="ewmp" role="tabpanel" aria-labelledby="ewmp-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des3" role="button" aria-expanded="false" aria-controls="des3">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
    <div class="collapse" id="des3">
        <div class="card card-body">
            <p>
                Dosen Tidak Tetap
            </p>
        </div> 
    </div>
{{-- CONTENT --}}

<div id="printElement container-fluid">
<table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
<thead>
<tr>

<th class="align-middle" scope="col" rowspan="3">No</th>
<th class="align-middle" scope="col" rowspan="3">Nama Dosen(DT)</th>
<th class="align-middle" scope="col" rowspan="3">DTPS</th>
<th scope="col" colspan="6" >Ekuivalen Waktu Mengajar Penuh(EWMP) pada saat TS dalam satuan kredit semester (sks)</th>
<th class="align-middle" scope="col" rowspan="3">Jumlah (SKS)</th>  
<th class="align-middle" scope="col" rowspan="3">Rata-tara per semester (SKS)</th>  
</tr>
<tr>
<th scope="col" colspan="3">pada PS yang Diakreditasi</th>
<th class="align-middle" scope="col" rowspan="2">Penelitian</th>
<th class="align-middle" scope="col" rowspan="2">PkM</th> 
<th class="align-middle" scope="col" rowspan="2">Tugas Tambahan dan/atau Penunjang</th>        
</tr>
<tr>
<th scope="col" >PS yang Diakreditasi</th>
<th scope="col" >PS Lain di dalam PT</th>
<th scope="col" >PS Lain di luar PT</th> 
</tr>

</thead>

<tbody class="text-dark">
<tr>

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
@endforeach --}}
</table> 
</div>