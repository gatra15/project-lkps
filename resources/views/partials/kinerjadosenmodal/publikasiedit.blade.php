<form action="/kinerja-dosen/publikasi-dtps/{{ $ts->tahun_laporan }}/{{ $ts->media_id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
                {{-- MASUK KE TABEL SDM DOSENS --}}

                <label for="dosentetap"> Media Publikasi :</label>
                <p>@php echo $ts->media->media @endphp</p>
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="media_id" value="{{ $ts->media_id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
                </div>
                
                <label for="penelitian"> Jumlah Judul </label>
                <div class="form-row justify-content-center text-center">
                    <div class="form-group col-md-4 align-middle">
                    <label for="dosentetap"> TS-2 :</label>
                    @if ($ts->media_id == 1)
                        @foreach ($publikasi['ts2'] as $ts2)
                        <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 2)
                        @foreach ($publikasi['ts2_media2'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 3)
                        @foreach ($publikasi['ts2_media3'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 4)
                        @foreach ($publikasi['ts2_media4'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 5)
                        @foreach ($publikasi['ts2_media5'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 6)
                        @foreach ($publikasi['ts2_media6'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 7)
                        @foreach ($publikasi['ts2_media7'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 8)
                        @foreach ($publikasi['ts2_media8'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 9)
                        @foreach ($publikasi['ts2_media9'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 10)
                        @foreach ($publikasi['ts2_media10'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @endif
                    </div>
                    <div class="form-group col-md-4 align-middle">
                        <label for="dosentetap"> TS-1 :</label>
                    @if ($ts->media_id == 1)
                        @foreach ($publikasi['ts1'] as $ts1)
                        <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 2)
                        @foreach ($publikasi['ts1_media2'] as $ts1)
                            <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 3)
                        @foreach ($publikasi['ts1_media3'] as $ts1)
                            <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 4)
                        @foreach ($publikasi['ts1_media4'] as $ts1)
                            <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 5)
                        @foreach ($publikasi['ts1_media5'] as $ts1)
                            <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 6)
                        @foreach ($publikasi['ts1_media6'] as $ts1)
                            <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 7)
                        @foreach ($publikasi['ts1_media7'] as $ts1)
                            <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 8)
                        @foreach ($publikasi['ts1_media8'] as $ts1)
                            <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 9)
                        @foreach ($publikasi['ts1_media9'] as $ts1)
                            <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 10)
                        @foreach ($publikasi['ts1_media10'] as $ts1)
                            <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @endif
                      </div>
                    <div class="form-group col-md-4 align-middle">
                        <label for="dosentetap"> TS :</label>
                    @if ($ts->media_id == 1)
                        @foreach ($publikasi['ts'] as $ts)
                        <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 2)
                        @foreach ($publikasi['ts_media2'] as $ts)
                            <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 3)
                        @foreach ($publikasi['ts_media3'] as $ts)
                            <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 4)
                        @foreach ($publikasi['ts_media4'] as $ts)
                            <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 5)
                        @foreach ($publikasi['ts_media5'] as $ts)
                            <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 6)
                        @foreach ($publikasi['ts_media6'] as $ts)
                            <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 7)
                        @foreach ($publikasi['ts_media7'] as $ts)
                            <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 8)
                        @foreach ($publikasi['ts_media8'] as $ts)
                            <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 9)
                        @foreach ($publikasi['ts_media9'] as $ts)
                            <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->media_id == 10)
                        @foreach ($publikasi['ts_media10'] as $ts)
                            <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @endif
                    </div>
                </div>
               {{-- coding modal insert akhir --}}
               

            </div>
        </div>
    
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>