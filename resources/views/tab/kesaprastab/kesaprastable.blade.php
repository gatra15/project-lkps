@include('layouts.table')
<form action="{{ url('/tata-pamong-tata-kelola-kerjasama') }}" method="GET">
    <div id="print-table" class="container-fluid">
        <table width="90%" id='form-print' class="table text-center table-bordered table-condensed">
            <thead>
                <tr>
                    <th class="align-middle" scope="col" rowspan="2">NO</th>
                    <th class="align-middle" scope="col" rowspan="2">Jenis Penggunaan</th>
                    <th scope="col" colspan="4">Unit Pengelola Program Studi (Rp.)</th>
                    <th scope="col" colspan="4">Program Studi (Rp.)</th>
                    <th class="align-middle" scope="col" rowspan="2">Opsi</th>
                </tr>
                <tr>
                    <th scope="col">TS-2</th>
                    <th scope="col">TS-1</th>
                    <th scope="col">TS</th>
                    <th scope="col">Rata-rata</th>
                    <th scope="col">TS-2</th>
                    <th scope="col">TS-1</th>
                    <th scope="col">TS</th>
                    <th scope="col">Rata-rata</th>
                </tr>
                <tr>
                    <th class="text-center putih"> 1 </th>
                    <th class="text-left putih" colspan="1"> Biaya Operasional Pendidikan </th>
                    <th colspan="9"> </th>
                </tr>
        
            </thead>
        
            <tbody class="text-dark">
                
                {{-- @foreach ($kerjasama as $indikator)
                @if ($indikator->tridharma == 'Pendidikan') --}} 
                {{-- nama dari indikator pertama  --}}
                {{-- ISI SEEDER 1 
                    a. Biaya Dosen (Gaji, Honor) <br>
                    b. Biaya Tenaga Kependidikan (Gaji, <br>
                    Honor)
                    c. Biaya Operasional Pembelajaran <br>
                    (Bahan dan Peralatan Habis Pakai) <br>
                    d. Biaya Operasional Tidak Langsung <br>
                    (Listrik, Gas, Air, Pemeliharaan <br>
                    Gedung, Pemeliharaan Sarana, <br>
                    Uang Lembur, Telekomunikasi, <br>
                    Konsumsi, Transport Lokal, Pajak, <br>
                    Asuransi, dll.) 
                --}}
                <tr>
                    {{-- <td>jenis penggunaan</td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td> --}}
                </tr>

                {{-- @endif
                @endforeach --}}

                {{-- @foreach ($kerjasama as $indikator)
                @if ($indikator->tridharma == 'Pendidikan') --}} 
                {{-- nama dari indikator pertama  --}}
                {{-- ISI SEEDER 2
                    Biaya operasional kemahasiswaan <br>
                    (penalaran, minat, bakat, dan <br>
                    kesejahteraan) <br>
                --}}
                <tr>
                    <td> 2 </td>
                    {{-- <td>jenis penggunaan</td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td> --}}
                </tr>
                {{-- @endif
                @endforeach --}}

                <tr>
                    <td colspan="2" class="text-left"><b>Jumlah :</b> </td>
                    <td> jml ts-2</td>
                    <td> jml ts-1</td>
                    <td> jml ts</td>
                    <td> rata-rata</td>
                    <td> jml ts-2</td>
                    <td> jml ts-1</td>
                    <td> jml ts</td>
                    <td> rata-rata</td>
                    <td></td>
                </tr>

                {{-- @foreach ($kerjasama as $indikator)
                @if ($indikator->tridharma == 'Pendidikan') --}} 
                {{-- nama dari indikator pertama  --}}
                {{-- ISI SEEDER 3
                    Biaya Penelitian
                --}}
                <tr>
                    <td> 3 </td>
                    {{-- <td>jenis penggunaan</td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td> --}}
                </tr>
                {{-- @endif
                @endforeach --}}
                
                {{-- @foreach ($kerjasama as $indikator)
                @if ($indikator->tridharma == 'Pendidikan') --}} 
                {{-- nama dari indikator pertama  --}}
                {{-- ISI SEEDER 4
                    Biaya PkM
                --}}
                <tr>
                    <td> 4 </td>
                    {{-- <td>jenis penggunaan</td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td> --}}
                </tr>
                {{-- @endif
                @endforeach --}}

                <tr>
                    <td colspan="2" class="text-left"><b>Jumlah :</b> </td>
                    <td> jml ts-2</td>
                    <td> jml ts-1</td>
                    <td> jml ts</td>
                    <td> rata-rata</td>
                    <td> jml ts-2</td>
                    <td> jml ts-1</td>
                    <td> jml ts</td>
                    <td> rata-rata</td>
                    <td></td>
                </tr>

                {{-- @foreach ($kerjasama as $indikator)
                @if ($indikator->tridharma == 'Pendidikan') --}} 
                {{-- nama dari indikator pertama  --}}
                {{-- ISI SEEDER 5
                    Biaya Investasi SDM
                --}}
                <tr>
                    <td> 5 </td>
                    {{-- <td>jenis penggunaan</td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td> --}}
                </tr>
                {{-- @endif
                @endforeach --}}
                {{-- @foreach ($kerjasama as $indikator)
                @if ($indikator->tridharma == 'Pendidikan') --}} 
                {{-- nama dari indikator pertama  --}}
                {{-- ISI SEEDER 6
                    Biaya Investasi Sarana
                --}}
                <tr>
                    <td> 6 </td>
                    {{-- <td>jenis penggunaan</td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td> --}}
                </tr>
                {{-- @endif
                @endforeach --}}
                {{-- @foreach ($kerjasama as $indikator)
                @if ($indikator->tridharma == 'Pendidikan') --}} 
                {{-- nama dari indikator pertama  --}}
                {{-- ISI SEEDER 7
                    Biaya Investasi Prasarana
                --}}
                <tr>
                    <td> 7 </td>
                    {{-- <td>jenis penggunaan</td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td> TS-2 </td> --}}
                    {{-- <td> TS-1 </td> --}}
                    {{-- <td> TS </td> --}}
                    {{-- <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td> --}}
                </tr>
                {{-- @endif
                @endforeach --}}

                <tr>
                    <td colspan="2" class="text-left"><b>Jumlah :</b> </td>
                    <td> jml ts-2</td>
                    <td> jml ts-1</td>
                    <td> jml ts</td>
                    <td> rata-rata</td>
                    <td> jml ts-2</td>
                    <td> jml ts-1</td>
                    <td> jml ts</td>
                    <td> rata-rata</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-left"><b>TOTAL :</b> </td>
                    <td> jml ts-2</td>
                    <td> jml ts-1</td>
                    <td> jml ts</td>
                    <td> rata-rata</td>
                    <td> jml ts-2</td>
                    <td> jml ts-1</td>
                    <td> jml ts</td>
                    <td> rata-rata</td>
                    <td></td>
                </tr>
            </tbody>
        </table> 
    
    </div>
</form>