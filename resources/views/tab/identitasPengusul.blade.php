@extends('partials.sidebar')
@extends('layouts.main')

@section('content')
<div class="content-header">
    <div class="container-fluid">
            <h1>IDENTITAS</h1>
    </div>
</div>


<div class="content">
<div class="container-fluid">
        <div class="card">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif
<div class="card-header">
    <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" href="#description" role="tab" aria-controls="description" aria-selected="true">Identitas</a>
        </li>
    </ul>
</div>
<div class="card-body">
    <div class="tab-content mt-3">
        <div class="tab-pane active" id="description" role="tabpanel">
            <form id="mainform" method="post" action="/identitas-pengusul">
                @csrf
                <input type="hidden" name="id" class="form-control" value="">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Perguruan Tinggi <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="perguruan_tinggi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Unit Pengelola Program Studi    <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="unit_pengelola">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Jenis Program   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="jenis_program">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Nama Program Studi   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="prodi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Alamat   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Nomor Telepon    <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="no_telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">E-Mail dan Website    <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="email_website">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Nomor SK Pendirian PT 1)   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="no_sk1">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Tanggal SK Pendirian PT   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="tanggal_sk_pendirian">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Pejabat Penandatangan SK Pendirian PT   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="pejabat_penandatanganan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Nomor SK Pembukaan PS 2)   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="no_sk2">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Tanggal SK Pembukaan PS  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="tanggal_sk_pembukaan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Pejabat Penandatangan SK Pembukaan PS  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="pejabat_pembukaan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> SK Pembukaan PS  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="sk_pembukaan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Tahun Pertama Kali Menerima Mahasiswa  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="tahun_pertama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Peringkat Terbaru Akreditasi PS  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="peningkatan_terbaru">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Nomor SK BAN-PT  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="nomor_sk_banpt">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit"  class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
            
    </div>
@endsection