<form action="/luaran-capaian-tridharma/kepuasan-pengguna/{{ $data->id }}" method="post">
  @method('put')
  @csrf
  <div class="modal-body">
      
      <div class="card-body px-20 pb-20">
          <div class="row">
             
              {{-- MASUK KE TABEL SDM DOSENS --}}
          {{-- <td>{{ $data->kemampuan->text }}</td>
          <td>{{ $data->sangat_baik }}</td>
          <td>{{ $data->baik }}</td>
          <td>{{ $data->cukup}}</td>
          <td>{{ $data->kurang }}</td>
          <td>{{ $data->rencana_tindak_lanjut }}</td> --}}

          <label>@php echo $data->kemampuan->text @endphp</label>
              <input type="hidden" name="kemampuan_id" class="form-control" value="{{ $data->kemampuan->text }}"  required>

              <label for="pengkuan"> Tingkat Kepuasan Pengguna (%) :</label>
              <div class="form-row justify-content-center">
                  <div class="form-group col-md-6 align-middle">
                    <label for="#">Sangat Baik %</label>
                    <input type="number" class="form-control form-control-sm mb-3" name="sangat_baik" value="{{ $data->sangat_baik }}" id="#" >
                  </div>
                  <div class="form-group col-md-6 align-middle">
                    <label for="#">Baik %</label>
                    <input type="number" class="form-control form-control-sm mb-3" name="baik" value="{{ $data->baik }}" id="#">
                  </div>
                  <div class="form-group col-md-6 align-middle">
                    <label for="#">Cukup %</label>
                    <input type="number" class="form-control form-control-sm mb-3" name="cukup" value="{{ $data->cukup }}" id="#">
                  </div>
                  <div class="form-group col-md-6 align-middle">
                    <label for="#">Kurang %</label>
                    <input type="number" class="form-control form-control-sm mb-3" name="kurang" value="{{ $data->kurang }}" id="#">
                  </div>
                </div>
              <label for="pengkuan"> Rencana Tindak Lanjut oleh UPPS/PS :</label>
              <div class="input-group input-group-sm mb-3">
                  <input type="text" name="rencana_tindak_lanjut" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="{{ $data->rencana_tindak_lanjut }}" required>
              </div>

             {{-- coding modal insert akhir --}}
          
          </div>
      </div>
  </div>
  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
  <button type="submit" class="btn btn-primary">Tambah</button>
  </div>
</form>