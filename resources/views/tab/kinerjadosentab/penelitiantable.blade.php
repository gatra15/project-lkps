<div id="print-table3">
    <table id='form-print' class="table text-center table-bordered table-condensed">

    <thead>
        <tr>

            <th class="align-middle" scope="col" rowspan="2">No</th>
            <th class="align-middle" scope="col" rowspan="2">Sumber Pembiayaan</th>
            <th scope="col" colspan="3">Jumlah Judul</th>
            <th class="align-middle" scope="col" rowspan="2" >Jumlah</th>  
            @hasanyrole('dekan|perwakilan')     
            <th class="align-middle" scope="col" rowspan="2" >Opsi</th>    
            @endhasanyrole   
        </tr>
        <tr>
            <th scope="col">TS-2</th>
            <th scope="col">TS-1</th>
            <th scope="col">TS</th>
        </tr>

    </thead>

@hasanyrole('perwakilan|dekan')
    <tbody class="text-dark">
         {{-- Sumberdaya 1 --}}
         @foreach ($penelitians['ts'] as $ts)
         <tr>
        <td>1</td>   
         
        @foreach ($penelitians['ts'] as $index => $ts)
        @if($index == 0)
        <td>
        @php echo $ts->sumber->sumberdaya @endphp
        </td>
        @endif
        @endforeach

        

         @foreach ($penelitians['ts2'] as $index => $ts2)
         @if($index == 0)
         <td>{{ $ts2->jumlah_ts }}</td> 
         @endif
         @endforeach

         @foreach ($penelitians['ts1'] as $index => $ts1)
         @if($index == 0)
         <td>{{ $ts1->jumlah_ts }}</td> 
         @endif
         @endforeach

         @foreach ($penelitians['ts'] as $ts)
         <td>{{ $ts->jumlah_ts }}</td> 
         <td>{{ $ts->jumlah }}</td> 
             <td class="project-actions text-right ms-1 ps-1">
             <ul class="action-list d-flex justify-content-center " id="action">
                 @hasrole('perwakilan')

                     <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenpenelitianedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                     <li>
                         <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpenelitiandelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>

                 @endhasrole
                 @hasrole('dekan')
                     <li>
                         <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalapppenelitian-{{ $ts->id }}"><i class="fas fa-check-circle"></i></a>
                     </li>
                     <li>
                         <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakpenelitian-{{ $ts->id }}"><i class="fas fa-times-circle"></i></a>
                     </li>
                 @endhasrole
         </ul>
         </td>
         
         
         @endforeach 
         @endforeach
            </tr>

     {{-- Sumberdaya 2 --}}
     @foreach ($penelitians['ts_sumber2'] as $ts)
         <tr>
         <td>2</td>
         <td>
             @php echo $ts->sumber->sumberdaya @endphp
         </td>
         @endforeach 

         @foreach ($penelitians['ts2_sumber2'] as $ts2)
         <td>{{ $ts2->jumlah_ts }}</td> 
         @endforeach

         @foreach ($penelitians['ts1_sumber2'] as $ts1)
         <td>{{ $ts1->jumlah_ts }}</td> 
         @endforeach

         @foreach ($penelitians['ts_sumber2'] as $ts)
         <td>{{ $ts->jumlah_ts }}</td> 
         <td>{{ $ts->jumlah }}</td> 
             <td class="project-actions text-right ms-1 ps-1">
             <ul class="action-list d-flex justify-content-center " id="action">
                 @hasrole('perwakilan')
                     <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenpenelitianedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                     <li>
                         <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpenelitiandelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                 @endhasrole
                 @hasrole('dekan')
                     <li>
                         <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalapppenelitian-{{ $ts->id }}"><i class="fas fa-check-circle"></i></a>
                     </li>
                     <li>
                         <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakpenelitian-{{ $ts->id }}"><i class="fas fa-times-circle"></i></a>
                     </li>
                 @endhasrole
         </ul>
         </td>
         </tr>
     @endforeach 

     {{-- Sumberdaya 3 --}}
     @foreach ($penelitians['ts_sumber3'] as $ts)
         <tr>
         <td>3</td>
         <td>
             @php echo $ts->sumber->sumberdaya @endphp
         </td>
         @endforeach 

         @foreach ($penelitians['ts2_sumber3'] as $ts2)
         <td>{{ $ts2->jumlah_ts }}</td> 
         @endforeach

         @foreach ($penelitians['ts1_sumber3'] as $ts1)
         <td>{{ $ts1->jumlah_ts }}</td> 
         @endforeach

         @foreach ($penelitians['ts_sumber3'] as $ts)
         <td>{{ $ts->jumlah_ts }}</td> 
         <td>{{ $ts->jumlah }}</td> 

             <td class="project-actions text-right ms-1 ps-1">
             <ul class="action-list d-flex justify-content-center " id="action">
                 @hasrole('perwakilan')
                     <li><a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modaldosenpenelitianedit-{{ $ts->id }}"><i class="fas fa-edit"></i></a></li>
                     <li>
                         <a type="button" class="btn btn-danger" href="/kinerja-dosen/penelitian-dtps/{{ $ts->id }}" data-toggle="modal" data-target="#modalpenelitiandelete-{{ $ts->id }}"><i class="fas fa-trash btn-del"></i></a></li>
                 @endhasrole
                 @hasrole('dekan')
                     <li>
                         <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalapppenelitian-{{ $ts->id }}"><i class="fas fa-check-circle"></i></a>
                     </li>
                     <li>
                         <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolakpenelitian-{{ $ts->id }}"><i class="fas fa-times-circle"></i></a>
                     </li>
                 @endhasrole
         </ul>
         </td>
         </tr>
        @endforeach

        <tr>
            <td colspan="2" class="text-center"><b>Jumlah</b></td>
            <td>{{ $penelitians['jumlah_ts2'] }}</td>
            <td>{{ $penelitians['jumlah_ts1'] }}</td>
            <td>{{ $penelitians['jumlah_ts'] }}</td>
            <td>{{ $penelitians['jumlah'] }}</td>
            <td></td>
        </tr>
        </tbody>
