@include('layouts.table')
<form action="{{ url('/tata-pamong-tata-kelola-kerjasama') }}" method="GET">
    <div id="print-table" media="print">


        @hasanyrole('perwakilan|dekan')
        <table max-width="60%" id='form-print' class="table text-center align-middle table-bordered table-condensed" >
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2" width="1%">No</th>
                <th class="align-middle" scope="col" rowspan="2" width="10%">Jenis Penggunaan</th>
                <th scope="col" colspan="4" style="max-width:30px;">Unit Pengelola Program Studi (Rp.)</th>
                <th scope="col" colspan="4" style="max-width:30px;">Program Studi (Rp.)</th>
                <th class="align-middle" scope="col" rowspan="2" width="5%">Opsi</th>

            </tr>
            <tr>
                <th class="align-middle" scope="col" style="max-width:5px;">TS-2</th>
                <th class="align-middle" scope="col" style="max-width:5px;">TS-1</th>
                <th class="align-middle" scope="col" style="max-width:5px;">TS</th>
                <th class="align-middle" scope="col" style="max-width:5px;">Rata- <br> rata</th>
                <th class="align-middle" scope="col" style="max-width:5px;">TS-2</th>
                <th class="align-middle" scope="col" style="max-width:5px;">TS-1</th>
                <th class="align-middle" scope="col" style="max-width:5px;">TS</th>
                <th class="align-middle" scope="col" style="max-width:5px;">Rata- <br> rata</th>
            </tr>
            
    
        </thead>

        <tbody class="text-dark">
            <tr>
                <td class="text-center putih"> 1 </td>
                <td class="text-left putih" colspan="5"> <b>Biaya Operasional Pendidikan</b>  </td>
                <td colspan="5" style="background-color: #e7e7e7"> </td>

            </tr>
            @foreach ($ts as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->biaya->text }}</td>
                @endforeach
                @foreach ($ts2 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsaran-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksaran-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                    
                </tr>
                
            @endforeach

            @foreach ($ts_sarana12 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->biaya->text }}</td>
                @endforeach
                @foreach ($ts2_sarana12 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana12 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana12 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana12 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana12 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana12 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsaran-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksaran-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                </tr>
                
            @endforeach

            @foreach ($ts_sarana13 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->biaya->text }}</td>
                @endforeach
                @foreach ($ts2_sarana13 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana13 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana13 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana13 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana13 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana13 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsaran-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksaran-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                </tr>
                
            @endforeach

            @foreach ($ts_sarana14 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->biaya->text }}</td>
                @endforeach
                @foreach ($ts2_sarana14 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana14 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana14 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana14 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana14 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana14 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsaran-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksaran-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                </tr>
                
            @endforeach

            @foreach ($ts_sarana2 as $data)
                <tr>
                    
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana2 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana2 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana2 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana2 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana2 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana2 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsaran-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksaran-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                </tr>
                
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

            @foreach ($ts_sarana3 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana3 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana3 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana3 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana3 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana3 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana3 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsaran-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksaran-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                </tr>
                
            @endforeach
            
            @foreach ($ts_sarana4 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana4 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana4 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana4 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana4 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana4 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana4 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsaran-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksaran-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                </tr>
                
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

            @foreach ($ts_sarana5 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana5 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana5 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana5 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana5 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana5 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana5 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsaran-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksaran-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                </tr>
                
            @endforeach

            @foreach ($ts_sarana6 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana6 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana6 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana6 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana6 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana6 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana6 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsaran-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksaran-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                </tr>
                
            @endforeach

            @foreach ($ts_sarana7 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana7 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana7 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana7 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana7 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana7 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana7 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalsaranaedit-{{ $data->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/keuangan-sarana-prasarana/{{ $data->id }}" data-toggle="modal" data-target="#modalsaranadelete-{{ $data->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalappsaran-{{ $data->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolaksaran-{{ $data->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                </tr>
                
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
        @endhasanyrole
        
        @hasrole('asesor')
        <table width="80%" id='form-print' class="table text-center align-middle table-bordered table-condensed" >
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2" width="1%">No</th>
                <th class="align-middle" scope="col" rowspan="2" width="10%">Jenis Penggunaan</th>
                <th scope="col" colspan="4" style="max-width:30px;">Unit Pengelola Program Studi (Rp.)</th>
                <th scope="col" colspan="4" style="max-width:30px;">Program Studi (Rp.)</th>

            </tr>
            <tr>
                <th class="align-middle" scope="col" style="max-width:5px;">TS-2</th>
                <th class="align-middle" scope="col" style="max-width:5px;">TS-1</th>
                <th class="align-middle" scope="col" style="max-width:5px;">TS</th>
                <th class="align-middle" scope="col" style="max-width:5px;">Rata- <br> rata</th>
                <th class="align-middle" scope="col" style="max-width:5px;">TS-2</th>
                <th class="align-middle" scope="col" style="max-width:5px;">TS-1</th>
                <th class="align-middle" scope="col" style="max-width:5px;">TS</th>
                <th class="align-middle" scope="col" style="max-width:5px;">Rata- <br> rata</th>
            </tr>
            
    
        </thead>

        <tbody class="text-dark">
            <tr>
                <td class="text-center putih"> 1 </td>
                <td class="text-left putih" colspan="5"> <b>Biaya Operasional Pendidikan</b>  </td>
                <td colspan="4" style="background-color: #e7e7e7"> </td>

            </tr>
            @foreach ($ts as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->biaya->text }}</td>
                @endforeach
                @foreach ($ts2 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>

                    
                </tr>
                
            @endforeach

            @foreach ($ts_sarana12 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->biaya->text }}</td>
                @endforeach
                @foreach ($ts2_sarana12 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana12 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana12 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana12 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana12 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana12 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                

                </tr>
                
            @endforeach

            @foreach ($ts_sarana13 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->biaya->text }}</td>
                @endforeach
                @foreach ($ts2_sarana13 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana13 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana13 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana13 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana13 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana13 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                

                </tr>
                
            @endforeach

            @foreach ($ts_sarana14 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->biaya->text }}</td>
                @endforeach
                @foreach ($ts2_sarana14 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana14 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana14 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana14 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana14 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana14 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                

                </tr>
                
            @endforeach

            @foreach ($ts_sarana2 as $data)
                <tr>
                    
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana2 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana2 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana2 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana2 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana2 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana2 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    
                </tr>
                
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

            </tr>

            @foreach ($ts_sarana3 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana3 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($t1_sarana3 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana3 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana3 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana3 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana3 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                </tr>
                
            @endforeach
            
            @foreach ($ts_sarana4 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana4 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana4 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana4 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana4 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana4 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana4 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                

                </tr>
                
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

            </tr>

            @foreach ($ts_sarana5 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana5 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana5 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana5 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana5 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana5 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana5 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    
                </tr>
                
            @endforeach

            @foreach ($ts_sarana6 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana6 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana6 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana6 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana6 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana6 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana6 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>
                
                    
                </tr>
                
            @endforeach

            @foreach ($ts_sarana7 as $data)
                <tr>
                    <td></td>
                    <td style="text-align: left">{{ $data->sarana->text }}</td>
                @endforeach
                @foreach ($ts2_sarana7 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana7 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                @endforeach
                @foreach ($ts_sarana7 as $data)
                    <td>Rp.{{ $data->unit_pengelola_ts }}</td>
                    <td>Rp.{{ $data->unit_pengelola_average }}</td>
                @endforeach
                @foreach ($ts2_sarana7 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts1_sarana7 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                @endforeach
                @foreach ($ts_sarana7 as $data)
                    <td>Rp.{{ $data->ps_ts }}</td>
                    <td>Rp.{{ $data->ps_average }}</td>

                </tr>
                
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

            </tr>

        </tbody>
    @endhasrole

            
        </table>   
    </div>
</form>
