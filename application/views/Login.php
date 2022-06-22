<!doctype html>
<html class="fixed">

<head>

	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Login - Desa Kita</title>
	<meta name="keywords" content="Sistem Informasi Desa" />
	<meta name="description" content="Projek Sistem Pengelolaan Data Kelurahan">
	<meta name="author" content="codepedia">
	<link rel="icon" href="<?php echo base_url(); ?>assets/octopus/assets/images/logo-desa.png" sizes="16x16" type="image/png">
	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<!-- Web Fonts  -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

	<!-- Specific Page Vendor CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/vendor/morris/morris.css" />

	<!-- Theme CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/octopus/assets/stylesheets/theme-custom.css">

	<!-- Head Libs -->
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/modernizr/modernizr.js"></script>


</head>

<body>
	<!-- start: page -->
	<section class="body-sign">
		<div class="center-sign">
			<a href="<?php echo base_url(); ?>" class="logo pull-left">
				<img src="<?php echo base_url(); ?>assets/octopus/assets/images/logo-1.png" width="110%" alt="Desa Kita Login" />
			</a>
			<div class="panel panel-sign">
				<div class="panel-title-sign mt-xl text-right">
					<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> LOGIN SYSTEM</h2>
				</div>
				<div class="panel-body">
					<form action="<?php echo base_url(); ?>login/getLogin" method="post">
						<div class="form-group mb-lg">
							<label>Masukan Username/KK/KTP</label>
							<div class="input-group input-group-icon">
								<input name="username" type="text" class="form-control input-lg" />
								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-user"></i>
									</span>
								</span>
							</div>
						</div>

						<div class="form-group mb-lg">
							<div class="clearfix">
								<label class="pull-left">Kata Sandi</label>
							</div>
							<div class="input-group input-group-icon">
								<input name="password" type="password" class="form-control input-lg" />
								<span class="input-group-addon">
									<span class="icon icon-lg">
										<i class="fa fa-lock"></i>
									</span>
								</span>
							</div>
						</div>

						<div class="row">
							<!--
								<div class="col-sm-4">
								
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Ingat Kata Sandi</label>
									</div>
								
								</div>
								-->
							<div class="text-center">
								<button type="submit" class="btn btn-primary hidden-xs">Masuk</button>
								<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Masuk</button>
							</div>
						</div>

						<span class="mt-lg mb-lg line-thru text-center text-uppercase">
							<span>atau</span>
						</span>

						<p class="text-center">Kunjungi Website Kami <a href="<?= base_url('homepage') ?>">Kelurahan Bulustalan</a>

					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- end: page -->

	<!-- Vendor -->
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/magnific-popup/magnific-popup.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

	<!-- Specific Page Vendor -->
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-appear/jquery.appear.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.pie.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.categories.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/flot/jquery.flot.resize.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/raphael/raphael.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/morris/morris.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/gauge/gauge.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/snap-svg/snap.svg.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/liquid-meter/liquid.meter.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/jquery.vmap.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
	<script src="<?php echo base_url(); ?>assets/octopus/assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/theme.js"></script>

	<!-- Theme Custom -->
	<script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/theme.custom.js"></script>

	<!-- Theme Initialization Files -->
	<script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/theme.init.js"></script>


	<!-- Examples -->
	<script src="<?php echo base_url(); ?>assets/octopus/assets/javascripts/dashboard/examples.dashboard.js"></script>

</body>

</html>