@endhasanyrole

    @hasrole('asesor')
        
        <tbody class="text-dark">
    
             {{-- Sumberdaya 1 --}}
              
                   
             @foreach ($penelitians['ts_asesor'] as $ts)
             <tr>
             <td>1</td>
             <td>
                 @php echo $ts->sumber->sumberdaya @endphp
             </td>
             @endforeach 
    
             @foreach ($penelitians['ts2_asesor'] as $ts2)
             <td>{{ $ts2->jumlah_ts }}</td> 
             @endforeach
    
             @foreach ($penelitians['ts1_asesor'] as $ts1)
             <td>{{ $ts1->jumlah_ts }}</td> 
             @endforeach
    
             @foreach ($penelitians['ts_asesor'] as $ts)
             <td>{{ $ts->jumlah_ts }}</td> 
             <td>{{ $ts->jumlah }}</td> 
             
             </tr>
             @endforeach 
    
         {{-- Sumberdaya 2 --}}
         @foreach ($penelitians['ts_sumber2_asesor'] as $ts)
             <tr>
             <td>2</td>
             <td>
                 @php echo $ts->sumber->sumberdaya @endphp
             </td>
             @endforeach 
    
             @foreach ($penelitians['ts2_sumber2_asesor'] as $ts2)
             <td>{{ $ts2->jumlah_ts }}</td> 
             @endforeach
    
             @foreach ($penelitians['ts1_sumber2_asesor'] as $ts1)
             <td>{{ $ts1->jumlah_ts }}</td> 
             @endforeach
    
             @foreach ($penelitians['ts_sumber2_asesor'] as $ts)
             <td>{{ $ts->jumlah_ts }}</td> 
             <td>{{ $ts->jumlah }}</td> 
             </tr>
         @endforeach 
    
         {{-- Sumberdaya 3 --}}
         @foreach ($penelitians['ts_sumber3_asesor'] as $ts)
             <tr>
             <td>3</td>
             <td>
                 @php echo $ts->sumber->sumberdaya @endphp
             </td>
             @endforeach 
    
             @foreach ($penelitians['ts2_sumber3_asesor'] as $ts2)
             <td>{{ $ts2->jumlah_ts }}</td> 
             @endforeach
    
             @foreach ($penelitians['ts1_sumber3_asesor'] as $ts1)
             <td>{{ $ts1->jumlah_ts }}</td> 
             @endforeach
    
             @foreach ($penelitians['ts_sumber3_asesor'] as $ts)
             <td>{{ $ts->jumlah_ts }}</td> 
             <td>{{ $ts->jumlah }}</td> 
             </tr>
            @endforeach
    
            <tr>
                <td colspan="2" class="text-center"><b>Jumlah</b></td>
                <td>{{ $penelitians['jumlah_ts2_asesor'] }}</td>
                <td>{{ $penelitians['jumlah_ts1_asesor'] }}</td>
                <td>{{ $penelitians['jumlah_ts_asesor'] }}</td>
                <td>{{ $penelitians['jumlah_asesor'] }}</td>
            </tr>
        </tbody>
    @endhasrole
    </table> 
</div>