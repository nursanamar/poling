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
					<li><a href="#services">Hasil</a></li>
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
							<h1 class="white typed"><?php
								if ($status) {
									echo ($vote) ? "Menurut anda mana yang harus di bangun?": "Terima kasih karena telah berpartisipasi";
								}else{
									echo "Poling sudah ditutup";
								}
							 ?></h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<?php ($vote) ? $this->load->view('client\vote') : ""; ?>
	<section id="services" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Jumlah Vote</h2>
				<h4 class="light muted">Perolehan Vote sementara perkecamatan</h4>
			</div>
			<div class="row services">
				<?php $this->load->view('client/tabel') ?>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign Up</h3>
				<form action="" class="popup-form">
					<input type="text" class="form-control form-white" placeholder="Full Name">
					<input type="text" class="form-control form-white" placeholder="Email Address">
					<div class="dropdown">
						<button id="dLabel" class="form-control form-white dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pricing Plan
						</button>
						<ul class="dropdown-menu animated fadeIn" role="menu" aria-labelledby="dLabel">
							<li class="animated lightSpeedIn"><a href="#">1 month membership ($150)</a></li>
							<li class="animated lightSpeedIn"><a href="#">3 month membership ($350)</a></li>
							<li class="animated lightSpeedIn"><a href="#">1 year membership ($1000)</a></li>
							<li class="animated lightSpeedIn"><a href="#">Free trial class</a></li>
						</ul>
					</div>
					<div class="checkbox-holder text-left">
						<div class="checkbox">
							<input type="checkbox" value="None" id="squaredOne" name="check" />
							<label for="squaredOne"><span>I Agree to the <strong>Terms &amp; Conditions</strong></span></label>
						</div>
					</div>
					<button type="submit" class="btn btn-submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Lorem ipsum dolor sit amet</h3>
					<h5 class="light regular light-white">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</h5>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2017 reprehenderit in voluptate velit esse cillum dolore </p>
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
	<form id="makeVote" action="<?php echo base_url()."vote/".$idVote ?>" method="post">
		<input type="hidden" name="idOption">
		<input type="hidden" name="kecamatan">
		<input type="hidden" name="kabupaten">
	</form>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav" id="notsame">

	</div>

	<?php ($vote) ? $this->load->view('client\modal') : ""; ?>
	<div class="mobile-nav" id="nav-mobile">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
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
var sTable;
var kecamatan = 'a';
var kabupaten = 'a';


function vote(idVote) {
	$('input[name=idOption]').val(idVote);
	$('input[name=kecamatan]').val(kecamatan);
	$('input[name=kabupaten]').val(kabupaten);
	$('#makeVote').submit();
}

$(document).ready(function() {



	navigator.geolocation.getCurrentPosition(showPosition);
	function showPosition(position) {
		var lat = position.coords.latitude;
		var lon = position.coords.longitude;
		$.get('https://maps.googleapis.com/maps/api/geocode/json?latlng='+lat+','+lon+'1&components=administrative_area_level_2&language=id&result_type=administrative_area_level_3&key=AIzaSyB9gAn0rzglRCeE-q18BZyzMz_oNymbRvA',function(res){
			kecamatan = res.results[0].address_components[0].long_name;
			kabupaten = res.results[0].address_components[1].long_name;
			console.log(kecamatan,kabupaten);
			if (kabupaten === '<?php echo $kabupaten ?>') {
				console.log("assss");
			} else {
				$('#notsame').addClass('active');
			}
		});
	}


	$("#tableview").show();
	 sTable = $('#tableview').DataTable();
// 		 "aaSorting":[[0, "desc"]],
// "processing": true,
// "serverSide": true,
// "ajax": {
// 	'url': '<?php echo base_url()."adm/datatable/".$this->uri->segment(2); ?>',
// 	'type': 'POST',
// },
// "columns": [
// 	{data : 'kecamatan'},
	// < foreach ($data as $value) {
// 		echo "{data :'".$value['judul']."'},";
// 	} ?>
//
// ],
// });
});
</script>
</html>
