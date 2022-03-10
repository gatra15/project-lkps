<div id="printElement">
    <table id='form-print' class="table text-center table-bordered">
    <thead >
    <tr>
        <th class="align-middle" scope="col" rowspan="2">Tahun Akademik</th>
        <th class="align-middle" scope="col" rowspan="2">Daya Tampung</th>
        <th scope="col" colspan="2">Jumlah Calon Mahasiswa</th>
        <th scope="col" colspan="2">Jumlah Mahasiswa Baru</th>
        <th scope="col" colspan="2">Jumlah Mahasiswa Aktif</th>  
        <th class="align-middle" scope="col" rowspan="2">Action</th>  
    </tr>
    <tr>
        <th scope="col">Pendaftar</th>
        <th scope="col">Lulus Seleksi</th>
        <th scope="col">Reguler</th>
        <th scope="col">Transfer</th>   
        <th scope="col">Reguler</th>
        <th scope="col">Transfer</th>      
    </tr>
    
    </thead>
    <?php $x='-';?>
    <tbody class="text-dark">
    <?php $i=4;?>
    @foreach ($mahasiswa as $index => $mhs)
        <tr>
           <td>TS
            @if ($i == 0)
                <?php $i="";?>
            @else
                <?php echo $x;?>
            @endif   
            {{ $i }}</td>
           <td>{{ $mhs->daya_tampung }}</td> 
           <td>{{ $mhs->c_pendaftar }}</td> 
           <td>{{ $mhs->c_lulus_seleksi }}</td> 
           <td>{{ $mhs->mahasiswa_reguler }}</td> 
           <td>{{ $mhs->mahasiswa_transfer }}</td> 
           <td>{{ $mhs->mahasiswa_aktif_reguler }}</td> 
           <td>{{ $mhs->mahasiswa_aktif_transfer }}</td>
           <td>
            <ul class="action-list d-flex justify-content-center" id="action">
                <li><a href="#" class="btn btn-primary m-1"><i class="fas fa-edit"></i></a></li>
                <li><a href="#" class="btn btn-danger m-1"><i class="fas fa-trash"></i></a></li>
            </ul></td>
         <?php $i--; ?>
        </tr>
    @endforeach
    
    
    </tbody>
    </table> 
</div>