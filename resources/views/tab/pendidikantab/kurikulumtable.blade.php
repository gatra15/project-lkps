@extends('layouts.table')
<style>
    
th {
    position: relative;
    padding: 10px;
}

th span {
  display:inline-table;
  writing-mode: tb-rl;
  white-space:pre;
}


</style>
<div>
    <table class="table table-bordered table-condensed">
    <thead>
    
    <tr>
    <th scope="col" class="align-middle text-center" rowspan="2">No</th>
    <th scope="col" class="align-middle text-center" rowspan="2"> <span> Semester</span></th>
    <th scope="col" class="align-middle text-center" rowspan="2">Kode <br> Mata <br> Kuliah</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Nama <br> Mata <br> Kuliah</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Mata Kuliah <br> Kompetensi <sup>1)</sup></th>
    <th scope="col" class="align-middle text-center" colspan="3">Bukti Kredit <br> (sks)</th>
    <th scope="col" rowspan="2"><span>Konversi Kredit ke Jam <sup>2)</sup></span></th>
    <th scope="col" class="align-middle text-center" colspan="4">Bukti Kredit <br> (sks)</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Dokumen <br> Rencana <br> Pembela- <br> jaran <sup>3)</sup></th>
    <th scope="col" class="align-middle text-center" rowspan="2">Unit <br> Penye- <br> lenggara</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Opsi</th>
    </tr>
    <tr>
        <th> <span class="text-center">Kuliah/ Responsi/ <br> Tutorial</span>  </th>
        <th> <span class="text-center">Seminar</span> </th>
        <th> <span class="text-center">Praktikum/ Praktik/ <br> Praktik Lapangan</span> </th>
        <th> <span class="text-center">Sikap</span>  </th>
        <th> <span class="text-center">Pengetahuan</span> </th>
        <th> <span class="text-center">Keterampilan <br> Umum</span> </th>
        <th> <span class="text-center">Keterampilan <br> Khusus</span> </th>
    </tr>
    
    </thead>
    
    <tbody>
        @foreach ($kurikulum['kurikulum'] as $kurikulum)
        <tr>
            
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kurikulum->semester }}</td>
            <td>{{ $kurikulum->kode_mata_kuliah }}</td>
            <td>{{ $kurikulum->nama_mata_kuliah }}</td>
            <td>{{ $kurikulum->mata_kuliah_kompetensial == '1' ? 'V' : '' }}</td>
            <td>{{ $kurikulum->bobot_kuliah }}</td>
            <td>{{ $kurikulum->bobot_seminar }}</td>
            <td>{{ $kurikulum->bobot_praktikum }}</td>
            <td>{{ $kurikulum->konversi_kredit_jam }}</td>
            <td>{{ $kurikulum->capaian_sikap == '1' ? 'V' : '' }}</td>
            <td>{{ $kurikulum->capaian_pengetahuan == '1' ? 'V' : ''  }}</td>
            <td>{{ $kurikulum->capaian_ketrampilan_umum == '1' ? 'V' : ''  }}</td>
            <td>{{ $kurikulum->capaian_ketrampilan_khusus == '1' ? 'V' : ''  }}</td>
            <td>{{ $kurikulum->document_rencana_pembelajaran == '1' ? 'V' : ''  }}</td>
            <td>{{ $kurikulum->unit_penyelenggara }}</td>
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkurikulumedit-{{ $kurikulum->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/pendidikan/{{ $kurikulum->id }}" data-toggle="modal" data-target="#modalkurikulumdelete-{{ $kurikulum->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
        </tr>
        </tbody>
        @endforeach
        <thead>
        <tr>
        <th class="putih align-middle text-center" colspan="4"><b>Jumlah </b></th>
        <th class="putih align-middle text-center"></th>
        <th class="putih align-middle text-center"></th>
        <th class="putih align-middle text-center"></th>
        <th class="putih align-middle text-center"></th>
        <th class="putih align-middle text-center"></th>
        <th colspan="7"></th>
        </tr>
        </thead>
    
    </table> 
</div>

