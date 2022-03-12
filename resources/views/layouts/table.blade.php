<style>

table.mini {
    font-size: 5px;
}
    .heading{
      text-align: center;
      color: #2F8D46;
    }
table.table-bordered{
  border:black;
  margin-top:20px;
}
table.table-bordered > thead > tr > th{
  border:1px solid black;
}
table.table-bordered > tbody > tr > td{
  border:1px solid black;
}

thead{
background-color: #d8d8d8;
}

#action {
margin: -5px -5px -5px -30px;
}
#action li{
list-style:none;
}

i.btn-del{
color: white;
}

sup {
font-size: 10px;
}

td.abu{
background-color: #d8d8d8; 
}

th.align-middle , th {
font-size : 15px;
font-family: sans-serif;
}
thead tr th {
: none;
}

.cell {
flex: 1;
background:#eee;
border: 1px solid #444;
padding: 15px;
}
.row .rowspan2 {
flex: 1 1 100%;
}

tr th.putih{
background: #ffffff
}

tr td {
  align-content: center;
  text-align: center;
}

tr td.bold {
  border:solid black;
}
tbody tr td.bold {
  border:solid black;
}
</style>

<script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>

<script>
  $(function() {
      $('[data-toggle="popover"]').popover();
  });
</script>

<div class="modal fade" id="caradownload" tabindex="-1" aria-labelledby="caradownloadlabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="caradownloadlabel">Cara Download PDF</h5>
      </div>
      <div class="modal-body">
       Klik Print Document > Pilih Destination > Save as PDF > pilih Save
       <img src="{{ asset('dist/img/imagesdownload.png') }}" width="100%" height="100%" alt="image_download">
      </div>
    </div>
  </div>
</div>