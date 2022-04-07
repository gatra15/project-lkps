<div id="print-table2">
    <table id='form-print' class="table text-center table-bordered">
    <thead>
        <tr>
            <th class="align-middle" scope="col" rowspan="2">No</th>
            <th class="align-middle" scope="col" rowspan="2">Program Studi</th>
            <th class="align-middle" scope="col" colspan="3">Jumlah Mahasiswa <br> Aktif</th>
            <th class="align-middle" scope="col" colspan="3" >Jumlah Mahasiswa <br> Asing Penuh <br> Waktu(Full-time)</th>
            <th class="align-middle" scope="col" colspan="3">Jumlah Mahasiswa <br> Asing Paruh <br> Waktu(Part-time)</th>
            @hasrole('perwakilan')  
            <th class="align-middle" scope="col" rowspan="2">Opsi</th>
            @endhasrole
        </tr>
        <tr>
            <th scope="col">TS-2</th>
            <th scope="col">TS-1</th>  
            <th scope="col">TS</th>
            <th scope="col">TS-2</th>
            <th scope="col">TS-1</th>  
            <th scope="col">TS</th> 
            <th scope="col">TS-2</th>
            <th scope="col">TS-1</th>  
            <th scope="col">TS</th>     
        </tr>
    
    </thead>
    
    <tbody class="text-dark">
        @foreach ($mahasiswa_asing['mahasiswa'] as $key => $mhs)
        <tr>
           <td>{{ $loop->iteration }}</td>
           <td>{{ session()->has('prodi') ? 'S1 '.session('prodi') : 'S1 '.auth()->user()->prodi->name }}</td>   
           <td>{{ $mhs['mahasiswa_aktif_ts2'] }}</td> 
           <td>{{ $mhs['mahasiswa_aktif_ts1'] }}</td> 
           <td>{{ $mhs['mahasiswa_aktif_ts'] }}</td> 
           <td>{{ $mhs['mahasiswa_asing_ft_ts2'] }}</td> 
           <td>{{ $mhs['mahasiswa_asing_ft_ts1'] }}</td> 
           <td>{{ $mhs['mahasiswa_asing_ft_ts'] }}</td>
           <td>{{ $mhs['mahasiswa_asing_pt_ts2'] }}</td>
           <td>{{ $mhs['mahasiswa_asing_pt_ts1'] }}</td>
           <td>{{ $mhs['mahasiswa_asing_pt_ts'] }}</td>
           @hasrole('perwakilan')
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalmahasiswaasingedit-{{ $mhs['id'] }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/mahasiswa/mahasiswa-asing/{{ $mhs['id'] }}" data-toggle="modal" data-target="#modalmahasiswaasingdelete-{{ $mhs['id'] }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
            @endhasrole
        </tr>
    @endforeach
     <tr>
         <td class="align-middle text-center" colspan="2"><b>Jumlah</b></td>
         <td>{{ $mahasiswa_asing['aktif_ts2'] }}</td>
         <td>{{ $mahasiswa_asing['aktif_ts1'] }}</td>
         <td>{{ $mahasiswa_asing['aktif_ts'] }}</td>
         <td>{{ $mahasiswa_asing['full_ts2'] }}</td>
         <td>{{ $mahasiswa_asing['full_ts1'] }}</td>
         <td>{{ $mahasiswa_asing['full_ts'] }}</td>
         <td>{{ $mahasiswa_asing['part_ts2'] }}</td>
         <td>{{ $mahasiswa_asing['part_ts1'] }}</td>
         <td>{{ $mahasiswa_asing['part_ts'] }}</td>
         @hasrole('perwakilan')
         <td></td>
         @endhasrole
     </tr>
    </tbody>
    </table> 
</div>
@hasrole('dekan')
    <div class="modal-footer bg-whitet">
    <form action="#" method="post">
      @method('put')
      @csrf
    <button type="submit" class="btn btn-success btn-sm">
      Approve 
    </button>
    </form>
    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modaltolakasing">
      Tolak
    </button>
    </div>
    @endhasrole

    <div class="modal fade" id="modaltolakasing" tabindex="-1" aria-labelledby="modaltolak" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
        <h5 class="modal-title" id="modaltolak"> Kenapa Anda Menolak?  </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.mahasiswamodal.tolak')
        </div>
        </div>
    </div> 