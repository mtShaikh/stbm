<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
	<!--Icons-->
	<script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>
	<!--web-fonts-->'
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<!--js-->
</head>

<body>
	<?php include("nav.php"); ?>
	<div id="sidebar-collapse" class="col-sm-3 col-md-2 sidebar">
		<br>
		<?php include("usidebar.php"); ?>
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row"><h2 class="text-center">Personal reference</h2></div>
		<br>
		<div class="row">
			<div class="form-horizontal">
				<?php echo validation_errors(); ?>
				<?php echo form_open('personalreference/edit/',array("class"=>"form-horizontal")); ?>

				<div class="form-group">
					<label for="Name" class="col-md-4 control-label">Name</label>
					<div class="col-md-4">
						<input type="text" name="Name" value="<?php echo ($this->input->post('Name') ? $this->input->post('Name') : $personalreference['Name']); ?>" class="form-control" id="Name" />
					</div>
				</div>
				<div class="form-group">
					<label for="PhoneNo" class="col-md-4 control-label">PhoneNo</label>
					<div class="col-md-4">
						<input type="text" name="PhoneNo" value="<?php echo ($this->input->post('PhoneNo') ? $this->input->post('PhoneNo') : $personalreference['PhoneNo']); ?>" class="form-control" id="PhoneNo" />
					</div>
				</div>
				<div class="form-group">
					<label for="Email" class="col-md-4 control-label">Email</label>
					<div class="col-md-4">
						<input type="text" name="Email" value="<?php echo ($this->input->post('Email') ? $this->input->post('Email') : $personalreference['Email']); ?>" class="form-control" id="Email" />
					</div>
				</div>
				<div class="form-group">
					<label for="Relationship" class="col-md-4 control-label">Relationship</label>
					<div class="col-md-4">
						<input type="text" name="Relationship" value="<?php echo ($this->input->post('Relationship') ? $this->input->post('Relationship') : $personalreference['Relationship']); ?>" class="form-control" id="Relationship" />
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-3">
							<button type="submit" name="sbm" value="back" class="btn btn-success btn-lg">Back</button>	
						</div>
						<div class="col-md-3">
							<button type="submit" name="sbm" value="next" class="btn btn-success btn-lg">Next</button>		
						</div>
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
