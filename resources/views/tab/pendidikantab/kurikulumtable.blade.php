<style>
    
th {
    position: relative;
    padding: 10px;
}

th span {
  display:inline-table;
  writing-mode: tb-rl;
  white-space:pre;
}


</style>
<div>
    <table class="table table-bordered table-condensed">
    <thead>
    
    <tr>
    <th scope="col" class="align-middle text-center" rowspan="2">No</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Semester</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Kode <br> Mata <br> Kuliah</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Nama <br> Mata <br> Kuliah</th>
    <th scope="col" rowspan="2"><span>Mata Kuliah Kompetensi <sup>1)</sup></span></th>
    <th scope="col" class="align-middle text-center" colspan="3">Bukti Kredit <br> (sks)</th>
    <th scope="col" rowspan="2"><span>Konversi Kredit ke Jam <sup>2)</sup></span></th>
    <th scope="col" class="align-middle text-center" colspan="4">Bukti Kredit <br> (sks)</th>
    <th scope="col" class="align-middle text-center" rowspan="2">Dokumen <br> Rencana <br> Pembela- <br> jaran <sup>3)</sup></th>
    <th scope="col" class="align-middle text-center" rowspan="2">Unit <br> Penye- <br> lenggara</th>
    </tr>
    <tr>
        <th> <span class="text-center">Kuliah/ Responsi/ <br> Tutorial</span>  </th>
        <th> <span class="text-center">Seminar</span> </th>
        <th> <span class="text-center">Praktikum/ Praktik/ <br> Praktik Lapangan</span> </th>
        <th> <span class="text-center">Sikap</span>  </th>
        <th> <span class="text-center">Pengetahuan</span> </th>
        <th> <span class="text-center">Keterampilan <br> Umum</span> </th>
        <th> <span class="text-center">Keterampilan <br> Khusus</span> </th>
    </tr>
    
    </thead>
    
    <tbody>
    {{-- @foreach ($kerjasama as $kerja)
    <tr>
    
    </tr>
    @endforeach --}}
    </tbody>
    </table> 
</div>