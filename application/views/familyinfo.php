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
		<?php echo form_open('familydetail/edit/',array("class"=>"form-horizontal")); ?>
		<div class="row"><h2 class="text-center">Family Information</h2></div>
		<br>
		<div class="row">
			<div class="form-horizontal">	
				
				<div class="form-group">
					<label for="Income" class="col-md-4 control-label">Income</label>
					<div class="col-md-4">
						<input type="text" name="Income" value="<?php echo ($this->input->post('Income') ? $this->input->post('Income') : $familydetail['Income']); ?>" class="form-control" id="Income" />
					</div>
				</div>
				<div class="form-group">
					<label for="NoOfSiblings" class="col-md-4 control-label">Number Of Siblings</label>
					<div class="col-md-4">
						<input type="text" name="NoOfSiblings" value="<?php echo ($this->input->post('NoOfSiblings') ? $this->input->post('NoOfSiblings') : $familydetail['NoOfSiblings']); ?>" class="form-control" id="NoOfSiblings" />
					</div>
				</div>
				<div class="form-group">
					<label for="FName" class="col-md-4 control-label">First Name</label>
					<div class="col-md-4">
						<input type="text" name="FName" value="<?php echo ($this->input->post('FName') ? $this->input->post('FName') : $familydetail['FName']); ?>" class="form-control" id="FName" />
					</div>
				</div>
				<div class="form-group">
					<label for="LName" class="col-md-4 control-label">Last Name</label>
					<div class="col-md-4">
						<input type="text" name="LName" value="<?php echo ($this->input->post('LName') ? $this->input->post('LName') : $familydetail['LName']); ?>" class="form-control" id="LName" />
					</div>
				</div>
				<div class="form-group">
					<label for="PhoneNo" class="col-md-4 control-label">PhoneNo</label>
					<div class="col-md-4">
						<input type="text" name="PhoneNo" value="<?php echo ($this->input->post('PhoneNo') ? $this->input->post('PhoneNo') : $familydetail['PhoneNo']); ?>" class="form-control" id="PhoneNo" />
					</div>
				</div>
				<div class="form-group">
					<label for="CNIC" class="col-md-4 control-label">CNIC</label>
					<div class="col-md-4">
						<input type="text" name="CNIC" value="<?php echo ($this->input->post('CNIC') ? $this->input->post('CNIC') : $familydetail['CNIC']); ?>" class="form-control" id="CNIC" />
					</div>
				</div>
				<div class="form-group">
					<label for="Designation" class="col-md-4 control-label">Designation</label>
					<div class="col-md-4">
						<input type="text" name="Designation" value="<?php echo ($this->input->post('Designation') ? $this->input->post('Designation') : $familydetail['Designation']); ?>" class="form-control" id="Designation" />
					</div>
				</div>
				<div class="form-group">
					<label for="Company" class="col-md-4 control-label">Company</label>
					<div class="col-md-4">
						<input type="text" name="Company" value="<?php echo ($this->input->post('Company') ? $this->input->post('Company') : $familydetail['Company']); ?>" class="form-control" id="Company" />
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
		</div>
		<?php echo form_close(); ?>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
