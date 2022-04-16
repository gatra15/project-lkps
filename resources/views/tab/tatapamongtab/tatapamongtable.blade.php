@extends('layouts.table')
<form action="{{ url('/tata-pamong-tata-kelola-kerjasama') }}" method="GET">
    <div id="print-table" class="container-fluid">
        <table class="table text-center table-bordered table-condensed table-responsive">
            <thead>
                <tr>
                    <th scope="col" class="align-middle" rowspan="2">Tema</th>
                    <th class="align-middle" scope="col" rowspan="2">Lembaga Mitra</th>
                    <th scope="col" colspan="3">Tingkat</th>
                    <th class="align-middle" scope="col" rowspan="2" >Judul Kegiatan Kerjasama</th>
                    <th class="align-middle" scope="col" rowspan="2">Manfaat Bagi PS yang Diakreditasi</th>
                    <th class="align-middle" scope="col" rowspan="2" >Waktu dan Durasi</th>  
                    <th class="align-middle" scope="col" rowspan="2" >Bukti Kerjasama</th>  
                    @hasanyrole('perwakilan|dekan')
                        <th class="align-middle" scope="col" rowspan="2" >Opsi</th>   
                    @endhasanyrole
                </tr>
                <tr>
                    <th class="align-middle text-center" scope="col">Internasional</th>
                    <th class="align-middle text-center" scope="col">Nasional</th>       
                    <th class="align-middle text-center" scope="col">Lokal/Wilayah</th>          
                </tr>
                <tr>
                    <th class="text-center align-middle putih" colspan="2">Pendidikan</th>
                    <th class="text-left align-middle" colspan="8"></th>
                </tr>
        
            </thead>
    {{-- Perwakilan Dekan --}}
            @hasanyrole('perwakilan|dekan')
            
            <tbody class="text-dark align-middle">
                @foreach ($kerjasama as $indikator)
                @if ($indikator->tridharma == 'Pendidikan')
                <tr>
                    <td class="align-middle">Pendidikan</td>
                    <td class="align-middle">{{ $indikator->lembaga_mitra }}</td>
                    <td class="align-middle">{{ $indikator->tingkat == 'Internasional' ? 'V' : '' }}</td>
                    <td class="align-middle">{{ $indikator->tingkat == 'Nasional' ? 'V' : '' }}</td>
                    <td class="align-middle">{{ $indikator->tingkat == 'Lokal' ? 'V' : '' }}</td>

                    <td class="align-middle">{{ $indikator->judul_kegiatan }}</td>
                    <td class="align-middle">{{ $indikator->manfaat }}</td>
                    <td class="align-middle">{{ $indikator->waktu_durasi }}</td>
                    <td class="align-middle">
                        @if ($indikator->bukti_kerjasama == 'Tidak ada file yang ditambahkan' )
                        <a class="btn btn-warning" href="{{ asset('storage/'.$indikator->bukti_kerjasama) }}"> 
                            Belum ada File <i class="fas fa-exclamation-triangle"></i>
                        </a>     
                        @else
                        <a class="btn btn-success" href="{{ asset('storage/'.$indikator->bukti_kerjasama) }}"> 
                            File <i class="fas fa-file-archive"></i>
                        </a>
                        @endif
                    </td>
                    @hasanyrole('perwakilan|dekan')
                    <td class="align-middle">
                    <ul class="action-list d-flex justify-content-center mr-1" id="action">
                        @hasrole('perwakilan')
                        
                            <li>
                                <a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit-{{ $indikator->id }}"><i class="fas fa-edit"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete-{{ $indikator->id }}"><i class="fas fa-trash btn-del"></i></a>
                            </li>
                        
                        @endhasrole

                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalapp-{{ $indikator->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolak-{{ $indikator->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                    </ul>
                    </td>
                    @endhasanyrole
                </tr>
                @endif
                @endforeach
                <tr>
                    <td colspan="10" class="text-left"><b>Jumlah Pendidikan : {{ $jmlpendidikan }}</b> </td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th class="text-center align-middle putih" colspan="2">Penelitian</th>
                    <th class="text-left align-middle" colspan="8"></th>
                </tr>
            </thead>
            <tbody class="text-dark">
                <tr>
                    @foreach ($kerjasama as $indikator)
                    @if ($indikator->tridharma == 'Penelitian')
                    <tr>
                        <td class="align-middle">Penelitian</td>
                        <td class="align-middle">{{ $indikator->lembaga_mitra }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Internasional' ? 'V' : '' }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Nasional' ? 'V' : '' }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Lokal' ? 'V' : '' }}</td>
    
                        <td class="align-middle">{{ $indikator->judul_kegiatan }}</td>
                        <td class="align-middle">{{ $indikator->manfaat }}</td>
                        <td class="align-middle">{{ $indikator->waktu_durasi }}</td>
                        <td class="align-middle">
                            <a class="btn btn-success" href="{{ asset('storage/'.$indikator->bukti_kerjasama) }}"> File <i class="fas fa-file-archive"></i></a>
                        </td>
                        @hasanyrole('perwakilan|dekan')
                    <td class="align-middle">
                    <ul class="action-list d-flex justify-content-center mr-1" id="action">
                        @hasrole('perwakilan')
                        
                            <li>
                                <a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit-{{ $indikator->id }}"><i class="fas fa-edit"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete-{{ $indikator->id }}"><i class="fas fa-trash btn-del"></i></a>
                            </li>
                        
                        @endhasrole

                        @hasrole('dekan')
                            <li>
                                <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalapp-{{ $indikator->id }}"><i class="fas fa-check-circle"></i></a>
                            </li>
                            <li>
                                <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolak-{{ $indikator->id }}"><i class="fas fa-times-circle"></i></a>
                            </li>
                        @endhasrole
                    </ul>
                    </td>
                    @endhasanyrole
                    </tr>
                    @endif
                    @endforeach
                <tr>
                    <td colspan="10" class="text-left"><b>Jumlah Penelitian : {{ $jmlpenelitian }}</b></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="text-center align-middle putih" colspan="4">Pengabdian Kepala Masyarakat</th>
                    <th class="text-left align-middle" colspan="6"></th>
                </tr>
            </thead>
            <tbody class="text-dark align-middle">
                <tr>
                    @foreach ($kerjasama as $indikator)
                    @if ($indikator->tridharma == 'Pengabdian Kepada Masyarakat')
                    <tr class="align-middle">
                        <td class="align-middle">Pengabdian Kepada Masyarakat</td>
                        <td class="align-middle">{{ $indikator->lembaga_mitra }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Internasional' ? 'V' : '' }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Nasional' ? 'V' : '' }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Lokal' ? 'V' : '' }}</td>
            
                        <td class="align-middle">{{ $indikator->judul_kegiatan }}</td>
                        <td class="align-middle">{{ $indikator->manfaat }}</td>
                        <td class="align-middle">{{ $indikator->waktu_durasi }}</td>
                        <td class="align-middle">
                            <a class="btn btn-success" href="{{ asset('storage/'.$indikator->bukti_kerjasama) }}"> File <i class="fas fa-file-archive"></i></a>
                        </td>
                    
                        @hasanyrole('perwakilan|dekan')
                        <td class="align-middle">
                        <ul class="action-list d-flex justify-content-center mr-1" id="action">
                            @hasrole('perwakilan')
                            
                                <li>
                                    <a type="button" href="" class="btn btn-primary" data-toggle="modal" data-target="#modalpendidikanedit-{{ $indikator->id }}"><i class="fas fa-edit"></i></a>
                                </li>
                                <li>
                                    <a type="button" class="btn btn-danger" href="/tata-pamong-tata-kelola-kerjasama/{{ $indikator->id }}" data-toggle="modal" data-target="#modalpendidikandelete-{{ $indikator->id }}"><i class="fas fa-trash btn-del"></i></a>
                                </li>
                            
                            @endhasrole
    
                            @hasrole('dekan')
                                <li>
                                    <a type="button" href="" class="btn btn-success" data-toggle="modal" data-target="#modalapp-{{ $indikator->id }}"><i class="fas fa-check-circle"></i></a>
                                </li>
                                <li>
                                    <a type="button" class="btn btn-danger" href="" data-toggle="modal" data-target="#modaltolak-{{ $indikator->id }}"><i class="fas fa-times-circle"></i></a>
                                </li>
                            @endhasrole
                        </ul>
                        </td>
                        @endhasanyrole
                    </tr>
                    @endif
                    @endforeach
                </tr>
                <tr>
                    <td colspan="10" class="text-left"><b>Jumlah Pengabdian Kepada Masyarakat : {{ $jmlpkm }}</b></td>
                </tr>
            </tbody>
        @endhasanyrole
    {{-- End Perwakilan Dekan --}}
    
    {{-- Perwakilan Dekan --}}
            @hasrole('asesor')
                    
            <tbody class="text-dark align-middle">
                @foreach ($kerjasama_asesor as $indikator)
                @if ($indikator->tridharma == 'Pendidikan')
                <tr>
                    <td class="align-middle">Pendidikan</td>
                    <td class="align-middle">{{ $indikator->lembaga_mitra }}</td>
                    <td class="align-middle">{{ $indikator->tingkat == 'Internasional' ? 'V' : '' }}</td>
                    <td class="align-middle">{{ $indikator->tingkat == 'Nasional' ? 'V' : '' }}</td>
                    <td class="align-middle">{{ $indikator->tingkat == 'Lokal' ? 'V' : '' }}</td>

                    <td class="align-middle">{{ $indikator->judul_kegiatan }}</td>
                    <td class="align-middle">{{ $indikator->manfaat }}</td>
                    <td class="align-middle">{{ $indikator->waktu_durasi }}</td>
                    <td class="align-middle">
                        @if ($indikator->bukti_kerjasama == 'Tidak ada file yang ditambahkan' )
                        <a class="btn btn-warning" href="{{ asset('storage/'.$indikator->bukti_kerjasama) }}"> 
                            Belum ada File <i class="fas fa-exclamation-triangle"></i>
                        </a>     
                        @else
                        <a class="btn btn-success" href="{{ asset('storage/'.$indikator->bukti_kerjasama) }}"> 
                            File <i class="fas fa-file-archive"></i>
                        </a>
                        @endif
                    </td>
                </tr>
                @endif
                @endforeach
                <tr>
                    <td colspan="10" class="text-left"><b>Jumlah Pendidikan : {{ $jmlpendidikan_asesor }}</b> </td>
                </tr>
            </tbody>

            <thead>
                <tr>
                    <th class="text-center align-middle putih" colspan="2">Penelitian</th>
                    <th class="text-left align-middle" colspan="8"></th>
                </tr>
            </thead>
            <tbody class="text-dark">
                <tr>
                    @foreach ($kerjasama_asesor as $indikator)
                    @if ($indikator->tridharma == 'Penelitian')
                    <tr>
                        <td class="align-middle">Penelitian</td>
                        <td class="align-middle">{{ $indikator->lembaga_mitra }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Internasional' ? 'V' : '' }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Nasional' ? 'V' : '' }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Lokal' ? 'V' : '' }}</td>

                        <td class="align-middle">{{ $indikator->judul_kegiatan }}</td>
                        <td class="align-middle">{{ $indikator->manfaat }}</td>
                        <td class="align-middle">{{ $indikator->waktu_durasi }}</td>
                        <td class="align-middle">
                            <a class="btn btn-success" href="{{ asset('storage/'.$indikator->bukti_kerjasama) }}"> File <i class="fas fa-file-archive"></i></a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                <tr>
                    <td colspan="10" class="text-left"><b>Jumlah Penelitian : {{ $jmlpenelitian_asesor }}</b></td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th class="text-center align-middle putih" colspan="4">Pengabdian Kepala Masyarakat</th>
                    <th class="text-left align-middle" colspan="6"></th>
                </tr>
            </thead>
            <tbody class="text-dark align-middle">
                <tr>
                    @foreach ($kerjasama_asesor as $indikator)
                    @if ($indikator->tridharma == 'Pengabdian Kepada Masyarakat')
                    <tr class="align-middle">
                        <td class="align-middle">Pengabdian Kepada Masyarakat</td>
                        <td class="align-middle">{{ $indikator->lembaga_mitra }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Internasional' ? 'V' : '' }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Nasional' ? 'V' : '' }}</td>
                        <td class="align-middle">{{ $indikator->tingkat == 'Lokal' ? 'V' : '' }}</td>
            
                        <td class="align-middle">{{ $indikator->judul_kegiatan }}</td>
                        <td class="align-middle">{{ $indikator->manfaat }}</td>
                        <td class="align-middle">{{ $indikator->waktu_durasi }}</td>
                        <td class="align-middle">
                            <a class="btn btn-success" href="{{ asset('storage/'.$indikator->bukti_kerjasama) }}"> File <i class="fas fa-file-archive"></i></a>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                </tr>
                <tr>
                    <td colspan="10" class="text-left"><b>Jumlah Pengabdian Kepada Masyarakat : {{ $jmlpkm_asesor }}</b></td>
                </tr>
            </tbody>
        @endhasrole
        </table> 
    {{-- End Perwakilan Dekan --}}
    </div>
</form>

