<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<!--Icons-->
	<script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>
	<script type="text/javascript">
		function checkClgNew(val){
			var element = document.getElementById('cnew');
			var element2 = document.getElementById('cnew1');
			if(val=='cother'){
				element.style.display='block';
				element2.style.display='block';
			}
			else  {
				element.style.display='none';
				element2.style.display='none';
			}
		}
	</script>
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
		<?php echo form_open('academicdetail/editclg',array("class"=>"form-horizontal")); ?>
		<div class="row"><h2 class="text-center">Academic Information</h2></div>
		<div class="row"><h5 class="text-center">College Details</h5></div>
		<br>
		<div class="row">
			<div class="form-horizontal">
					<div class="form-group">
						<label for="CName" class="col-md-4 control-label">College Name</label>
						<div class="col-md-4">
							<select name="CName" class="form-control" onchange="checkClgNew(this.value)">
								<option value="">Select Institution</option>
								<?php 
								foreach($all_institution as $institution)
								{
									$selected = ($institution['Name'] == $college['Name']) ? ' selected="selected"' : null;
									if($institution['Type']=='College')
										echo '<option value="'.$institution['ID'].'" '.$selected.'>'.$institution['Name'].'</option>';
								} 
								?>
								<option value="cother">Other</option>
							</select>
						</div>
					</div>

					<div class="form-group center-block">
						<div class="col-md-4"></div>
						<div class="col-md-2">
							<input placeholder="College Name" type="text" class="form-control" name="newcollege" id="cnew" style="display: none;">
						</div>
						<div class="col-md-2">
							<input placeholder="City" type="text" class="form-control" name="newclgcity" id="cnew1" style="display: none;">
						</div>
					</div>
					<div class="form-group">
						<label for="cPercentage" class="col-md-4 control-label">Percentage</label>
						<div class="col-md-4">
							<input type="text" name="cPercentage" value="<?php echo ($this->input->post('cPercentage') ? $this->input->post('cPercentage') : $college['Percentage']); ?>" class="form-control" id="cPercentage" />
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
					</div>
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
	<?php form_close(); ?>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
