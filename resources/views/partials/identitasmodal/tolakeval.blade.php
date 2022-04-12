<form action="/identitas-pengusul/lembar-evaluasi/tolak/" method="post">
    @method('put')
    @csrf
    <div class="modal-body">     
    <div class="card-body px-20 pb-20">
    <div class="row">

<label > Alasan </label>
<div class="form">
    <textarea class="form-control" placeholder="" id="floatingTextarea2" name="alasan" style="height: 700px" >  </textarea>
</div>

<div class="modal-footer">
    <button type="submit" class="btn btn-success">Kirim</button> 
    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button> 
</div>

    </div>
    </div>
    </div>
</form>