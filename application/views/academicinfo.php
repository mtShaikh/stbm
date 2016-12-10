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
		function checkNew(val){
			var element = document.getElementById('new');
			var element2 = document.getElementById('newc');
			if(val=='sother'){
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
		<?php echo form_open('academicdetail/edit',array("class"=>"form-horizontal")); ?>
		<div class="row"><h2 class="text-center">Academic Information</h2></div>
		<div class="row"><h5 class="text-center">School Details</h5></div>
		<br>
		<div class="row">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="School" class="col-md-4 control-label">School Name</label>
					<div class="col-md-4">
						<select name="School" id="School" class="form-control" onchange="checkNew(this.value)">
							<option value="">Select Institution</option>
							<?php 
							foreach($all_institution as $institution)
							{
								$selected = ($institution['Name'] == $school['Name']) ? ' selected="selected"' : null;
								if($institution['Type']=='School')
									echo '<option value="'.$institution['ID'].'" '.$selected.'>'.$institution['Name'].'</option>';
							} 
							?>
							<option value="sother">Other</option>
						</select>
					</div>
				</div>	
				<div class="form-group center-block">
					<div class="col-md-4"></div>
					<div class="col-md-2">
						<input placeholder="School Name" type="text" class="form-control" name="newschool" id="new" style="display: none;">
					</div>
					<div class="col-md-2">
						<input placeholder="City" type="text" class="form-control" name="newcity" id="newc" style="display: none;">
					</div>
				</div>
				<div class="form-group">
				<label for="sPercentage" class="col-md-4 control-label">Percentage</label>
					<div class="col-md-4">
						<input type="text" name="sPercentage" value="<?php echo ($this->input->post('sPercentage') ? $this->input->post('sPercentage') : $school['Percentage']); ?>" class="form-control" id="sPercentage" />
					</div>
				</div>
				<!-- <div class="form-group">
					<label for="FieldOfStudy" class="col-md-4 control-label">Field</label>
					<div class="col-md-4">
						<input type="text" name="FieldOfStudy" value="<//?php echo ($this->input->post('FieldOfStudy') ? $this->input->post('FieldOfStudy') : $academicdetail['FieldOfStudy']); ?>" class="form-control" id="FieldOfStudy" />
					</div>
				</div> -->
				<div class="row text-center">
					<button type="submit" name="sbm" value="clg" class="btn btn-info">College Details</button>
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
	</div>
	<?php form_close(); ?>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
