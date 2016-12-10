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
		<?php echo form_open('assetsinfo/edit/',array("class"=>"form-horizontal")); ?>
		<div class="row"><h2 class="text-center">Assets</h2></div>
		<div class="row"><h4 class="text-center">please mention current market values in rupees</h4></div>
		<br>
		<div class="row">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="assetsinfo1" class="col-md-4 control-label">Plot/House</label>
					<div class="col-md-4">
						<input type="text" name="assetsinfo1" value="<?php echo ($this->input->post('assetsinfo1') ? $this->input->post('assetsinfo1') : $assetsinfo1['amount']); ?>" class="form-control" id="assetsinfo1" />
					</div>
				</div>
				<div class="form-group">
					<label for="assetsinfo2" class="col-md-4 control-label">Business</label>
					<div class="col-md-4">
						<input type="text" name="assetsinfo2" value="<?php echo ($this->input->post('assetsinfo2') ? $this->input->post('assetsinfo2') : $assetsinfo2['amount']); ?>" class="form-control" id="assetsinfo2" />
					</div>
				</div>
				<div class="form-group">
					<label for="assetsinfo3" class="col-md-4 control-label">Investments</label>
					<div class="col-md-4">
						<input type="text" name="assetsinfo3" value="<?php echo ($this->input->post('assetsinfo3') ? $this->input->post('assetsinfo3') : $assetsinfo3['amount']); ?>" class="form-control" id="assetsinfo3" />
					</div>
				</div>

				<div class="form-group">
					<label for="assetsinfo4" class="col-md-4 control-label">Vehicle</label>
					<div class="col-md-4">
						<input type="text" name="assetsinfo4" value="<?php echo ($this->input->post('assetsinfo4') ? $this->input->post('assetsinfo4') : $assetsinfo4['amount']); ?>" class="form-control" id="assetsinfo4" />
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
	</div>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
