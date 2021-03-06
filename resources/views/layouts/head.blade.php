<!doctype html>
<html lang="en">
  <head>
  	<title>Welcome To! LKPS Web</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
	
	<link rel="stylesheet" href="css/style.css">
  </head>

  <style>
    html {
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      
    }

    body {
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-image: linear-gradient(96deg,rgba(20, 20, 20, 0.4) 20%,rgba(0,0,0,0) 100%), url({{ asset('dist/img/background3.jpg') }});
    }
    
  </style>

  <body>
    <div>
        @yield('container')
    </div>
	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>