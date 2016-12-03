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
	<br>
<?php echo form_open('institution/edit/'.$institution['ID'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="Name" value="<?php echo ($this->input->post('Name') ? $this->input->post('Name') : $institution['Name']); ?>" class="form-control" id="Name" />
		</div>
	</div>
	<div class="form-group">
		<label for="Address" class="col-md-4 control-label">Address</label>
		<div class="col-md-8">
			<textarea name="Address"><?php echo ($this->input->post('Address') ? $this->input->post('Address') : $institution['Address']); ?></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="City" class="col-md-4 control-label">City</label>
		<div class="col-md-8">
			<input type="text" name="City" value="<?php echo ($this->input->post('City') ? $this->input->post('City') : $institution['City']); ?>" class="form-control" id="City" />
		</div>
	</div>
	<div class="form-group">
		<label for="Type" class="col-md-4 control-label">Type</label>
		<div class="col-md-8">
			<input type="text" name="Type" value="<?php echo ($this->input->post('Type') ? $this->input->post('Type') : $institution['Type']); ?>" class="form-control" id="Type" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>