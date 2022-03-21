<form action="/simulasi/{{ $sim->id }}" method="post">
    @method('put')
    @csrf
    <div id="print-table" class="container-fluid col-md-12 col-sm-6">
        <table class="table table-hover table-bordered">
            <thead class="text-center" >
                <tr >
                    <th width="1%">No</th>
                    <th width="15%">Elemen</th>
                    <th width="20%">Indikator</th>
                    <th width="5%">Nilai</th>
                    {{-- <th width="5%">Nilai Final
                    </th> --}}
                </tr>
        
            </thead>
        
            <tbody class="text-dark align-middle">
            
                   
               {{ $sim->id }}
                {{-- POINT 1 --}}
                <tr>
                    <td>1</td>
                    <td>A. Kondisi Eksternal</td>
                    <td>Konsistensi dengan hasil analisis SWOT dan\atau analisis lain serta rencana pengembangan ke depan</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" value="{{ $mahasiswa }}" name="point_1"  readonly>
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_1_akhir" value="point_1_akhir" readonly>
                        </div>
                    </td> --}}
                </tr>


                {{-- POINT 2 --}}
                <tr>
                    <td>2</td>
                    <td>B. Profil Unit Pengelola Program Studi</td>
                    <td>Keserbacakupan
                        informasi dalam profil
                        dan konsistensi antara
                        profil dengan data dan
                        informasi yang
                        disampaikan pada
                        masing-masing kriteria,
                        serta menunjukkan iklim
                        yang kondusif untuk
                        pengembangan dan
                        reputasi sebagai rujukan
                        di bidang keilmuannya.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" value="" name="point_2" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_2_akhir" value="point_2_akhir" readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 3 --}}
                <tr>
                    <td>3</td>
                    <td> <b>C. Kriteria</b>  <br>
                        C.1. Visi, Misi,
                        Tujuan dan
                        Strategi <br>
                        C.1.4. Indikator
                        Kinerja Utama</td>
                    <td>Kesesuaian Visi, Misi,
                        Tujuan dan Strategi
                        (VMTS) Unit Pengelola
                        Program Studi (UPPS)
                        terhadap VMTS
                        Perguruan Tinggi (PT)
                        dan visi keilmuan
                        Program Studi (PS)
                        yang dikelolanya</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" value="" name="point_3" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_3_akhir" value="point_3_akhir" readonly>
                        </div>
                    </td> --}}
                </tr>
                    
                {{-- POINT 4 --}}
                <tr>
                    <td>4</td>
                    <td></td>
                    <td>Mekanisme dan
                        keterlibatan pemangku
                        kepentingan dalam
                        penyusunan VMTS
                        UPPS.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" value="" name="point_4" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_4_akhir" value="point_4_akhir" readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 5 --}}
                <tr>
                    <td>5</td>
                    <td></td>
                    <td>Strategi pencapaian
                        tujuan disusun
                        berdasarkan analisis
                        yang sistematis, serta 
                        pada pelaksanaannya
                        dilakukan pemantauan
                        dan evaluasi yang
                        ditindaklanjuti.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" value="" name="point_5" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_5_akhir" value="point_5_akhir" readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 6 --}}
                <tr>
                    <td rowspan="2">6</td>
                    <td rowspan="2"> 
                        <b>C.2. Tata
                        Pamong, Tata
                        Kelola dan
                        Kerjasama</b>  <br> 
                        C.2.4. Indikator
                        Kinerja Utama <br>
                        C.2.4.a) Sistem
                        Tata Pamong</td>
                    <td>A. Kelengkapan struktur
                        organisasi dan
                        keefektifan
                        penyelenggaraan
                        organisasi.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" value="" name="point_6a" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" value="point_6a_akhir" name="point_6a_akhir" readonly>
                        </div>
                    </td> --}}
                </tr>

                <tr>
                    <td>B. Perwujudan good
                        governance dan
                        pemenuhan lima pilar
                        sistem tata pamong,
                        yang mencakup: <br>
                        1) Kredibel, <br>
                        2) Transparan, <br>
                        3) Akuntabel, <br>
                        4) Bertanggung jawab, <br>
                        5) Adil. <br> <br>
                        Skor = (A + (2 x B)) / 3</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" min="1" class="form-control" value="point_6b"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_6b_akhir" value="point_6b_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                
                {{-- POINT 7 --}}
                <tr>
                    <td rowspan="2">7</td>
                    <td rowspan="2">C.2.4.b)
                        Kepemimpinan
                        dan Kemampuan
                        Manajerial</td>
                    <td>A. Komitmen pimpinan
                        UPPS.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" min="2" class="form-control" name="point_7a"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4"  class="form-control" name="point_7a_akhir" value="point_7a_akhir" readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>B. Kapabilitas pimpinan
                        UPPS, mencakup
                        aspek: <br>
                        1) perencanaan, <br>
                        2) pengorganisasian, <br>
                        3) penempatan personel, <br>
                        4) pelaksanaan, <br>
                        5) pengendalian dan
                        pengawasan, dan <br>
                        6) pelaporan yang
                        menjadi dasar tindak
                        lanjut. <br> <br>
                        Skor = (A + (2 x B)) / 3</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" min="1" class="form-control" name="point_7b"  >
                    </div>
                    </td>
                </tr>

                {{-- POINT 8 --}}
                <tr>
                    <td>8</td>
                    <td> <b>C.2.4.c) Kerjasama</td>
                    <td>Mutu, manfaat,
                        kepuasan dan
                        keberlanjutan kerjasama
                        pendidikan, penelitian
                        dan PkM yang relevan
                        dengan program studi.
                        UPPS memiliki bukti
                        yang sahih terkait
                        kerjasama yang ada
                        telah memenuhi 3 aspek
                        berikut: <br>
                        1) memberikan manfaat
                        bagi program studi
                        dalam pemenuhan
                        proses pembelajaran,
                        penelitian, PkM. <br>
                        2) memberikan
                        peningkatan kinerja
                        tridharma dan fasilitas
                        pendukung program
                        studi. <br>
                        3) memberikan
                        kepuasan kepada mitra
                        industri dan mitra
                        kerjasama lainnya, serta
                        menjamin keberlanjutan
                        kerjasama dan hasilnya.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" min="1" class="form-control" name="point_8"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control"name="point_8_akhir" value="point_8_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 9 --}}
                {{-- <tr>
                    <td rowspan="2">9</td>
                    <td rowspan="2"></td>
                    <td>A. Kerjasama
                        pendidikan, penelitian,dan PkM yang relevan
                        dengan program studi
                        dan dikelola oleh UPPS
                        dalam 3 tahun terakhir. <br> <br>
                        Tabel 1 LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_9a"   readonly>
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_9a_akhir" value="point_9a_akhir"  readonly>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>B. Kerjasama tingkat
                        internasional, nasional,
                        wilayah/lokal yang
                        relevan dengan program
                        studi dan dikelola oleh
                        UPPS dalam 3 tahun
                        terakhir. <br> <br>
                        Tabel 1 LKPS <br> <br>
                        Skor = ((2 x A) + B) / 3</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_9b"  readonly>
                    </div>
                    </td>
                    <td>

                    </td>
                </tr> --}}

                {{-- POINT 10 --}}
                <tr>
                    <td>10</td>
                    <td> C.2.5
                        Indikator Kinerja
                        Tambahan</td>
                    <td>Pelampauan SN-DIKTI
                        yang ditetapkan dengan
                        indikator kinerja
                        tambahan yang berlaku
                        di UPPS berdasarkan
                        standar pendidikan
                        tinggi yang ditetapkan
                        perguruan tinggi pada
                        tiap kriteria.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_10"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_10_akhir" value="point_10_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                
                {{-- POINT 11 --}}
                <tr>
                    <td>11</td>
                    <td>C.2.6
                        Evaluasi Capaian
                        Kinerja</td>
                    <td>Analisis keberhasilan
                        dan/atau
                        ketidakberhasilan
                        pencapaian kinerja
                        UPPS yang telah
                        ditetapkan di tiap kriteria
                        memenuhi 2 aspek sebagai berikut: <br>
                        1) capaian kinerja diukur
                        dengan metoda yang
                        tepat, dan hasilnya
                        dianalisis serta
                        dievaluasi, dan <br>
                        2) analisis terhadap
                        capaian kinerja
                        mencakup identifikasi
                        akar masalah, faktor
                        pendukung keberhasilan
                        dan faktor penghambat
                        ketercapaian standard,
                        dan deskripsi singkat
                        tindak lanjut yang akan
                        dilakukan.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_11" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_11_akhir" value="point_11_akhir" readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 12 --}}
                <tr>
                    <td>12</td>
                    <td> C.2.7. Penjaminan
                        Mutu</td>
                    <td>Keterlaksanaan Sistem
                        Penjaminan Mutu
                        Internal (akademik dan
                        nonakademik) yang
                        dibuktikan dengan
                        keberadaan 5 aspek: <br>
                        1) dokumen legal
                        pembentukan unsur
                        pelaksana penjaminan
                        mutu. <br>
                        2) ketersediaan
                        dokumen mutu:
                        kebijakan SPMI, manual
                        SPMI, standar SPMI,
                        dan formulir SPMI. <br>
                        3) terlaksananya siklus
                        penjaminan mutu (siklus
                        PPEPP) <br>
                        4) bukti sahih efektivitas
                        pelaksanaan
                        penjaminan mutu. <br>
                        5) memiliki external
                        benchmarking dalam
                        peningkatan mutu.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_12"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_12_akhir" value="point_12_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 13 --}}
                <tr>
                    <td>13</td>
                    <td>C.2.8. Kepuasan
                        Pemangku
                        Kepentingan</td>
                    <td>Pengukuran kepuasan
                        para pemangku
                        kepentingan
                        (mahasiswa, dosen,
                        tenaga kependidikan,
                        lulusan, pengguna, mitra
                        industri, dan mitra
                        lainnya) terhadap
                        layanan manajemen,
                        yang memenuhi aspek-
                        aspek berikut: <br>
                        1) menggunakan
                        instrumen kepuasan
                        yang sahih, andal,
                        mudah digunakan, <br>
                        2) dilaksanakan secara
                        berkala, serta datanya
                        terekam secara
                        komprehensif, <br>
                        3) dianalisis dengan
                        metode yang tepat serta
                        bermanfaat untuk
                        pengambilan keputusan, <br>
                        4) tingkat kepuasan dan
                        umpan balik
                        ditindaklanjuti untuk
                        perbaikan dan
                        peningkatan mutu luaran
                        secara berkala dan
                        tersistem. <br>
                        5) dilakukan review
                        terhadap pelaksanaan
                        pengukuran kepuasan
                        dosen dan mahasiswa,
                        serta <br>
                        6) hasilnya
                        dipublikasikan dan
                        mudah diakses oleh
                        dosen dan mahasiswa.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_13"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_13_akhir" value="point_13_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 14 --}}
                {{-- <tr>
                    <td>14</td>
                    <td> <b>C.3. Mahasiswa</b>  <br>
                        C.3.4. Indikator
                        Kinerja Utama
                        C.3.4.a) Kualitas
                        Input Mahasiswa</td>
                    <td>Metoda rekrutmen dan
                        keketatan seleksi. <br> <br>
                        Tabel 2.a LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_14"   readonly>
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_14_akhir" value="point_14_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 15 --}}
                {{-- <tr>
                    <td rowspan="2">15</td>
                    <td rowspan="2">C.3.4.b) Daya
                        Tarik Program
                        Studi</td>
                    <td>A. Peningkatan animo
                        calon mahasiswa.
                        Tabel 2.a LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_15a"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_15a_akhir" value="point_15a_akhir"  readonly>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>B. Mahasiswa asing <br> <br>
                        Tabel 2.b LKPS <br> <br>
                        Skor = ((2 x A) + B) / 3</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_15b" >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_15b_akhir" value="point_15b_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 16 --}}
                <tr>
                    <td rowspan="2">16</td>
                    <td rowspan="2">C.3.4.c) Layanan
                        Kemahasiswaan</td>
                    <td>A. Ketersediaan layanan
                        kemahasiswaan di
                        bidang: <br>
                        1) penalaran, minat dan
                        bakat, <br>
                        2) kesejahteraan
                        (bimbingan dan
                        konseling, layanan
                        beasiswa, dan layanan
                        kesehatan), dan <br>
                        3) bimbingan karir dan
                        kewirausahaan.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_16a" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control"name="point_16a_akhir" value="point_16a_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>B. Akses dan mutu
                        layanan
                        kemahasiswaan. <br> <br>
                        Skor = (A + (2 x B)) / 3.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_16b" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_16b_akhir" value="point_16b_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 17 --}}
                {{-- <tr>
                    <td>17</td>
                    <td> <b>C.4. Sumber
                        Daya Manusia</b> <br>
                        C.4.4. Indikator
                        Kinerja Utama <br>
                        C.4.4.a) Profil
                        Dosen</td>
                    <td>Kecukupan jumlah
                        DTPS. <br> <br>
                        Tabel 3.a.1) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_17"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_17_akhir" value="point_17_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 18 --}}
                {{-- <tr>
                    <td>18</td>
                    <td></td>
                    <td>Kualifikasi akademik
                        DTPS. <br> <br>
                        Tabel 3.a.1) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_18" >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_18_akhir" value="point_18_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 19 --}}
                <tr>
                    <td>19</td>
                    <td> </td>
                    <td>Jabatan akademik
                        DTPS. <br> <br>
                        Tabel 3.a.1) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_19"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_19_akhir" value="point_19_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 20 --}}
                {{-- <tr>
                    <td>20</td>
                    <td></td>
                    <td>Rasio jumlah
                        mahasiswa program
                        studi terhadap jumlah
                        DTPS. <br> <br>
                        Tabel 2.a LKPS <br> <br>
                        Tabel 3.a.1) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_20"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_20_akhir" value="point_20_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 21 --}}
                {{-- <tr>
                    <td>21</td>
                    <td></td>
                    <td>Penugasan DTPS
                        sebagai pembimbing
                        utama tugas akhir
                        mahasiswa. <br> <br>
                        Tabel 3.a.2) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_21" >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_21_akhir" value="point_21_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 22 --}}
                <tr>
                    <td>22</td>
                    <td></td>
                    <td>Ekuivalensi Waktu
                        Mengajar Penuh DTPS. <br> <br>
                        Tabel 3.a.3) LKPS </td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_22"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_22_akhir" value="point_22_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 23 --}}
                {{-- <tr>
                    <td>23</td>
                    <td></td>
                    <td>Dosen tidak tetap. <br> <br>
                        Tabel 3.a.4) LKPS </td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_23" >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_23_akhir" value="point_23_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 24 --}}
                {{-- <tr>
                    <td>24</td>
                    <td>C.4.4.b) Kinerja
                        Dosen</td>
                    <td>Pengakuan/rekognisi
                        atas
                        kepakaran/prestasi/kiner
                        ja DTPS. <br> <br>
                        Tabel 3.b.1) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_24"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_24_akhir" value="point_24_akhir" readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 25 --}}
                {{-- <tr>
                    <td>25</td>
                    <td></td>
                    <td>Kesesuaian Visi, Misi,
                        Tujuan dan Strategi
                        (VMTS) Unit Pengelola
                        Program Studi (UPPS)
                        terhadap VMTS
                        Perguruan Tinggi (PT)
                        dan visi keilmuan
                        Program Studi (PS)
                        yang dikelolanya</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_25"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_25_akhir" value="point_25_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 26 --}}
                {{-- <tr>
                    <td>26</td>
                    <td></td>
                    <td>Kegiatan PkM DTPS
                        yang relevan dengan
                        bidang program studi
                        dalam 3 tahun terakhir. <br> <br>
                        Tabel 3.b.3) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_26"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_26_akhir" value="point_26_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 27 --}}
                {{-- <tr>
                    <td>27</td>
                    <td> </td>
                    <td>Publikasi ilmiah dengan
                        tema yang relevan
                        dengan bidang program
                        studi yang dihasilkan
                        DTPS dalam 3 tahun
                        terakhir. <br> <br>
                        Tabel 3.b.4) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_27"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_27_akhir" value="point_27_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 28 --}}
                {{-- <tr>
                    <td>28</td>
                    <td></td>
                    <td>Artikel karya ilmiah
                        DTPS yang disitasi
                        dalam 3 tahun terakhir. <br> <br>
                        Tabel 3.b.5) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_28"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_28_akhir" value="point_28_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 29 --}}
                {{-- <tr>
                    <td>29</td>
                    <td> </td>
                    <td>Luaran penelitian dan
                        PkM yang dihasilkan
                        DTPS dalam 3 tahun
                        terakhir. <br> <br>
                        Tabel 3.b.7) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_29"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_29_akhir" value="point_29_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 30 --}}
                <tr>
                    <td>30</td>
                    <td>C.4.4.c)
                        Pengembangan
                        Dosen</td>
                    <td>Upaya pengembangan
                        dosen. <br> <br>
                        Jika Skor rata-rata butir
                        Profil Dosen  3,5 ,
                        maka Skor = 4.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_30" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_30_akhir" value="point_30_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 31 --}}
                <tr>
                    <td rowspan="2">31</td>
                    <td rowspan="2">C.4.4.d) Tenaga
                        Kependidikan</td>
                    <td>A. Kualifikasi dan
                        kecukupan tenaga
                        kependidikan
                        berdasarkan jenis
                        pekerjaannya
                        (administrasi,
                        pustakawan, teknisi, dll.) <br> <br>
                        Penilaian kecukupan
                        tidak hanya ditentukan
                        oleh jumlah tenaga
                        kependidikan, namun
                        keberadaan dan
                        pemanfaatan teknologi
                        informasi dan komputer
                        dalam proses
                        administrasi dapat
                        dijadikan pertimbangan
                        untuk menilai efektifitas
                        pekerjaan dan
                        kebutuhan akan tenaga
                        kependidikan.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_31a" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_31a_akhir" value="point_31a_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                <tr>
                    <td>B. Kualifikasi dan
                        kecukupan laboran
                        untuk mendukung
                        proses pembelajaran
                        sesuai dengan
                        kebutuhan program
                        studi. <br> <br>
                        Skor = (A + B) / 2</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_31b" value="point_3_akhir"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_31b_akhir" value="point_31b_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 32 --}}
                {{-- <tr>
                    <td>32</td>
                    <td><b>C.5. Keuangan,
                        Sarana dan
                        Prasarana</b> 
                        C.5.4. Indikator
                        Kinerja Utama
                        C.5.4.a) Keuangan</td>
                    <td>Biaya operasional
                        pendidikan. <br> <br>
                        Tabel 4 LKPS</td>
                        <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_32" >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_32_akhir" value="point_32_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 33 --}}
                {{-- <tr>
                    <td>33</td>
                    <td></td>
                    <td>Dana penelitian DTPS. <br> <br>
                        Tabel 4 LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_33"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_33_akhir" value="point_33_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 34 --}}
                {{-- <tr>
                    <td>34</td>
                    <td></td>
                    <td> Dana pengabdian
                        kepada masyarakat
                        DTPS. <br> <br>
                        Tabel 4 LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_34"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_34_akhir" value="point_34_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 35 --}}
                <tr>
                    <td>35</td>
                    <td></td>
                    <td>Realisasi investasi
                        (SDM, sarana dan
                        prasarana) yang
                        mendukung
                        penyelenggaraan
                        tridharma. <br> <br>
                        Jika Skor rata-rata butir
                        tentang Profil Dosen,
                        Sarana, dan Prasarana
                        ≥ 3,5 , maka Skor butir
                        ini = 4.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_35"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_35_akhir" value="point_35_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 36 --}}
                <tr>
                    <td>36</td>
                    <td></td>
                    <td>Kecukupan dana untuk
                        menjamin pencapaian
                        capaian pembelajaran</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_36" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_36_akhir" value="point_36_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 37 --}}
                <tr>
                    <td>37</td>
                    <td>C.5.4.b) Sarana
                        dan Prasarana</td>
                    <td>Kecukupan, aksesibilitas
                        dan mutu sarana dan
                        prasarana untuk
                        menjamin pencapaian
                        capaian pembelajaran
                        dan meningkatkan
                        suasana akademik</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_37"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_37_akhir" value="point_37_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 38 --}}
                <tr>
                    <td rowspan="3">38</td>
                    <td rowspan="3"><b>C.6. Pendidikan </b> <br>
                        C.6.4. Indikator 
                        Kinerja Utama<br>
                        C.6.4.a) Kurikulum</td>
                    <td>A. Keterlibatan
                        pemangku kepentingan
                        dalam proses evaluasi
                        dan pemutakhiran
                        kurikulum</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_38a"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_38a_akhir" value="point_38a_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>B. Kesesuaian capaian
                        pembelajaran dengan
                        profil lulusan dan
                        jenjang KKNI/SKKNI.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_38b" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_38b_akhir" value="point_38b_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>C. Ketepatan struktur
                        kurikulum dalam
                        pembentukan capaian
                        pembelajaran. <br> <br>
                        Skor = (A + (2 x B) + (2
                        x C)) / 5</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_38c"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_38c_akhir" value="point_38c_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 39 --}}
                <tr>
                    <td>39</td>
                    <td>C.6.4.b)
                        Karakteristik
                        Proses
                        Pembelajaran</td>
                    <td>Pemenuhan karakteristik
                        proses pembelajaran,
                        yang terdiri atas sifat: <br> 1)
                        interaktif, <br> 2) holistik, <br> 3)
                        integratif, <br> 4) saintifik, <br> 5)
                        kontekstual, <br> 6) tematik, <br>
                        7) efektif, <br> 8) kolaboratif,
                        dan <br> 9) berpusat pada
                        mahasiswa</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_39"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_39_akhir" value="point_39_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 40 --}}
                <tr>
                    <td rowspan="2">40</td>
                    <td rowspan="2">C.6.4.c) Rencana
                        Proses
                        Pembelajaran</td>
                    <td>A. Ketersediaan dan
                        kelengkapan dokumen
                        rencana pembelajaran
                        semester (RPS)</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_40a"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_40a_akhir" value="point_40a_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>B. Kedalaman dan
                        keluasan RPS sesuai
                        dengan capaian
                        pembelajaran lulusan. <br> <br>
                        Skor = (A + (2 x B)) / 3</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_40b"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_40b_akhir" value="point_40b_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 41 --}}
                <tr>
                    <td rowspan="5">41</td>
                    <td rowspan="5">C.6.4.d)
                        Pelaksanaan
                        Proses
                        Pembelajaran</td>
                    <td>A. Bentuk interaksi
                        antara dosen,
                        mahasiswa dan sumber
                        belajar</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_41a"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_41a_akhir" value="point_41a_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>B. Pemantauan
                        kesesuaian proses
                        terhadap rencana
                        pembelajaran</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_41b"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_41b_akhir" value="point_41b_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>C. Proses pembelajaran
                        yang terkait dengan
                        penelitian harus
                        mengacu SN Dikti
                        Penelitian: <br>
                        1) hasil penelitian: harus
                        memenuhi
                        pengembangan
                        IPTEKS, meningkatkan
                        kesejahteraan
                        masyarakat, dan daya
                        saing bangsa. <br>
                        2) isi penelitian:
                        memenuhi kedalaman
                        dan keluasan materi
                        penelitian sesuai 
                        capaian pembelajaran. <br>
                        3) proses penelitian:
                        mencakup perencanaan,
                        pelaksanaan, dan
                        pelaporan. <br>
                        4) penilaian penelitian
                        memenuhi unsur
                        edukatif, obyektif,
                        akuntabel, dan
                        transparan.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_41c" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_41c_akhir" value="point_41c_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>D. Proses pembelajaran
                        yang terkait dengan
                        PkM harus mengacu SN
                        Dikti PkM: <br>
                        1) hasil PkM: harus
                        memenuhi
                        pengembangan
                        IPTEKS, meningkatkan
                        kesejahteraan
                        masyarakat, dan daya
                        saing bangsa. <br>
                        2) isi PkM: memenuhi
                        kedalaman dan
                        keluasan materi PkM
                        sesuai capaian
                        pembelajaran. <br>
                        3) proses PkM:
                        mencakup perencanaan,
                        pelaksanaan, dan
                        pelaporan. <br>
                        4) penilaian PkM
                        memenuhi unsur
                        edukatif, obyektif,
                        akuntabel, dan
                        transparan.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_41d"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_41d_akhir" value="point_41d_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>E. Kesesuaian metode
                        pembelajaran dengan
                        capaian pembelajaran.
                        Contoh: RBE (research
                        based education), IBE (industry based
                        education), teaching
                        factory/teaching
                        industry, dll. <br> <br>
                        Skor = (A + (2 x B) + (2
                        x C) + (2 x D) + (2 x E)) /
                        9</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_41e"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_41e_akhir" value="point_41e_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 42 --}}
                <tr>
                    <td>42</td>
                    <td></td>
                    <td>Pembelajaran yang
                        dilaksanakan dalam
                        bentuk praktikum,
                        praktik studio, praktik
                        bengkel, atau praktik
                        lapangan. <br> <br>
                        Tabel 5.a LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_42" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_42_akhir" value="point_42_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 43 --}}
                <tr>
                    <td>43</td>
                    <td>C.6.4.e)
                        Monitoring dan
                        Evaluasi Proses
                        Pembelajaran</td>
                    <td>Monitoring dan evaluasi
                        pelaksanaan proses
                        pembelajaran mencakup
                        karakteristik,
                        perencanaan,
                        pelaksanaan, proses
                        pembelajaran dan
                        beban belajar
                        mahasiswa untuk
                        memperoleh capaian
                        pembelajaran lulusan.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_43" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_43_akhir" value="point_43_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 44 --}}
                <tr>
                    <td rowspan="3">44</td>
                    <td rowspan="3">C.6.4.f) Penilaian
                        Pembelajaran</td>
                    <td>A. Mutu pelaksanaan
                        penilaian pembelajaran
                        (proses dan hasil belajar
                        mahasiswa) untuk
                        mengukur ketercapaian
                        capaian pembelajaran
                        berdasarkan prinsip
                        penilaian yang
                        mencakup: <br>
                        1) edukatif, <br>
                        2) otentik, <br>
                        3) objektif, <br>
                        4) akuntabel, dan <br>
                        5) transparan,
                        yang dilakukan secara
                        terintegrasi.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_44a" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_44a_akhir" value="point_44a_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>B. Pelaksanaan
                    penilaian terdiri atas
                    teknik dan instrumen
                    penilaian. Teknik
                    penilaian terdiri dari: <br>
                    1) observasi, <br>
                    2) partisipasi, <br>
                    3) unjuk kerja, <br>
                    4) test tertulis, <br>
                    5) test lisan, dan <br>
                    6) angket. 
                    Instrumen penilaian
                    terdiri dari:<br>
                    1) penilaian proses
                    dalam bentuk rubrik,
                    dan/ atau; <br>
                    2) penilaian hasil dalam
                    bentuk portofolio, atau <br>
                    3) karya disain.
                    </td>
                <td>
                <div class="input-group input-group-sm">
                    <input type="number" max="4" class="form-control" name="point_44b" >
                </div>
                </td>
                {{-- <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_44b_akhir" value="point_44b_akhir"  readonly>
                    </div>
                </td> --}}
            </tr>
            <tr>
                <td>C. Pelaksanaan
                    penilaian memuat unsur-
                    unsur sebagai berikut: <br>
                    1) mempunyai kontrak
                    rencana penilaian, <br>
                    2) melaksanakan
                    penilaian sesuai kontrak
                    atau kesepakatan, <br>
                    3) memberikan umpan
                    balik dan memberi
                    kesempatan untuk
                    mempertanyakan hasil
                    kepada mahasiswa, <br>
                    4) mempunyai
                    dokumentasi penilaian
                    proses dan hasil belajar
                    mahasiswa, <br>
                    5) mempunyai prosedur
                    yang mencakup tahap
                    perencanaan, kegiatan
                    pemberian tugas atau
                    soal, observasi kinerja,
                    pengembalian hasil
                    observasi, dan
                    pemberian nilai akhir, <br>
                    6) pelaporan penilaian
                    berupa kualifikasi
                    keberhasilan mahasiswa
                    dalam menempuh suatu
                    mata kuliah dalam
                    bentuk huruf dan angka, <br>
                    7) mempunyai bukti-
                    bukti rencana dan telah
                    melakukan proses
                    perbaikan berdasar hasil
                    monev penilaian. <br> <br>
                    Skor = (A + (2 x B) + (2
                    x C)) / 5</td>
                <td>
                <div class="input-group input-group-sm">
                    <input type="number" max="4" class="form-control" name="point_44c"  >
                </div>
                </td>
                {{-- <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_44c_akhir" value="point_44c_akhir" readonly>
                    </div>
                </td> --}}
            </tr>

                {{-- POINT 45 --}}
                <tr>
                    <td>45</td>
                    <td></td>
                    <td>Integrasi kegiatan
                        penelitian dan PkM
                        dalam pembelajaran
                        oleh DTPS dalam 3
                        tahun terakhir. <br> <br>
                        Tabel 5.b LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_45"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_45_akhir" value="point_45_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 46 --}}
                <tr>
                    <td>46</td>
                    <td>C.6.4.h) Suasana
                        Akademik</td>
                    <td>Keterlaksanaan dan
                        keberkalaan program
                        dan kegiatan diluar
                        kegiatan pembelajaran
                        terstruktur untuk
                        meningkatkan suasana
                        akademik.
                        Contoh: kegiatan
                        himpunan mahasiswa,
                        kuliah umum/studium 
                        generale, seminar
                        ilmiah, bedah buku.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_46"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_46_akhir" value="point_46_akhir" readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 47 --}}
                <tr>
                    <td rowspan="2">47</td>
                    <td rowspan="2">C.6.4.i) Kepuasan
                        Mahasiswa</td>
                    <td>A. Tingkat kepuasan
                        mahasiswa terhadap
                        proses pendidikan. <br> <br>
                        Tabel 5.c LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_47a" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_47a_akhir" value="point_47a_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
                <tr>
                    <td>B. Analisis dan tindak
                        lanjut dari hasil
                        pengukuran kepuasan
                        mahasiswa. <br> <br>
                        Skor = (A + (2 x B)) / 3</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_47b"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_47b_akhir" value="point_47b_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 48 --}}
                <tr>
                    <td>48</td>
                    <td><b>C.7. Penelitian </b> <br>
                        C.7.4. Indikator
                        Kinerja Utama <br>
                        C.7.4.a) Relevansi
                        Penelitian</td>
                    <td>Relevansi penelitian
                        pada UPPS mencakup
                        unsur-unsur sebagai
                        berikut: <br>
                        1) memiliki peta jalan
                        yang memayungi tema
                        penelitian dosen dan
                        mahasiswa, <br>
                        2) dosen dan
                        mahasiswa
                        melaksanakan penelitian
                        sesuai dengan agenda
                        penelitian dosen yang
                        merujuk kepada peta
                        jalan penelitian. <br>
                        3) melakukan evaluasi
                        kesesuaian penelitian
                        dosen dan mahasiswa
                        dengan peta jalan, dan <br>
                        4) menggunakan hasil
                        evaluasi untuk
                        perbaikan relevansi
                        penelitian dan
                        pengembangan
                        keilmuan program studi.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_48" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_48_akhir" value="point_48_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 49 --}}
                <tr>
                    <td>49</td>
                    <td>C.7.4.b) Penelitian
                        Dosen dan
                        Mahasiswa</td>
                    <td>Penelitian DTPS yang
                        dalam pelaksanaannya
                        melibatkan mahasiswa
                        program studi dalam 3
                        tahun terakhir. <br> <br>
                        Tabel 6.a LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_49"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_49_akhir" value="point_49_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 50 --}}
                <tr>
                    <td>50</td>
                    <td> <b>C.8. Pengabdian 
                        kepada
                        Masyarakat</b> <br>
                        C.8.4. Indikator
                        Kinerja Utama <br>
                        C.8.4.a) Relevansi
                        PkM</td>
                    <td>Relevansi PkM pada
                        UPPS mencakup unsur-
                        unsur sebagai berikut: <br>
                        1) memiliki peta jalan
                        yang memayungi tema
                        PkM dosen dan
                        mahasiswa serta
                        hilirisasi/penerapan
                        keilmuan program studi, <br>
                        2) dosen dan
                        mahasiswa
                        melaksanakan PkM
                        sesuai dengan peta
                        jalan PkM. <br>
                        3) melakukan evaluasi
                        kesesuaian PkM dosen
                        dan mahasiswa dengan
                        peta jalan, dan <br>
                        4) menggunakan hasil
                        evaluasi untuk
                        perbaikan relevansi PkM
                        dan pengembangan
                        keilmuan program studi.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_50"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_50_akhir" value="point_50_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 51 --}}
                <tr>
                    <td>51</td>
                    <td>C.8.4.b) PkM
                        Dosen dan
                        Mahasiswa</td>
                    <td>PkM DTPS yang dalam
                        pelaksanaannya
                        melibatkan mahasiswa
                        program studi dalam 3
                        tahun terakhir.
                        Tabel 7 LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_51"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_51_akhir" value="point_51_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 52 --}}
                <tr>
                    <td>52</td>
                    <td> <b>C.9. Luaran dan
                        Capaian
                        Tridharma</b> <br>
                        C.9.4. Indikator
                        Kinerja Utama <br>
                        C.9.4.a) Luaran
                        Dharma
                        Pendidikan</td>
                    <td>Analisis pemenuhan
                        capaian pembelajaran
                        lulusan (CPL) yang
                        diukur dengan metoda
                        yang sahih dan relevan,
                        mencakup aspek: <br>
                        1) keserbacakupan, <br>
                        2) kedalaman, dan <br>
                        3) kebermanfaatan
                        analisis yang
                        ditunjukkan dengan
                        peningkatan CPL dari
                        waktu ke waktu dalam 3
                        tahun terakhir.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_52" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_52_akhir" value="point_52_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 53 --}}
                <tr>
                    <td>53</td>
                    <td></td>
                    <td>IPK lulusan. <br> <br>
                        RIPK = Rata-rata IPK
                        lulusan dalam 3 tahun
                        terakhir. <br> <br>
                        Tabel 8.a LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_53" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_53_akhir" value="point_53_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 54 --}}
                <tr>
                    <td>54</td>
                    <td></td>
                    <td>Prestasi mahasiswa di
                        bidang akademik dalam
                        3 tahun terakhir. <br> <br>
                        Tabel 8.b.1) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_54"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_54_akhir" value="point_54_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 55 --}}
                <tr>
                    <td>55</td>
                    <td></td>
                    <td>Prestasi mahasiswa di
                        bidang nonakademik
                        dalam 3 tahun terakhir. <br> <br>
                        Tabel 8.b.2) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_55"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_55_akhir" value="point_55_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 56 --}}
                <tr>
                    <td>56</td>
                    <td></td>
                    <td>Masa studi. <br> <br>
                        MS = Rata-rata masa
                        studi lulusan (tahun). <br> <br>
                        Tabel 8.c LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_56"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_56_akhir" value="point_56_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 57 --}}
                <tr>
                    <td>57</td>
                    <td></td>
                    <td>Kelulusan tepat waktu. <br> <br>
                        PTW = Persentase
                        kelulusan tepat waktu. <br> <br>
                        Tabel 8.c LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_57" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_57_akhir" value="point_57_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 58 --}}
                <tr>
                    <td>58</td>
                    <td></td>
                    <td>Keberhasilan studi. <br> <br>
                        PPS = Persentase
                        keberhasilan studi. <br> <br>
                        Tabel 8.c LKPS
                     </td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_58"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_58_akhir" value="point_58_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 59 --}}
                <tr>
                    <td>59</td>
                    <td></td>
                    <td>Pelaksanaan tracer
                        study yang mencakup 5
                        aspek sebagai berikut: <br>
                        1) pelaksanaan tracer
                        study terkoordinasi di
                        tingkat PT, <br>
                        2) kegiatan tracer study
                        dilakukan secara reguler
                        setiap tahun dan
                        terdokumentasi, <br>
                        3) isi kuesioner
                        mencakup seluruh
                        pertanyaan inti tracer
                        study DIKTI. <br>
                        4) ditargetkan pada
                        seluruh populasi
                        (lulusan TS-4 s.d. TS-2), <br>
                        5) hasilnya
                        disosialisasikan dan
                        digunakan untuk
                        pengembangan
                        kurikulum dan
                        pembelajaran.
                    </td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_59" >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_59_akhir" value="point_59_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 60 --}}
                {{-- <tr>
                    <td>60</td>
                    <td></td>
                    <td>Waktu tunggu. <br> <br>
                        WT = waktu tunggu
                        lulusan untuk
                        mendapatkan pekerjaan
                        pertama dalam 3 tahun,
                        mulai TS-4 s.d. TS-2. <br> <br>
                        Tabel 8.d.1) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_60"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control"name="point_60_akhir" value="point_60_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 61 --}}
                {{-- <tr>
                    <td>61</td>
                    <td></td>
                    <td>Kesesuaian bidang
                        kerja. <br> <br>
                        PBS = Kesesuaian
                        bidang kerja lulusan
                        saat mendapatkan
                        pekerjaan pertama
                        dalam 3 tahun, mulai
                        TS-4 s.d. TS-2. <br> <br>
                        Tabel 8.d.2) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_61"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_61_akhir" value="point_61_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 62 --}}
                {{-- <tr>
                    <td>62</td>
                    <td></td>
                    <td>Tingkat dan ukuran
                        tempat kerja lulusan. <br> <br>
                        Tabel 8.e.1) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_62"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_62_akhir" value="point_62_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 63 --}}
                {{-- <tr>
                    <td>63</td>
                    <td> </td>
                    <td>Tingkat kepuasan
                        pengguna lulusan. <br> <br>
                        Tabel 8.e.2) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_63" >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_63_akhir" value="point_63_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 64 --}}
                {{-- <tr>
                    <td>64</td>
                    <td>C.9.4.b) Luaran
                        Dharma Penelitian
                        dan PkM</td>
                    <td>Publikasi ilmiah
                        mahasiswa, yang
                        dihasilkan secara
                        mandiri atau bersama
                        DTPS, dengan judul
                        yang relevan dengan
                        bidang program studi
                        dalam 3 tahun terakhir. <br> <br>
                        Tabel 8.f.1) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_64"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_64_akhir" value="point_64_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 65 --}}
                {{-- <tr>
                    <td>65</td>
                    <td></td>
                    <td>Luaran penelitian dan
                        PkM yang dihasilkan
                        mahasiswa, baik secara
                        mandiri atau bersama
                        DTPS dalam 3 tahun
                        terakhir. <br> <br>
                        Tabel 8.f.4) LKPS</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_65"  >
                    </div>
                    </td>
                    <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_65_akhir" value="point_65_akhir"  readonly>
                        </div>
                    </td>
                </tr> --}}

                {{-- POINT 66 --}}
                <tr>
                    <td>66</td>
                    <td> <b>D Analisis dan
                        Penetapan
                        Program
                        Pengembangan <br>
                        D.1
                        Analisis dan
                        Capaian Kinerja
                        </b> </td>
                    <td>Keserbacakupan
                        (kelengkapan, keluasan,
                        dan kedalaman),
                        ketepatan, ketajaman,
                        dan kesesuaian analisis
                        capaian kinerja serta
                        konsistensi dengan
                        setiap kriteria.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_66"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_66_akhir" value="point_66_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 67 --}}
                <tr>
                    <td>67</td>
                    <td> <b>D.2
                        Analisis SWOT
                        atau Analisis 
                        Lain yang
                        Relevan</b> </td>
                    <td>Ketepatan analisis
                        SWOT atau analisis
                        yang relevan di dalam
                        mengembangkan
                        strategi.
                    </td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_67"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_67_akhir" value="point_67_akhir" readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 68 --}}
                <tr>
                    <td>68</td>
                    <td> <b>D.3
                        Program
                        Pengembangan</td>
                    <td>Ketepatan di dalam
                        menetapkan prioritas
                        program
                        pengembangan.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_68"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_68_akhir" value="point_68_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>

                {{-- POINT 69 --}}
                <tr>
                    <td>69</td>
                    <td> <b>D.4
                        Program
                        Keberlanjutan</b> </td>
                    <td>UPPS memiliki
                        kebijakan, ketersediaan
                        sumberdaya,
                        kemampuan
                        melaksanakan, dan
                        kerealistikan program.</td>
                    <td>
                    <div class="input-group input-group-sm">
                        <input type="number" max="4" class="form-control" name="point_69"  >
                    </div>
                    </td>
                    {{-- <td>
                        <div class="input-group input-group-sm">
                            <input type="number" max="4" class="form-control" name="point_69_akhir" value="point_69_akhir"  readonly>
                        </div>
                    </td> --}}
                </tr>
               

                
            </tbody>
        </table>
    

<div class="modal-footer">
<button type="submit" class="btn btn-primary">Simpan</button>
</div>
</div>
</form>