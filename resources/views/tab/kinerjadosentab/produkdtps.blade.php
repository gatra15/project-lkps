<div class="tab-pane fade" id="produk" role="tabpanel" aria-labelledby="produk-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des6" role="button" aria-expanded="false" aria-controls="des6">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
<div class="collapse" id="des6">
    <div class="card card-body">
        <p>
            Produk/jasa DTPS yang diadopsi oleh industri/masyarakat
        </p>
    </div> 
</div>
{{-- CONTENT --}}

<div id="printElement container-fluid">
<table id='form-print' class="table text-center table-bordered table-condensed">
<thead>
<tr>

<th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
<th class="align-middle" scope="col" rowspan="2">Nama Produk/Jasa</th>
<th class="align-middle" scope="col" rowspan="2">Deskripsi Produk/Jasa</th>                    
<th class="align-middle" scope="col" rowspan="2" >Bukti</th>                                
</tr>


</thead>

<tbody class="text-dark">
<tr>
<td>Eko</td>
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
@endforeach --}}
</table> 
</div>
</div>