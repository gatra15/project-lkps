<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LKPS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <script src="https://kit.fontawesome.com/86db3691af.js" crossorigin="anonymous"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous" rel="stylesheet">

  <style>
		.heading{
		  text-align: center;
		  color: #2F8D46;
		}
    table.table-bordered{
      border:1px solid black;
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

	</style>

</head>

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- Html2Pdf -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js" integrity="sha512vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A==" crossorigin="anonymous"></script>

<script>
  (function () {
      var
       form = $('.form'),
       cache_width = form.width(),
       a4 = [595.28, 841.89]; // for a4 size paper width and height

      $('#create_pdf').on('click', function () {
          $('body').scrollTop(0);
          createPDF();
      });
      //create pdf
      function createPDF() {
          getCanvas().then(function (canvas) {
              var
               img = canvas.toDataURL("image/png"),
               doc = new jsPDF({
                   unit: 'px',
                   format: 'a4'
               });
              doc.addImage(img, 'JPEG', 20, 20);
              doc.save('bhavdip-html-to-pdf.pdf');
              form.width(cache_width);
          });
      }

      // create canvas object
      function getCanvas() {
          form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
          return html2canvas(form, {
              imageTimeout: 2000,
              removeContainer: true
          });
      }

  }());
</script>
<script>
  (function ($) {
      $.fn.html2canvas = function (options) {
          var date = new Date(),
          $message = null,
          timeoutTimer = false,
          timer = date.getTime();
          html2canvas.logging = options && options.logging;
          html2canvas.Preload(this[0], $.extend({
              complete: function (images) {
                  var queue = html2canvas.Parse(this[0], images, options),
                  $canvas = $(html2canvas.Renderer(queue, options)),
                  finishTime = new Date();

                  $canvas.css({ position: 'absolute', left: 0, top: 0 }).appendTo(document.body);
                  $canvas.siblings().toggle();

                  $(window).click(function () {
                      if (!$canvas.is(':visible')) {
                          $canvas.toggle().siblings().toggle();
                          throwMessage("Canvas Render visible");
                      } else {
                          $canvas.siblings().toggle();
                          $canvas.toggle();
                          throwMessage("Canvas Render hidden");
                      }
                  });
                  throwMessage('Screenshot created in ' + ((finishTime.getTime() - timer) / 1000) + " seconds<br />", 4000);
              }
          }, options));

          function throwMessage(msg, duration) {
              window.clearTimeout(timeoutTimer);
              timeoutTimer = window.setTimeout(function () {
                  $message.fadeOut(function () {
                      $message.remove();
                  });
              }, duration || 2000);
              if ($message)
                  $message.remove();
              $message = $('<div ></div>').html(msg).css({
                  margin: 0,
                  padding: 10,
                  background: "#000",
                  opacity: 0.7,
                  position: "fixed",
                  top: 10,
                  right: 10,
                  fontFamily: 'Tahoma',
                  color: '#fff',
                  fontSize: 12,
                  borderRadius: 12,
                  width: 'auto',
                  height: 'auto',
                  textAlign: 'center',
                  textDecoration: 'none'
              }).hide().fadeIn().appendTo('body');
          }
      };
  })(jQuery);
</script>

<script>
  (function () {
      var
       form = $('.form'),
       cache_width = form.width(),
       a4 = [595.28, 841.89]; // for a4 size paper width and height

      $('#create_pdf').on('click', function () {
          $('body').scrollTop(0);
          createPDF();
      });
      //create pdf
      function createPDF() {
          getCanvas().then(function (canvas) {
              var
               img = canvas.toDataURL("image/png"),
               doc = new jsPDF({
                   unit: 'px',
                   format: 'a4'
               });
              doc.addImage(img, 'JPEG', 20, 20);
              doc.save('bhavdip-html-to-pdf.pdf');
              form.width(cache_width);
          });
      }

      // create canvas object
      function getCanvas() {
          form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
          return html2canvas(form, {
              imageTimeout: 2000,
              removeContainer: true
          });
      }

  }());
</script>


<script src=
"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
  integrity=
"sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
  crossorigin="anonymous">
</script>
<script>
  $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').trigger('focus')
  })
</script>
<script>
// display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href
            , beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            }
            , complete: function() {
                $('#loader').hide();
            }
            , error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            }
            , timeout: 8000
        })
    });
</script>

<!-- Html2Pdf -->
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.1/html2pdf.bundle.min.js"
		integrity=
"sha512vDKWohFHe2vkVWXHp3tKvIxxXg0pJxeid5eo+UjdjME3DBFBn2F8yWOE0XmiFcFbXxrEOR1JriWEno5Ckpn15A=="
		crossorigin="anonymous">
	</script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
</html>