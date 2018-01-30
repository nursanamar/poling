<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Poling : Pembangunan</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url()."assets/img/"; ?>favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url()."assets/img/"; ?>favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="<?php echo base_url()."assets/img/"; ?>favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo base_url()."assets/img/"; ?>favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php echo base_url()."assets/img/"; ?>favicons/manifest.json">
	<link rel="shortcut icon" href="<?php echo base_url()."assets/img/"; ?>favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="<?php echo base_url()."assets/img/"; ?>favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/"; ?>normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/"; ?>bootstrap.css">
		<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/"; ?>owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/"; ?>animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/fonts/"; ?>font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/fonts/"; ?>eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/"; ?>cardio.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/"; ?>dataTables.bootstrap.css">
</head>

<body>
	<div class="preloader">
		<img src="<?php echo base_url()."assets/img/"; ?>loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- <a class="navbar-brand" href="#"><img src="<?php echo base_url()."assets/img/"; ?>logo.png" data-active-url="<?php echo base_url()."assets/img/"; ?>logo-active.png" alt=""></a> -->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Intro</a></li>
					<li><a href="#services">Vote</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Poling Pembangunan</h3>
							<h1 class="white typed">Selamat datang di website poling</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
  <section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Daftar Poling</h2>
				<h4 class="light muted">Daftar Poling Pembangunan Yang Tersedia</h4>
        <p>Silahkan Klik link poling yang ingin anda ikuti,Untuk melakukan vote anda harus menberikan izin untuk akses lokasi dan jangan melakukan vote di jaringan yang di pake bersama(wifi,kantor,sekolah,dll)</p>
      </div>
			<div class="row services">
        <table id="vote" class="table table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Deskripsi</th>
              <th>Kabupaten</th>
              <th>Total vote</th>
              <th>Link</th>
            </tr>
          </thead>
          <tbody>

          </tbody>
        </table>
			</div>
		</div>
	</section>
  <footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2018</p>
				</div>
				<div id="demo">

				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><i class="fa fa-facebook"></i></li>
						<li><i class="fa fa-twitter"></i></li>
						<li><i class="fa fa-google-plus"></i></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

  <script src="<?php echo base_url()."assets/js/"; ?>jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url()."assets/js/"; ?>owl.carousel.min.js"></script>
  <script src="<?php echo base_url()."assets/js/"; ?>bootstrap.min.js"></script>
  <script src="<?php echo base_url()."assets/js/"; ?>wow.min.js"></script>
  <script src="<?php echo base_url()."assets/js/"; ?>typewriter.js"></script>
  <script src="<?php echo base_url()."assets/js/"; ?>jquery.dataTables.js"></script>
  <script src="<?php echo base_url()."assets/js/"; ?>dataTables.bootstrap.js"></script>
  <script src="<?php echo base_url()."assets/js/"; ?>jquery.onepagenav.js"></script>
  <script src="<?php echo base_url()."assets/js/"; ?>main.js"></script>
</body>
<script type="text/javascript">
var conn = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
console.log(conn);
  $(document).ready(function(){
    $('#vote').DataTable({
      "processing": true,
      "serverSide": true,
      "ajax": {
      	'url': '<?php echo base_url()."tableVote" ?>',
      	'type': 'POST',
      },
      "columns": [
        {data : 'nama'},
        {data : 'description'},
        {data : 'kabupaten'},
        {data : 'total'},
        {data : 'link'}
       ]
    });
  });
</script>

</html>
