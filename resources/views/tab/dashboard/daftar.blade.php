<div class="content-header">
    <div class="container-fluid">
        <h2>DASHBOARD</h2>
    </div>
</div>
<div class="content">
    <div class="container-fluid">
        <div class="card">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs" id="bologna-list" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" href="#dashboard" role="tab" aria-controls="dashboard" aria-selected="true"> Daftar </a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content mt-3">
            <div class="tab-pane active" id="dashboard" role="tabpanel">
                
                <div class="mb-5 pb-2">
                    <label for="exampleInputEmail1" class="form-label h3">Pilih Tahun Laporan</label> 
                    <div id="emailHelp" class="form-text">Pilih tahun untuk melihat atau input data laporan.</div>
                    <select id="thn_ajaran" class="form-control form-control-lg mb-3" aria-label=".form-control-lg">
                    @php
                        $years = range(2000, strftime("%Y", time()));
                    @endphp
                    <option>Pilih Tahun</option>
                    <?php foreach($years as $year) : ?>
                        <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                    <?php endforeach; ?>
                    </select>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
