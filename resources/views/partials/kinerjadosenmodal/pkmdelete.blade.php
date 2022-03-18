<form action="/kinerja-dosen/pkm-dtps/{{ $ts->tahun_laporan }}/{{ $ts->sumber_id }}" method="post">
    <div class="modal-body">
        @csrf
        <h5 class="text-center">Yakin Ingin Menghapus ? </h5>
        <input type="hidden" name="sumber_id" value="{{ $ts->sumber_id }}">
        @if ($ts->sumber_id == 1)
            @foreach ($pkms['ts2'] as $ts2)
                <input type="hidden" name="jumlah_ts2" value="">>
            @endforeach
        @elseif ($ts->sumber_id == 2)
            @foreach ($pkms['ts2_sumber2'] as $ts2)
                <input type="hidden" name="jumlah_ts2" value="">
            @endforeach
        @else
            @foreach ($pkms['ts2_sumber3'] as $ts2)
                <input type="hidden" name="jumlah_ts2" value="">
            @endforeach
        @endif

        @if ($ts->sumber_id == 1)
            @foreach ($pkms['ts1'] as $ts1)
                 <input type="hidden" name="jumlah_ts1" value="">
            @endforeach
        @elseif ($ts->sumber_id == 2)
            @foreach ($pkms['ts1_sumber2'] as $ts1)
                 <input type="hidden" name="jumlah_ts1" value="">
            @endforeach
        @else
            @foreach ($pkms['ts1_sumber3'] as $ts1)
                 <input type="hidden" name="jumlah_ts1" value="">
            @endforeach
        @endif

        @if ($ts->sumber_id == 1)
            @foreach ($pkms['ts'] as $ts)
                <input type="hidden" name="jumlah_ts" value="">
                <input type="hidden" name="jumlah" value="">
            @endforeach
        @elseif ($ts->sumber_id == 2)
            @foreach ($pkms['ts_sumber2'] as $ts)
                <input type="hidden" name="jumlah_ts" value="">
                <input type="hidden" name="jumlah" value="">
            @endforeach
        @else
            @foreach ($pkms['ts_sumber3'] as $ts)
                <input type="hidden" name="jumlah_ts" value="">
                <input type="hidden" name="jumlah" value="">
            @endforeach
        @endif
        
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger">Yakin</button>
    </div>
</form>