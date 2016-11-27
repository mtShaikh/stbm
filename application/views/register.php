<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms</title>

	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<header>
		<h1 class="text-center page-header">Scholarship Portal</h1>
	</header>
	<br>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Register</div>
				<div class="panel-body">
					<!--form role="form"-->
					<?php 
					if($this->session->flashdata('fail')){
						echo $this->session->flashdata('fail');
						echo '<br>';
					}
					else echo '<p>Enter Email and Password to register</p>';
					?>
					<br>
					<?php echo validation_errors(); ?>
					<?php echo form_open('verifylogin/registration'); ?>
					<fieldset>
						<div class="form-group" for="email">
							<input class="form-control" placeholder="E-mail" name="email" id="email" autofocus="">
						</div>
						<div class="form-group" for="password">
							<input class="form-control" placeholder="Password" name="password" id="passowrd" type="password" value="">
						</div>
						<div class="text-center">
							<input class="btn btn-primary" type="submit" value="Submit"/>
						</div>
					</fieldset>
				</div>
				<div class="panel-footer">Already Registered? <a href="<?php echo site_url('login')?>">Click Here to Login</a></div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
	<a href="home"><h4 class="text-center">HOME</h4></a>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
	<script>
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
