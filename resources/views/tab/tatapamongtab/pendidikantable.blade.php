<style>
    table.table-bordered{
  border: 1px black;
  margin-top:20px;
}
table.table-bordered > thead > tr > th{
  border:0.5px solid black;
}
table.table-bordered > tbody > tr > td{
  border:0.5px solid black;
}

thead{
background-color: #d8d8d8;
}
</style>
<form action="{{ url('/tata-pamong-tata-kelola-kerjasama') }}" method="GET">
    <div class="container-fluid">
        <table  class="table text-center table-bordered table-condensed table-responsive">
            <thead>
                <tr>
                    <th scope="col" class="align-middle" rowspan="2">Tema</th>
                    <th class="align-middle" scope="col" rowspan="2">Lembaga Mitra</th>
                    <th scope="col" colspan="3">Tingkat</th>
                    <th class="align-middle" scope="col" rowspan="2" >Judul Kegiatan Kerjasama</th>
                    <th class="align-middle" scope="col" rowspan="2">Manfaat Bagi PS yang Diakreditasi</th>
                    <th class="align-middle" scope="col" rowspan="2" >Waktu dan Durasi</th>  
                    <th class="align-middle" scope="col" rowspan="2" >Bukti Kerjasama</th>  
                    <th class="align-middle" scope="col" rowspan="2" >Opsi</th>  
                </tr>
                <tr>
                    <th>Internasional</th>
                    <th>Nasional</th>       
                    <th>Lokal <br> /Wilayah</th>       
                </tr>
        
            </thead>
        
            
       
            <tbody class="text-dark">
                
                @foreach ($kerjasama as $indikator)
                @if ($indikator->tridharma == 'Pendidikan')
                <tr>
                    <td>Pendidikan</td>
                    <td>{{ $indikator->lembaga_mitra }}</td>
                    <td>{{ $indikator->tingkat == 'Internasional' ? 'V' : '' }}</td>
                    <td>{{ $indikator->tingkat == 'Nasional' ? 'V' : '' }}</td>
                    <td>{{ $indikator->tingkat == 'Lokal' ? 'V' : '' }}</td>

                    <td>{{ $indikator->judul_kegiatan }}</td>
                    <td>{{ $indikator->manfaat }}</td>
                    <td>{{ $indikator->waktu_durasi }}</td>
                    <td>{{ $indikator->bukti_kerjasama }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit-{{ $indikator->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete-{{ $indikator->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                </tr>
                @endif
                @endforeach
                
                
                <tr>
                    <td colspan="10" class="text-left"><b>Jumlah Pendidikan : {{ $jmlpendidikan }}</b> </td>
                </tr>
        </table> 
    
    </div>
</form>