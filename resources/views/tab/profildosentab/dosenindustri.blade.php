</div>
<div class="tab-pane fade" id="dosen-industri" role="tabpanel" aria-labelledby="dosIndustri-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des5" role="button" aria-expanded="false" aria-controls="des5">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
    <div class="collapse" id="des5">
        <div class="card card-body">
            <p>
                Dosen Industri/Praktisi
            </p>
        </div> 
    </div>
{{-- CONTENT --}}

<div id="printElement container-fluid">
<table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
<thead>
<tr>

<th class="align-middle" scope="col" rowspan="2">Nama Dosen/ Industri/ Praktisi</th>
<th class="align-middle" scope="col" rowspan="2">NIDK</th>
<th class="align-middle" scope="col" rowspan="2" >Perusahaan Industri</th>
<th class="align-middle" scope="col" rowspan="2">Pendidikan Tertinggi</th>
<th class="align-middle" scope="col" rowspan="2" >Bidang Keahlian</th>                   
<th class="align-middle" scope="col" rowspan="2" >Sertifikat Profesi/ Kompetensi/ Industri</th>  
<th class="align-middle" scope="col" rowspan="2" >Mata Kuliah yang Diampu </th>  
<th class="align-middle" scope="col" rowspan="2" >Bobot Kredit (SKS)</th>  
</tr>

</thead>

<tbody class="text-dark">
<tr>
<td>Eko</td>
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