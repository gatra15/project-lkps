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
<div id="print-table3" >
    <table class="table table-bordered table-condensed ">
    <thead>
    
    <tr>
    <th scope="col" class="align-middle text-center" rowspan="2">No</th>
    <th scope="col" class="align-middle text-center" rowspan="2"> <span> Semester</span></th>
    <th scope="col" class="align-middle text-center" rowspan="2">Kode <br> Mata <br> Kuliah</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Nama <br> Mata <br> Kuliah</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Mata Kuliah <br> Kompetensi <sup>1)</sup></th>
    <th scope="col" class="align-middle text-center" colspan="3">Bukti Kredit <br> (sks)</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Konversi Kredit ke Jam <sup>2)</sup></th>
    <th scope="col" class="align-middle text-center" colspan="4">Bukti Kredit <br> (sks)</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Dokumen <br> Rencana <br> Pembela- <br> jaran <sup>3)</sup></th>
    <th scope="col" class="align-middle text-center" rowspan="2">Unit <br> Penye- <br> lenggara</th>
    @hasrole('perwakilan')
    <th scope="col" class="align-middle text-center" rowspan="2">Opsi</th>
    @endhasrole
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
        @foreach ($kurikulum['kurikulum'] as $kur)
        <tr>
            
            <td>{{ $loop->iteration }}</td>
            <td>{{ $kur->semester }}</td>
            <td>{{ $kur->kode_mata_kuliah }}</td>
            <td>{{ $kur->nama_mata_kuliah }}</td>
            <td>{{ $kur->mata_kuliah_kompetensial == '1' ? 'V' : '' }}</td>
            <td>{{ $kur->bobot_kuliah }}</td>
            <td>{{ $kur->bobot_seminar }}</td>
            <td>{{ $kur->bobot_praktikum }}</td>
            <td>{{ $kur->konversi_kredit_jam }} Jam</td>
            <td>{{ $kur->capaian_sikap == '1' ? 'V' : '' }}</td>
            <td>{{ $kur->capaian_pengetahuan == '1' ? 'V' : ''  }}</td>
            <td>{{ $kur->capaian_ketrampilan_umum == '1' ? 'V' : ''  }}</td>
            <td>{{ $kur->capaian_ketrampilan_khusus == '1' ? 'V' : ''  }}</td>
            <td>{{ $kur->document_rencana_pembelajaran == '1' ? 'V' : ''  }}</td>
            <td>{{ $kur->unit_penyelenggara }}</td>
            @hasrole('perwakilan')
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkurikulumedit-{{ $kur->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/pendidikan/{{ $kur->id }}" data-toggle="modal" data-target="#modalkurikulumdelete-{{ $kur->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
            @endhasrole
        </tr>
        
        @endforeach
      
        <tr>
        <td class="putih align-middle text-center" colspan="4"><b>Jumlah </b></td>
        <td class="putih align-middle text-center">{{ $kurikulum['makul'] }}</td>
        <td class="putih align-middle text-center">{{ $kurikulum['bobot_kuliah'] }}</td>
        <td class="putih align-middle text-center">{{ $kurikulum['bobot_seminar'] }}</td>
        <td class="putih align-middle text-center">{{ $kurikulum['bobot_praktikum'] }}</td>
        <td class="putih align-middle text-center">{{ $kurikulum['konversi_kredit_jam'] }} <b>Jam</b> </td>
        <td colspan="7"></td>
        </tr>
       
    </tbody>
    </table> 
</div>

@include('layouts.table')