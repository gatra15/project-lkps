<div id="print-table4">
    <table id='form-print' class="table table-bordered table-condensed">
    <thead>
    <tr>
    <th class="align-middle text-center" scope="col" rowspan="2">Tahun <br> Masuk</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Mahasiswa <br> Diterima <sup>1)</sup></th>
    <th class="align-middle text-center" scope="col" colspan="7">Jumlah Mahasiswa yang Lulus pada</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Jumlah <br> Lulusan <br> s.d. <br> Akhir TS</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Rata- <br> rata <br> Masa <br> Studi</th>
    <th class="align-middle text-center" scope="col" rowspan="2">Opsi</th>
    
    </tr>

    <tr>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-6 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-5 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-4 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-3 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-2 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS-1 </th>
        <th class="align-middle text-center" scope="col" >Akhir <br> TS </th>
    </tr>
    
    </thead>
    
    <tbody class="text-dark">
        @foreach ($efektifitasPrestasi['efektifitas'] as $efektifitas)
            <tr>
                <td>{{ $efektifitas->tahun->name }}</td>
                <td>{{ $efektifitas->jumlah_mahasiswa }}</td>
                <td style="background-color: grey"></td>
                <td style="background-color: grey"></td>
                <td style="background-color: grey"></td>

                @if ($efektifitas->id == 1)
                <td>{{ $efektifitas->ts3 }}</td>
                @else
                <td style="background-color: grey"></td>
                @endif

                @if ($efektifitas->id == 1 || $efektifitas->id == 2 )
                <td>{{ $efektifitas->ts2 }}</td>
                @else
                <td style="background-color: grey"></td>
                @endif

                @if ($efektifitas->id == 4 )
                <td style="background-color: grey"></td>
                @else
                <td>{{ $efektifitas->ts1 }}</td>
                @endif

                <td>{{ $efektifitas->ts }}</td>
                <td>{{ $efektifitas->jumlah }}</td>
                <td>{{ $efektifitas->average }}</td>

                <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalefekedit-{{ $efektifitas->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/efektifitas/{{ $efektifitas->id }}" data-toggle="modal" data-target="#modalefekdelete-{{ $efektifitas->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
            </tr>
        @endforeach
    </table> 
    </div>