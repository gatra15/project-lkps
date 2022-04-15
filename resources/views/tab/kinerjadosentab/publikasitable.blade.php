<div id="print-table6">
    <table id='form-print' class="table table-inverse text-center table-bordered table-condensed">
        <thead>
            <tr>

                <th class="align-middle" scope="col" rowspan="2">No</th>
                <th class="align-middle" scope="col" rowspan="2">Jenis</th>
                <th scope="col" colspan="3">Jumlah Judul</th>
                <th class="align-middle" scope="col" rowspan="2" >Jumlah</th>   
                @hasanyrole('perwakilan|dekan')                 
                <th class="align-middle" scope="col" rowspan="2" >Opsi</th>     
                @endhasanyrole               
            </tr>
            <tr>
                <th scope="col">TS-2</th>
                <th scope="col">TS-1</th>
                <th scope="col">TS</th>
            </tr>

        </thead>
        <tbody>
            @foreach ($publikasi['ts'] as $ts)
                <tr>
                <td>1</td>
                <td>
                    @php echo $ts->media->media @endphp
                </td>
                @endforeach 

                @foreach ($publikasi['ts2'] as $ts2)
                <td>{{ $ts2->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts1'] as $ts1)
                <td>{{ $ts1->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts'] as $ts)
                <td>{{ $ts->jumlah_ts }}</td> 
                <td>{{ $ts->jumlah }}</td> 
                @hasanyrole('perwakilan|dekan')
                    <td class="project-actions text-right ms-1 ps-1">
                    <ul class="action-list d-flex justify-content-center " id="action">
                        @hasrole('perwakilan')
                        <td style="align-middle text-center"><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                            <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                        </ul></td>
                        @endhasrole
                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalapppublikasi-{{ $ts->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakpublikasi-{{ $ts->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                </ul>
                </td>
                @endhasanyrole
                
                </tr>
            @endforeach 
        
            @foreach ($publikasi['ts_media2'] as $ts)
                <tr>
                <td>2</td>
                <td>
                    @php echo $ts->media->media @endphp
                </td>
                @endforeach 

                @foreach ($publikasi['ts2_media2'] as $ts2)
                <td>{{ $ts2->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts1_media2'] as $ts1)
                <td>{{ $ts1->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts_media2'] as $ts)
                <td>{{ $ts->jumlah_ts }}</td> 
                <td>{{ $ts->jumlah }}</td> 
                @hasrole('perwakilan')
                <td style="align-middle text-center"><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
            @endforeach 
        
            @foreach ($publikasi['ts_media3'] as $ts)
                <tr>
                <td>3</td>
                <td>
                    @php echo $ts->media->media @endphp
                </td>
                @endforeach 

                @foreach ($publikasi['ts2_media3'] as $ts2)
                <td>{{ $ts2->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts1_media3'] as $ts1)
                <td>{{ $ts1->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts_media3'] as $ts)
                <td>{{ $ts->jumlah_ts }}</td> 
                <td>{{ $ts->jumlah }}</td> 
                @hasrole('perwakilan')
                <td style="align-middle text-center"><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
            @endforeach 
        
            @foreach ($publikasi['ts_media4'] as $ts)
                <tr>
                <td>4</td>
                <td>
                    @php echo $ts->media->media @endphp
                </td>
                @endforeach 

                @foreach ($publikasi['ts2_media4'] as $ts2)
                <td>{{ $ts2->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts1_media4'] as $ts1)
                <td>{{ $ts1->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts_media4'] as $ts)
                <td>{{ $ts->jumlah_ts }}</td> 
                <td>{{ $ts->jumlah }}</td> 
                @hasrole('perwakilan')
                <td style="align-middle text-center"><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
            @endforeach 
        
            @foreach ($publikasi['ts_media5'] as $ts)
                <tr>
                <td>5</td>
                <td>
                    @php echo $ts->media->media @endphp
                </td>
                @endforeach 

                @foreach ($publikasi['ts2_media5'] as $ts2)
                <td>{{ $ts2->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts1_media5'] as $ts1)
                <td>{{ $ts1->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts_media5'] as $ts)
                <td>{{ $ts->jumlah_ts }}</td> 
                <td>{{ $ts->jumlah }}</td> 
                @hasrole('perwakilan')
                <td style="align-middle text-center"><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
            @endforeach 
        
            @foreach ($publikasi['ts_media6'] as $ts)
                <tr>
                <td>6</td>
                <td>
                    @php echo $ts->media->media @endphp
                </td>
                @endforeach 

                @foreach ($publikasi['ts2_media6'] as $ts2)
                <td>{{ $ts2->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts1_media6'] as $ts1)
                <td>{{ $ts1->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts_media6'] as $ts)
                <td>{{ $ts->jumlah_ts }}</td> 
                <td>{{ $ts->jumlah }}</td> 
                @hasrole('perwakilan')
                <td style="align-middle text-center"><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
            @endforeach 
        
            @foreach ($publikasi['ts_media7'] as $ts)
                <tr>
                <td>7</td>
                <td>
                    @php echo $ts->media->media @endphp
                </td>
                @endforeach 

                @foreach ($publikasi['ts2_media7'] as $ts2)
                <td>{{ $ts2->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts1_media7'] as $ts1)
                <td>{{ $ts1->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts_media7'] as $ts)
                <td>{{ $ts->jumlah_ts }}</td> 
                <td>{{ $ts->jumlah }}</td> 
                @hasrole('perwakilan')
                <td style="align-middle text-center"><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
            @endforeach 
        
            @foreach ($publikasi['ts_media8'] as $ts)
                <tr>
                <td>8</td>
                <td>
                    @php echo $ts->media->media @endphp
                </td>
                @endforeach 

                @foreach ($publikasi['ts2_media8'] as $ts2)
                <td>{{ $ts2->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts1_media8'] as $ts1)
                <td>{{ $ts1->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts_media8'] as $ts)
                <td>{{ $ts->jumlah_ts }}</td> 
                <td>{{ $ts->jumlah }}</td> 
                @hasrole('perwakilan')
                <td style="align-middle text-center"><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
            @endforeach 
        
            @foreach ($publikasi['ts_media9'] as $ts)
                <tr>
                <td>9</td>
                <td>
                    @php echo $ts->media->media @endphp
                </td>
                @endforeach 

                @foreach ($publikasi['ts2_media9'] as $ts2)
                <td>{{ $ts2->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts1_media9'] as $ts1)
                <td>{{ $ts1->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts_media9'] as $ts)
                <td>{{ $ts->jumlah_ts }}</td> 
                <td>{{ $ts->jumlah }}</td> 
                @hasrole('perwakilan')
                <td style="align-middle text-center"><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
            @endforeach 
        
            @foreach ($publikasi['ts_media10'] as $ts)
                <tr>
                <td>10</td>
                <td>
                    @php echo $ts->media->media @endphp
                </td>
                @endforeach 

                @foreach ($publikasi['ts2_media10'] as $ts2)
                <td>{{ $ts2->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts1_media10'] as $ts1)
                <td>{{ $ts1->jumlah_ts }}</td> 
                @endforeach

                @foreach ($publikasi['ts_media10'] as $ts)
                <td>{{ $ts->jumlah_ts }}</td> 
                <td>{{ $ts->jumlah }}</td> 
                @hasrole('perwakilan')
                <td style="align-middle text-center"><ul class="action-list d-flex justify-content-center mr-1 align-middle" id="action">
                    <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpublikasiedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                    <li>
                        <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpublikasidelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                </ul></td>
                @endhasrole
                </tr>
            @endforeach 
        
        
        <tr>
            <td colspan="2" class="text-center"><b>Total</b></td>
            <td>{{ $publikasi['jumlah_ts2'] }}</td>
            <td>{{ $publikasi['jumlah_ts1'] }}</td>
            <td>{{ $publikasi['jumlah_ts'] }}</td>
            <td>{{ $publikasi['jumlah'] }}</td>
            @hasrole('perwakilan')
            <td></td>
            @endhasrole
        </tr>

    </tbody>
    </table> 
</div>