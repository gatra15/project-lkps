<form action="/kinerja-dosen/pkm-dtps/{{ $ts->tahun_laporan }}/{{ $ts->sumber_id }}" method="POST">
    @method('put')
    @csrf
    <div class="modal-body">
        
        <div class="card-body px-20 pb-20">
            <div class="row">
               
                {{-- MASUK KE TABEL SDM DOSENS --}}
                <label for="dosentetap"> Sumber Daya Pembiyaan :</label>
                <p>@php echo $ts->sumber->sumberdaya @endphp</p>
                <div class="input-group input-group-sm mb-3">
                    <input type="hidden" name="sumber_id" value="{{ $ts->sumber_id }}" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly>
                </div>

                <label for="penelitian" class="fs-6 my-2"> Jumlah Judul </label>
                <div class="form-row justify-content-center text-center">
                    <div class="form-group col-md-4 align-middle">
                    <label for="dosentetap"> TS-2 :</label>
                    @if ($ts->sumber_id == 1)
                        @foreach ($pkms['ts2'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @elseif ($ts->sumber_id == 2)
                        @foreach ($pkms['ts2_sumber2'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @else
                        @foreach ($pkms['ts2_sumber3'] as $ts2)
                            <input name="jumlah_ts2" value="{{ $ts2->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                        @endforeach
                    @endif
                       
                    </div>
                    <div class="form-group col-md-4 align-middle">
                        <label for="dosentetap"> TS-1 :</label>
                        @if ($ts->sumber_id == 1)
                            @foreach ($pkms['ts1'] as $ts1)
                                <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                            @endforeach
                        @elseif ($ts->sumber_id == 2)
                            @foreach ($pkms['ts1_sumber2'] as $ts1)
                                <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                            @endforeach
                        @else
                            @foreach ($pkms['ts1_sumber3'] as $ts1)
                                <input name="jumlah_ts1" value="{{ $ts1->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                            @endforeach
                        @endif
                      </div>
                    <div class="form-group col-md-4 align-middle">
                        <label for="dosentetap"> TS :</label>
                        @if ($ts->sumber_id == 1)
                            @foreach ($pkms['ts'] as $ts)
                                <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                            @endforeach
                        @elseif ($ts->sumber_id == 2)
                            @foreach ($pkms['ts_sumber2'] as $ts)
                                <input name="jumlah_ts" value="{{ $ts->jumlah_ts }}" class="form-control form-control-sm mb-3" type="number" min="1" required>
                            @endforeach
                        @else
                            @foreach ($pkms['ts_sumber3'] as $ts)
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