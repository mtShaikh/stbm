<?php echo validation_errors(); ?>
<?php echo form_open('persondetail/edit/'.$persondetail['ID'],array("class"=>"form-horizontal")); ?>
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
	<?php include(dirname(__DIR__)."/nav.php"); ?>
	<div id="sidebar-collapse" class="col-sm-3 col-md-2 sidebar">
		<?php include(dirname(__DIR__)."/sidebar.php"); ?>
		</div>
		<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
			<div class="form-group">
				<label for="FName" class="col-md-4 control-label">FName</label>
				<div class="col-md-8">
					<input type="text" name="FName" value="<?php echo ($this->input->post('FName') ? $this->input->post('FName') : $persondetail['FName']); ?>" class="form-control" id="FName" />
				</div>
			</div>
			<div class="form-group">
				<label for="LName" class="col-md-4 control-label">LName</label>
				<div class="col-md-8">
					<input type="text" name="LName" value="<?php echo ($this->input->post('LName') ? $this->input->post('LName') : $persondetail['LName']); ?>" class="form-control" id="LName" />
				</div>
			</div>
			<div class="form-group">
				<label for="DateOfBirth" class="col-md-4 control-label">DateOfBirth</label>
				<div class="col-md-8">
					<input type="text" name="DateOfBirth" value="<?php echo ($this->input->post('DateOfBirth') ? $this->input->post('DateOfBirth') : $persondetail['DateOfBirth']); ?>" class="form-control" id="DateOfBirth" />
				</div>
			</div>
			<div class="form-group">
				<label for="Email" class="col-md-4 control-label">Email</label>
				<div class="col-md-8">
					<input type="text" name="Email" value="<?php echo ($this->input->post('Email') ? $this->input->post('Email') : $persondetail['Email']); ?>" class="form-control" id="Email" />
				</div>
			</div>
			<div class="form-group">
				<label for="CNIC" class="col-md-4 control-label">CNIC</label>
				<div class="col-md-8">
					<input type="text" name="CNIC" value="<?php echo ($this->input->post('CNIC') ? $this->input->post('CNIC') : $persondetail['CNIC']); ?>" class="form-control" id="CNIC" />
				</div>
			</div>
			<div class="form-group">
				<label for="Phone" class="col-md-4 control-label">Phone</label>
				<div class="col-md-8">
					<input type="text" name="Phone" value="<?php echo ($this->input->post('Phone') ? $this->input->post('Phone') : $persondetail['Phone']); ?>" class="form-control" id="Phone" />
				</div>
			</div>
			<div class="form-group">
				<label for="Address" class="col-md-4 control-label">Address</label>
				<div class="col-md-8">
					<input type="text" name="Address" value="<?php echo ($this->input->post('Address') ? $this->input->post('Address') : $persondetail['Address']); ?>" class="form-control" id="Address" />
				</div>
			</div>
			<div class="form-group">
				<label for="City" class="col-md-4 control-label">City</label>
				<div class="col-md-8">
					<input type="text" name="City" value="<?php echo ($this->input->post('City') ? $this->input->post('City') : $persondetail['City']); ?>" class="form-control" id="City" />
				</div>
			</div>
			<div class="form-group">
				<label for="District" class="col-md-4 control-label">District</label>
				<div class="col-md-8">
					<input type="text" name="District" value="<?php echo ($this->input->post('District') ? $this->input->post('District') : $persondetail['District']); ?>" class="form-control" id="District" />
				</div>
			</div>
			<div class="form-group">
				<label for="Status" class="col-md-4 control-label">Status</label>
				<div class="col-md-8">
				<input type="text" name="Status" value="<?php echo ($this->input->post('Status') ? $this->input->post('Status') : $persondetail['Status']); ?>" class="form-control" id="Status" />

				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<button type="submit" class="btn btn-success">Save</button>
				</div>
			</div>	
			<?php echo form_close(); ?>
		</div>

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