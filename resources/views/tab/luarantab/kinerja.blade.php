<div class="tab-pane fade show" id="kinerja" role="tabpanel" aria-labelledby="kinerja-tab">
    <p class="d-flex justify-content-between">
        <a class="btn btn-primary" data-toggle="collapse" href="#des5" role="button" aria-expanded="false" aria-controls="des5">
            Deskripsi
        </a>
    </p>
    <input type="button" class="btn btn-primary" onclick="printDiv('print-table7')" value="Print Document" />
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#caradownload">
        Cara Download PDF
    </button>
    <div class="collapse" id="des5">
        <div class="card card-body">
            <p>
                <u>Tabel 8.e.1) berikut ini diisi oleh pengusul dari Program Studi pada program Diploma Tiga/Sarjana/Sarjana Terapan.</u><br>
                Tuliskan tingkat/ukuran tempat kerja/berwirausaha lulusan dalam 3 tahun, mulai TS-4 sampai dengan TS-2, dengan mengikuti format Tabel 8.e.1) berikut ini. Data diambil dari hasil studi penelusuran lulusan. <br><br>
                <u>Tabel 8.e.2) berikut ini diisi oleh pengusul dari Program Studi pada program Diploma Tiga/Sarjana/Sarjana Terapan/Magister/Magister Terapan.</u><br>
                Tuliskan hasil pengukuran kepuasan pengguna lulusan berdasarkan aspek-aspek: 1) etika, 2) keahlian pada bidang ilmu (kompetensi utama), 3) kemampuan berbahasa asing, 4) penggunaan teknologi informasi, 5) kemampuan berkomunikasi, 6) kerjasama dan 7) pengembangan diri, dengan mengikuti format Tabel 8.e.2) berikut ini. Data diambil dari hasil studi penelusuran lulusan.

            </p>
        </div> 
    </div>

 

        @include('tab.luarantab.kinerjatable')

        @foreach ($kinerjaLulusan['data'] as $data)
      <!-- Modal Tambah Edit Kinerja -->
      {{-- bagian id ditambahkan retrieve data caranya kasi tanda - kemudian kasi {{ $data->id }} --}}
      <div class="modal fade" id="modalkinerjaedit-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenindustri">Edit Data Kinerja Lulusan </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.kinerjaedit')
        </div>
        </div>
        </div>

      <!-- Modal Tambah Delete Kinerja -->
      <div class="modal fade" id="modalkinerjadelete-{{ $data->id }}" tabindex="-1" aria-labelledby="modaldosenindustri" aria-hidden="true">
        <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="modaldosenindustri">Delete Data Kinerja Lulusan </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @include('partials.luarancapaianmodal.kinerjadelete')
        </div>
        </div>
        </div>
        @endforeach
        
{{-- CONTENT --}}


</div>
@include('layouts.table')