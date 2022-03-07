{{-- New TAB --}}
    <div class="collapse" id="des2">
        <div class="card card-body">
            <p>
                Dosen Pembimbing Utama TA
            </p>
        </div> 
    </div>
{{-- CONTENT --}}

    <div id="printElement container-fluid">
        <table id='form-print' class="table text-center table-bordered table-condensed table-responsive">
            <thead>
                <tr>

                    <th class="align-middle" scope="col" rowspan="3">No</th>
                    <th class="align-middle" scope="col" rowspan="3">Nama Dosen</th>
                    <th scope="col" colspan="8" >Jumlah Mahasiswa Yang Dibimbing</th>
                    <th class="align-middle" scope="col" rowspan="3">Rata-rata Jumlah Bimbingan di Semua Program/Semester  </th>  
                </tr>
                <tr>
                    <th scope="col" colspan="4">pada PS yang Diakreditasi</th>
                    <th scope="col" colspan="4">pada PS Lain di PT</th>       
                </tr>
                <tr>
                    <th scope="col" >TS-2</th>
                    <th scope="col" >TS-1</th>
                    <th scope="col" >TS</th>
                    <th scope="col" >Rata - rata</th>    
                    <th scope="col" >TS-2</th>
                    <th scope="col" >TS-1</th>
                    <th scope="col" >TS</th>
                    <th scope="col" >Rata - rata</th>    
                </tr>
        
            </thead>

            <tbody class="text-dark">
                <tr>
                    <td>Eko</td>
                    <td>Eko</td>
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
        </table> 
    </div>

