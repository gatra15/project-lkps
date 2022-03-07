<div class="tab-pane fade" id="luaran" role="tabpanel" aria-labelledby="luaran-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des7" role="button" aria-expanded="false" aria-controls="des7">
            Deskripsi
        </a>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Tambah data
        </button>
    </p>
<div class="collapse" id="des7">
    <div class="card card-body">
        <p>
            Luaran Penelitian/PkM Lainnya oleh DTPS
        </p>
    </div> 
</div>
    <!-- Modal Tambah Data Luaran DTPS -->
    <div class="modal fade" id="modaldosentetap" tabindex="-1" aria-labelledby="modaldosentetap" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosentetap">Tambah Data Dosen Tetap</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            {{-- @include('partials.profildosenmodal.dosentetap') --}}
        </div>
        </div>
    </div>
{{-- CONTENT --}}

    <div id="printElement container-fluid">
        <table id='form-print' class="table text-center table-bordered table-condensed">
            <thead>
            <tr>

            <th class="align-middle" scope="col" rowspan="2">No</th>
            <th class="align-middle" scope="col" rowspan="2">Judul Luaran Penelitian/PkM</th>
            <th class="align-middle" scope="col" rowspan="2">Tahun</th>
            <th class="align-middle" scope="col" rowspan="2">Keterangan</th>                                               
            </tr>
            </thead>

            <tbody class="text-dark">
            <tr>
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
            
            <tr>
                <td colspan="2" class="text-center"><b>Jumlah </b> </td>
                <td class="text-left"> <b> N<sub>A</sub> :</b></td>
                <td scope="col"></td>
            </tr>
            </tbody>
            <thead>
                <th scope="col"> No </th>
                <th scope="col"> Judul Luaran Penelitian/PkM </th>
                <th scope="col"> Tahun </th>
                <th scope="col"> Keterangan </th>
            </thead>
            <tbody class="text-dark">
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
            
            <tr>
                <td colspan="2" class="text-center"><b>Jumlah </b> </td>
                <td class="text-left"> <b> N<sub>B</sub> :</b></td>
                <td scope="col"></td>
            </tr>
            </tbody>
            <thead>
                <th scope="col"> No </th>
                <th scope="col"> Judul Luaran Penelitian/PkM </th>
                <th scope="col"> Tahun </th>
                <th scope="col"> Keterangan </th>
            </thead>
            <tbody class="text-dark">
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
            
            <tr>
                <td colspan="2" class="text-center"><b>Jumlah </b> </td>
                <td class="text-left"> <b> N<sub>C</sub> :</b></td>
                <td scope="col"></td>
            </tr>
            </tbody>
            <thead>
                <th scope="col"> No </th>
                <th scope="col"> Judul Luaran Penelitian/PkM </th>
                <th scope="col"> Tahun </th>
                <th scope="col"> Keterangan </th>
            </thead>
            <tbody class="text-dark">
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
            <tr>
                <td colspan="2" class="text-center"><b>Jumlah </b> </td>
                <td class="text-left"> <b> N<sub>D</sub> :</b></td>
                <td scope="col"></td>
            </tr>
            </tbody>
            <thead>
                <th scope="col"> No </th>
                <th scope="col"> Judul Luaran Penelitian/PkM </th>
                <th scope="col"> Tahun </th>
                <th scope="col" > Keterangan </th>
            </thead>
            <tbody class="text-dark">
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
            </tbody>
        </table> 
    </div>
</div>