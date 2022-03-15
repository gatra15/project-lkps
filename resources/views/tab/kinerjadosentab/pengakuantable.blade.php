<div id="print-table4">
    <table id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>

                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Nama Dosen</th>
                <th class="align-middle" scope="col" rowspan="2">Bidang Keahlian</th>
                <th class="align-middle" scope="col" rowspan="2" >Rekognisi <br> dan Bukti <br> Pendukung <sup>1)</sup></th>
                <th scope="col" colspan="3">Tingkat <sup>2)</sup></th>
                <th class="align-middle" scope="col" rowspan="2" >Tahun</th>  
                @hasrole('perwakilan')                  
                <th class="align-middle" scope="col" rowspan="2" >Opsi</th>  
                @endhasrole                  
            </tr>
            <tr>
                <th scope="col">Wilayah</th>
                <th scope="col">Nasional</th>
                <th scope="col">Internasional</th>
            </tr>
    
        </thead>

        <tbody class="text-dark">
            @foreach ($pengakuans as $pengakuan)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $pengakuan->nama }}</td> 
                <td>{{ $pengakuan->bidang_keahlian }}</td> 
                <td>
                @if ($pengakuan->bukti_pendukung == 'Tidak ada file yang ditambahkan' )
                <a class="btn btn-warning" href="{{ asset('storage/'.$pengakuan->bukti_pendukung) }}"> 
                    File <br> Tidak <br> Terbaca <br> <i class="fas fa-exclamation-triangle"></i>
                </a>     
                @else
                <a class="btn btn-success" href="{{ asset('storage/'.$pengakuan->bukti_pendukung) }}"> 
                    File <i class="fas fa-file-archive"></i>
                </a>
                @endif
                
              
                </td></td> 
                <td>{{ $pengakuan->tingkat == 'Wilayah' ? 'V' : '' }}</td> 
                <td>{{ $pengakuan->tingkat == 'Nasional' ? 'V' : '' }}</td> 
                <td>{{ $pengakuan->tingkat == 'Internasional' ? 'V' : '' }}</td> 
                <td>{{ $pengakuan->tahun }}</td> 
                @hasrole('perwakilan')
                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpengakuanedit-{{ $pengakuan->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/{{ $pengakuan->id }}" data-toggle="modal" data-target="#modalpengakuandelete-{{ $pengakuan->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
                @endforeach 
            <tr>
                <td colspan="4" class="text-center"><b>Jumlah</b></td>
                <td>{{ $countWilayah }}</td>
                <td>{{ $countNasional }}</td>
                <td>{{ $countInternasional }}</td>
                <td>{{ $sumPengakuan }}</td>
                <td></td>
            </tr>
            
    </table> 
</div>