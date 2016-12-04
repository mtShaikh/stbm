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
		<?php echo form_open('user_c/addacademicdinfo/'.$mail,array("class"=>"form-horizontal")); ?>
		<div class="row"><h2 class="text-center">Academic Information</h2></div>
		<br>
		<div class="row">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="SName" class="col-md-4 control-label">School Name</label>
					<div class="col-md-4">
						<!-- <input type="text" name="SName" value="<//?php echo $this->input->post('SName'); ?>" class="form-control" id="SName" /> -->
						<select name="SName" class="form-control">
							<?php 
							$array = array_values($enm);
							foreach ($array as $v1) {
								echo "<option>" .$v1."</option>";
							}
							?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="Percentage" class="col-md-4 control-label">Percentage</label>
					<div class="col-md-4">
						<input type="text" name="Percentage" value="<?php echo ($this->input->post('Percentage') ? $this->input->post('Percentage') : $academicdetail['Percentage']); ?>" class="form-control" id="Percentage" />
					</div>
				</div>
				<div class="form-group">
					<label for="CName" class="col-md-4 control-label">College Name</label>
					<div class="col-md-4">
						<input type="text" name="CName" value="<?php echo $this->input->post('CName'); ?>" class="form-control" id="CName" />
					</div>
				</div>
				<div class="form-group">
					<label for="Percentage" class="col-md-4 control-label">Percentage</label>
					<div class="col-md-4">
						<input type="text" name="Percentage" value="<?php echo ($this->input->post('Percentage') ? $this->input->post('Percentage') : $academicdetail['Percentage']); ?>" class="form-control" id="Percentage" />
					</div>
				</div>
				<div class="form-group">
					<label for="FieldOfStudy" class="col-md-4 control-label">Field</label>
					<div class="col-md-4">
						<input type="text" name="FieldOfStudy" value="<?php echo ($this->input->post('FieldOfStudy') ? $this->input->post('FieldOfStudy') : $academicdetail['FieldOfStudy']); ?>" class="form-control" id="FieldOfStudy" />
					</div>
				</div>
				
				<div class="form-group">
					<div class="row">
						
					</div>
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-3">
							<button type="submit" class="btn btn-success btn-lg">Back</button>	
						</div>
						<div class="col-md-3">
							<button type="submit" class="btn btn-success btn-lg">Next</button>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php form_close(); ?>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
