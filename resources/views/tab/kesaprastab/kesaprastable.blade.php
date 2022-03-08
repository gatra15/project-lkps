@extends('layouts.table')
<div id="printElement container-fluid">
    <table width="90%" id='form-print' class="table text-center table-bordered table-condensed">
        <thead>
            <tr>
                <th class="align-middle" scope="col" rowspan="2">Jenis Penggunaan</th>
                <th scope="col" colspan="4">Unit Pengelola Program Studi (Rp.)</th>
                <th scope="col" colspan="4">Program Studi (Rp.)</th>
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
            {{-- DATA 1 --}}
            <tr>
                <td></td>
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
        </table> 
    </div>