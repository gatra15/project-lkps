@extends('layouts.table')
<div id="print-table2">
    <table id='form-print' class="table text-center table-bordered table-condensed">
    <thead>
    <tr>
        <th class="align-middle" scope="col" rowspan="2">Tahun Lulus</th>
        <th class="align-middle" scope="col" rowspan="2">Jumlah Lulusan</th>
        <th scope="col" colspan="3">Indeks Prestasi Kumulatif (IPK)</th>
        @hasrole ('perwakilan')
        <th class="align-middle" scope="col" rowspan="2">Opsi</th>
        @endhasrole
    </tr>
    <tr>
    <th scope="col">Min.</th>
    <th scope="col">Rata-rata</th>
    <th scope="col">Maks.</th>
    </tr>
    
    </thead>
    
    <tbody class="text-dark">
    @foreach ($capaianPembelajaran['capaian'] as $key => $capaian)
        <tr>
            {{ $capaian->jumlah_lulusan }}
            <td>{{ $key == sizeof($capaianPembelajaran['capaian'])-1 ? 'TS' : 'TS-'.(sizeof($capaianPembelajaran['capaian'])-1-$key) }}</td>
            <td>{{ $capaian->jumlah_lulusan }}</td>
            <td>{{ $capaian->ipk_min }}</td>
            <td>{{ $capaian->ipk_avg }}</td>
            <td>{{ $capaian->ipk_max }}</td>
            @hasrole ('perwakilan')
            <td><ul class="action-list d-flex justify-content-center mr-1" id="action">
                <li><a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalcapaianedit-{{ $capaian->id }}"><i class="fas fa-edit"></i></a></li>
                <li>
                    <a type="button" class="btn btn-danger" href="/luaran-capaian-tridharma/{{ $capaian->id }}" data-toggle="modal" data-target="#modalcapaiandelete-{{ $capaian->id }}"><i class="fas fa-trash btn-del"></i></a></li>
            </ul></td>
            @endhasrole
        </tr>
    @endforeach
    </tbody>
    </table> 
    </div>