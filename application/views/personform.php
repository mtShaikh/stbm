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
		<?php echo validation_errors(); ?>
		<?php echo form_open('persondetail/edit/',array("class"=>"form-horizontal")); ?>
		<div class="row"><h2 class="text-center">Personal Information</h2></div>
		<br>
		<div class="row">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="FName" class="col-md-4 control-label">First Name</label>
					<div class="col-md-4">
						<input type="text" name="FName" value="<?php echo ($this->input->post('FName') ? $this->input->post('FName') : $persondetail['FName']); ?>" class="form-control" id="FName" />
					</div>
				</div>
				<div class="form-group">
					<label for="LName" class="col-md-4 control-label">Last Name</label>
					<div class="col-md-4">
						<input type="text" name="LName" value="<?php echo ($this->input->post('LName') ? $this->input->post('LName') : $persondetail['LName']); ?>" class="form-control" id="LName" />
					</div>
				</div>
				<div class="form-group">
					<label for="DateOfBirth" class="col-md-4 control-label">Date Of Birth</label>
					<div class="col-md-4">
						<input type="text" name="DateOfBirth" value="<?php echo ($this->input->post('DateOfBirth') ? $this->input->post('DateOfBirth') : $persondetail['DateOfBirth']); ?>" class="form-control" id="DateOfBirth" />
					</div>
				</div>
				<div class="form-group">
					<label for="Email" class="col-md-4 control-label">Email</label>
					<div class="col-md-4">
						<input type="text" name="Email" value="<?php echo ($this->input->post('Email') ? $this->input->post('Email') : $persondetail['Email']); ?>" class="form-control" id="Email" />
					</div>
				</div>
				<div class="form-group">
					<label for="CNIC" class="col-md-4 control-label">CNIC</label>
					<div class="col-md-4">
						<input type="text" name="CNIC" value="<?php echo ($this->input->post('CNIC') ? $this->input->post('CNIC') : $persondetail['CNIC']); ?>" class="form-control" id="CNIC" />
					</div>
				</div>
				<div class="form-group">
					<label for="Phone" class="col-md-4 control-label">Phone</label>
					<div class="col-md-4">
						<input type="text" name="Phone" value="<?php echo ($this->input->post('Phone') ? $this->input->post('Phone') : $persondetail['Phone']); ?>" class="form-control" id="Phone" />
					</div>
				</div>
				<div class="form-group">
					<label for="Address" class="col-md-4 control-label">Address</label>
					<div class="col-md-4">
						<textarea name="Address" rows="5" cols="47" value=<?php echo ($this->input->post('Address') ? $this->input->post('Address') : $persondetail['Address']); ?>" class="form-control" id="Address"></textarea>  
					</div>
				</div>
				<div class="form-group">
					<label for="City" class="col-md-4 control-label">City</label>
					<div class="col-md-4">
						<input type="text" name="City" value="<?php echo ($this->input->post('City') ? $this->input->post('City') : $persondetail['City']); ?>" class="form-control" id="City" />
					</div>
				</div>
				<div class="form-group">
					<label for="District" class="col-md-4 control-label">District</label>
					<div class="col-md-4">
						<input type="text" name="District" value="<?php echo ($this->input->post('District') ? $this->input->post('District') : $persondetail['District']); ?>" class="form-control" id="District" />
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-3">
							<a href="<?php echo site_url('user_c/applications')?>" class="btn btn-success btn-lg">Back</a>	
						</div>
						<div class="col-md-3">
							<button type="submit" class="btn btn-success btn-lg">Next</button>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php echo form_close(); ?>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>