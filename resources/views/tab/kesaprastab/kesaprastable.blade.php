@include('layouts.table')
<form action="{{ url('/tata-pamong-tata-kelola-kerjasama') }}" method="GET">
    <div id="print-table" class="container-fluid">
        <table width="90%" id='form-print' class="table text-center table-bordered table-condensed table-responsive">
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
                
        
            </thead>

            <tbody class="text-dark">
                <tr>
                    <td class="text-center putih"> 1 </td>
                    <td class="text-left putih" colspan="1"> <b>Biaya Operasional Pendidikan</b>  </td>
                    <td colspan="9" style="background-color: #e7e7e7"> </td>
                </tr>
                @foreach ($keuangan as $data)
                {{-- @foreach ($kerjasama as $indikator)--}}
                 @if ($data->sarana_id == 1 && $data->biaya_id == 1)
                    
                    <tr>
                        <td></td>
                        <td style="text-align: left">{{ $data->biaya->text }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts2 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts1 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                        <td>Rp.{{ $data->unit_pengelola_average }}</td>
                        <td>Rp.{{ $data->ps_ts2 }}</td>
                        <td>Rp.{{ $data->ps_ts1 }}</td>
                        <td>Rp.{{ $data->ps_ts }}</td>
                        <td>Rp.{{ $data->ps_average }}</td>
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                    </tr>
                    
              
                    @endif
                @endforeach
                @foreach ($keuangan as $data)
                {{-- @foreach ($kerjasama as $indikator)--}}
                 @if ($data->sarana_id == 1 && $data->biaya_id == 2)
                    
                    <tr>
                        <td></td>
                        <td style="text-align: left">{{ $data->biaya->text }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts2 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts1 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                        <td>Rp.{{ $data->unit_pengelola_average }}</td>
                        <td>Rp.{{ $data->ps_ts2 }}</td>
                        <td>Rp.{{ $data->ps_ts1 }}</td>
                        <td>Rp.{{ $data->ps_ts }}</td>
                        <td>Rp.{{ $data->ps_average }}</td>
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                    </tr>
                    
              
                    @endif
                @endforeach
                @foreach ($keuangan as $data)
                {{-- @foreach ($kerjasama as $indikator)--}}
                 @if ($data->sarana_id == 1 && $data->biaya_id == 3)
                    
                    <tr>
                        <td></td>
                        <td style="text-align: left">{{ $data->biaya->text }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts2 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts1 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                        <td>Rp.{{ $data->unit_pengelola_average }}</td>
                        <td>Rp.{{ $data->ps_ts2 }}</td>
                        <td>Rp.{{ $data->ps_ts1 }}</td>
                        <td>Rp.{{ $data->ps_ts }}</td>
                        <td>Rp.{{ $data->ps_average }}</td>
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                    </tr>
                    
              
                    @endif
                @endforeach
                @foreach ($keuangan as $data)
                {{-- @foreach ($kerjasama as $indikator)--}}
                 @if ($data->sarana_id == 1 && $data->biaya_id == 4)
                    
                    <tr>
                        <td></td>
                        <td style="text-align: left">{{ $data->biaya->text }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts2 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts1 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                        <td>Rp.{{ $data->unit_pengelola_average }}</td>
                        <td>Rp.{{ $data->ps_ts2 }}</td>
                        <td>Rp.{{ $data->ps_ts1 }}</td>
                        <td>Rp.{{ $data->ps_ts }}</td>
                        <td>Rp.{{ $data->ps_average }}</td>
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                    </tr>
                    
              
                    @endif
                @endforeach

                @foreach ($keuangan as $data)
                @if ($data->sarana_id == 2)
                    <td>2</td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                    <td>Rp.{{ $data->unit_pengelola_ts2 }}</td>
                    <td>Rp.{{ $data->unit_pengelola_ts1 }}</td>
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                    <td>Rp.{{ $data->ps_ts2 }}</td>
                    <td>Rp.{{ $data->ps_ts1 }}</td>
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                @endif
                @endforeach

                <tr>
                    <td colspan="2" class="text-left"><b>Jumlah :</b> </td>
                    <td>Rp. {{ $jumlah1['ts2'] }}</td>
                    <td>Rp. {{ $jumlah1['ts1'] }}</td>
                    <td>Rp. {{ $jumlah1['ts'] }}</td>
                    <td>Rp. {{ $jumlah1['average'] }}</td>
                    <td>Rp. {{ $jumlah1['ps_ts2'] }}</td>
                    <td>Rp. {{ $jumlah1['ps_ts1'] }}</td>
                    <td>Rp. {{ $jumlah1['ps_ts'] }}</td>
                    <td>Rp. {{ $jumlah1['ps_average'] }}</td>
                    <td></td>
                </tr>

                @foreach ($keuangan as $data)
                @if ($data->sarana_id == 3) 
                
                <tr>
                    <td> 3 </td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                    <td>Rp.{{ $data->unit_pengelola_ts2 }}</td>
                    <td>Rp.{{ $data->unit_pengelola_ts1 }}</td>
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                    <td>Rp.{{ $data->ps_ts2 }}</td>
                    <td>Rp.{{ $data->ps_ts1 }}</td>
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                </tr>
                @endif
                @endforeach
                
                @foreach ($keuangan as $data)
                @if ($data->sarana_id == 4) 
                <tr>
                    <td> 4 </td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                    <td>Rp.{{ $data->unit_pengelola_ts2 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts1 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                        <td>Rp.{{ $data->unit_pengelola_average }}</td>
                        <td>Rp.{{ $data->ps_ts2 }}</td>
                        <td>Rp.{{ $data->ps_ts1 }}</td>
                        <td>Rp.{{ $data->ps_ts }}</td>
                        <td>Rp.{{ $data->ps_average }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                </tr>
                @endif
                @endforeach

                <tr>
                    <td colspan="2" class="text-left"><b>Jumlah :</b> </td>
                    <td>Rp. {{ $jumlah2['ts2'] }}</td>
                    <td>Rp. {{ $jumlah2['ts1'] }}</td>
                    <td>Rp. {{ $jumlah2['ts'] }}</td>
                    <td>Rp. {{ $jumlah2['average'] }}</td>
                    <td>Rp. {{ $jumlah2['ps_ts2'] }}</td>
                    <td>Rp. {{ $jumlah2['ps_ts1'] }}</td>
                    <td>Rp. {{ $jumlah2['ps_ts'] }}</td>
                    <td>Rp. {{ $jumlah2['ps_average'] }}</td>
                    <td></td>
                </tr>

                @foreach ($keuangan as $data)
                @if ($data->sarana_id == 5) 
                <tr>
                    <td> 5 </td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                    <td>Rp.{{ $data->unit_pengelola_ts2 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts1 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                        <td>Rp.{{ $data->unit_pengelola_average }}</td>
                        <td>Rp.{{ $data->ps_ts2 }}</td>
                        <td>Rp.{{ $data->ps_ts1 }}</td>
                        <td>Rp.{{ $data->ps_ts }}</td>
                        <td>Rp.{{ $data->ps_average }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                </tr>
                @endif
                @endforeach

                @foreach ($keuangan as $data)
                @if ($data->sarana_id == 6) 
                <tr>
                    <td> 6 </td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                    <td>Rp.{{ $data->unit_pengelola_ts2 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts1 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                        <td>Rp.{{ $data->unit_pengelola_average }}</td>
                        <td>Rp.{{ $data->ps_ts2 }}</td>
                        <td>Rp.{{ $data->ps_ts1 }}</td>
                        <td>Rp.{{ $data->ps_ts }}</td>
                        <td>Rp.{{ $data->ps_average }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                </tr>
                @endif
                @endforeach

                @foreach ($keuangan as $data)
                @if ($data->sarana_id == 7) 
                <tr>
                    <td> 7 </td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                    <td>Rp.{{ $data->unit_pengelola_ts2 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts1 }}</td>
                        <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                        <td>Rp.{{ $data->unit_pengelola_average }}</td>
                        <td>Rp.{{ $data->ps_ts2 }}</td>
                        <td>Rp.{{ $data->ps_ts1 }}</td>
                        <td>Rp.{{ $data->ps_ts }}</td>
                        <td>Rp.{{ $data->ps_average }}</td>
                    <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                        <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                        <li>
                            <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                    </ul></td>
                </tr>
                @endif
                @endforeach
                

                <tr>
                    <td colspan="2" class="text-left"><b>Jumlah :</b> </td>
                    <td>Rp. {{ $jumlah3['ts2'] }}</td>
                    <td>Rp. {{ $jumlah3['ts1'] }}</td>
                    <td>Rp. {{ $jumlah3['ts'] }}</td>
                    <td>Rp. {{ $jumlah3['average'] }}</td>
                    <td>Rp. {{ $jumlah3['ps_ts2'] }}</td>
                    <td>Rp. {{ $jumlah3['ps_ts1'] }}</td>
                    <td>Rp. {{ $jumlah3['ps_ts'] }}</td>
                    <td>Rp. {{ $jumlah3['ps_average'] }}</td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" class="text-left"><b>Total :</b> </td>
                    <td>Rp. {{ $total['ts2'] }}</td>
                    <td>Rp. {{ $total['ts1'] }}</td>
                    <td>Rp. {{ $total['ts'] }}</td>
                    <td>Rp. {{ $total['average'] }}</td>
                    <td>Rp. {{ $total['ps_ts2'] }}</td>
                    <td>Rp. {{ $total['ps_ts1'] }}</td>
                    <td>Rp. {{ $total['ps_ts'] }}</td>
                    <td>Rp. {{ $total['ps_average'] }}</td>
                    <td></td>
                </tr>

            </tbody>
        </table> 
    
    </div>
</form>