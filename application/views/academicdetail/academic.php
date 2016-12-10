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
		<div class="panel panel-default">
			<div class="panel-heading">Applicants' Academic Details</div>
			<div class="panel-body" id="data">

				<table class="table table-striped table-bordered">
					<tr>
						<th>FName</th>
						<th>LName</th>
						<th>Percentage</th>
						<th>Institution</th>
					</tr>
					<?php foreach($academicdetails as $A){ ?>
					<tr>
						<td><?php echo $A['FName']; ?></td>
						<td><?php echo $A['LName']; ?></td>
						<td><?php echo $A['Percentage']; ?></td>
						<td><?php echo $A['Name']; ?></td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
		<div class="pull-right">
			<a href="<?php echo site_url('admin/dash'); ?>" class="btn btn-success">Back</a> 
		</div>
		<?php include(dirname(__DIR__).'/familydetail/familydetail.php');?>
	</div>

	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/chart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/easypiechart.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/easypiechart-data.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
