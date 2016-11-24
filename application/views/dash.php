<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

	<!--Icons-->
	<script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php include("nav.php"); ?>
	<div id="sidebar-collapse" class="col-sm-3 col-md-2 sidebar">
	<?php include("sidebar.php");?>
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">120</div>
							<div class="text-muted">Applicants</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">5</div>
							<div class="text-muted">Sponsors/Donors</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">24</div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-info">
					<div class="panel-heading">
						Latest Applicant
					</div>
					<div class="panel-body">
						<p>Lorem ipsum dolor sit amet, c
							onsectetur adipiscing elit. Pellentesque ut ante in sapien b
							landit luctus sed ut lacus. Phasellus urna est, faucibus nec ultrices p
							lacerat, feugiat et ligula. Donec vestibulum magna a dui pharetra
							molestie. Fusce et dui urna.</p>
							<button type="submit" class="btn btn-primary ">Accept</button>
							<button type="submit" class="btn btn-danger pull-right">Accept</button>
						</div>
					</div>
				</div><!--/.col-->
				<div class="col-md-6">
					<div class="panel panel-info">
						<div class="panel-heading">
							Latest Applicant
						</div>
						<div class="panel-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								Pellentesque ut ante in sapien blandit luctus sed ut lacus.
								Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula.
								Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</p>
								<button type="submit" class="btn btn-primary ">Accept</button>
								<button type="submit" class="btn btn-danger pull-right">Accept</button>
							</div>
						</div>
					</div><!--/.col-->
				</div><!--/.row-->
				<div class="row">
					<div class="col-md-6">
						<div class="panel panel-info">
							<div class="panel-heading">
								Latest Applicant
							</div>
							<div class="panel-body">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
									Pellentesque ut ante in sapien blandit luctus sed ut lacus.
									Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula.
									Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</p>
									<button type="submit" class="btn btn-primary ">Accept</button>
									<button type="submit" class="btn btn-danger pull-right">Accept</button>
								</div>
							</div>
						</div><!--/.col-->
						<div class="col-md-6">
							<div class="panel panel-info">
								<div class="panel-heading">
									Latest Applicant
								</div>
								<div class="panel-body">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
										Pellentesque ut ante in sapien blandit luctus sed ut lacus.
										Phasellus urna est, faucibus nec ultrices placerat, feugiat et ligula.
										Donec vestibulum magna a dui pharetra molestie. Fusce et dui urna.</p>
										<button type="submit" class="btn btn-primary ">Accept</button>
										<button type="submit" class="btn btn-danger pull-right">Accept</button>
									</div>
								</div>
							</div><!--/.col-->
						</div>
					</div>	<!--/.main-->


					<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
					<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
					<script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
					<script src="<?php echo base_url(); ?>assets/js/chart-data.js"></script>
					<script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
					<script src="<?php echo base_url(); ?>assets/js/easypiechart-data.js"></script>
					<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
					<script>
						$('#calendar').datepicker({
						});

						!function ($) {
							$(document).on("click","ul.nav li.parent > a > span.icon", function(){
								$(this).find('em:first').toggleClass("glyphicon-minus");
							});
							$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
						}(window.jQuery);

						$(window).on('resize', function () {
							if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
						})
						$(window).on('resize', function () {
							if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
						})
				</script>
			</body>

			</html>
