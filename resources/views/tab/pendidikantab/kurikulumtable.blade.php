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
        @hasanyrole('perwakilan|dekan')            
            <th scope="col" class="align-middle text-center" rowspan="2">Opsi</th>
        @endhasanyrole 
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
@hasanyrole('perwakilan|dekan')
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
                
                
                <td class="project-actions text-right ms-1 ps-1">
                <ul class="action-list d-flex justify-content-center " id="action">
                    @hasrole('perwakilan')
                    
                        <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalkurikulumedit-{{ $kur->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/pendidikan/{{ $kur->id }}" data-toggle="modal" data-target="#modalkurikulumdelete-{{ $kur->id }}"><i class="fas fa-trash btn-del"></i></a></li>

                    @endhasrole
                    @hasrole('dekan')
                        <li>
                            <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappkurikulum-{{ $kur->id }}"><i class="fas fa-check-circle"></i></a>
                        </li>
                        <li>
                            <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakkurikulum-{{ $kur->id }}"><i class="fas fa-times-circle"></i></a>
                        </li>
                    @endhasrole
                </ul>
                </td>
    
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
@endhasanyrole

    @hasrole('asesor')       
        <tbody>
    
        @foreach ($kurikulum['kurikulum_asesor'] as $kur)
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
                
        </tr>
        @endforeach

        <tr>
            <td class="putih align-middle text-center" colspan="4"><b>Jumlah </b></td>
            <td class="putih align-middle text-center">{{ $kurikulum['makul_asesor'] }}</td>
            <td class="putih align-middle text-center">{{ $kurikulum['bobot_kuliah_asesor'] }}</td>
            <td class="putih align-middle text-center">{{ $kurikulum['bobot_seminar_asesor'] }}</td>
            <td class="putih align-middle text-center">{{ $kurikulum['bobot_praktikum_asesor'] }}</td>
            <td class="putih align-middle text-center">{{ $kurikulum['konversi_kredit_jam_asesor'] }} <b>Jam</b> </td>
            <td colspan="6"></td>
        </tr>
        </tbody>
    @endhasrole

    </table> 
</div>

@include('layouts.table')