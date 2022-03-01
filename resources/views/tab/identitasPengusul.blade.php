@extends('partials/sidebar')
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
            <form id="mainform" onsubmit="return ajaxPost(event, this)" method="post" action="http://lkps.logistikdonasi.com/admin/data-identitas/save">
                <input type="hidden" name="id" class="form-control" value="">
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Perguruan Tinggi <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="pt">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Unit Pengelola Program Studi    <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="unit_pps">
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
                            <input type="text" class="form-control" value="" name="program_studi">
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
                            <input type="text" class="form-control" value="" name="np_tlp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">E-Mail dan Website    <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="email_web">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Nomor SK Pendirian PT 1)   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="no_sk_pendirian_pt">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Tanggal SK Pendirian PT   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="tggl_sk_pendirian">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Pejabat Penandatangan SK Pendirian PT   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="penandatangan_sk_pendiran">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Nomor SK Pembukaan PS 2)   <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="no_sk_pembukaan_ps">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Tanggal SK Pembukaan PS  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="tgl_sk_pembukaan_ps">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> Pejabat Penandatangan SK Pembukaan PS  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="penandatanganan_sk_pembukaan_ps">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between"> SK Pembukaan PS  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="sk_pembukaan_ps">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Tahun Pertama Kali Menerima Mahasiswa  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="thn_pertama_terima_mhs">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Peringkat Terbaru Akreditasi PS  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="peringkat_terbaru_ps">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label d-flex justify-content-between">Nomor SK BAN-PT  <span>:</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" value="" name="no_sk_ban_pt">
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