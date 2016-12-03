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
			<div class="panel-heading">Asset Type</div>
			<div class="panel-body" id="data">
				<table class="table table-striped table-bordered">
					<tr>
						<th>ID</th>
						<th>Amount</th>
						<th>AssetType ID</th>
						<th>FamilyDetails ID</th>
						<th>Actions</th>
					</tr>
					<?php foreach($assetsinfo as $A){ ?>
					<tr>
						<td><?php echo $A['ID']; ?></td>
						<td><?php echo $A['Amount']; ?></td>
						<td><?php echo $A['AssetType_ID']; ?></td>
						<td><?php echo $A['FamilyDetails_ID']; ?></td>
						<td>
							<a href="<?php echo site_url('assetsinfo/edit/'.$A['ID']); ?>" class="btn btn-info">Edit</a> 
							<a href="<?php echo site_url('assetsinfo/remove/'.$A['ID']); ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</table>
				<div class="pull-right">
					<a href="<?php echo site_url('assetsinfo/add'); ?>" class="btn btn-success">Add</a> 
				</div>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">Expense Type</div>
			<div class="panel-body" id="data">

				<table class="table table-striped table-bordered">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Actions</th>
					</tr>
					<?php foreach($expensetype as $E){ ?>
					<tr>
						<td><?php echo $E['ID']; ?></td>
						<td><?php echo $E['Name']; ?></td>
						<td>
							<a href="<?php echo site_url('assetsinfo/edit_expense/'.$E['ID']); ?>" class="btn btn-info">Edit</a> 
							<a href="<?php echo site_url('assetsinfo/remove_expense/'.$E['ID']); ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</table>
				<div class="pull-right">
				<a href="<?php echo site_url('assetsinfo/add_expense'); ?>" class="btn btn-success">Add</a> 
				</div>
			</div>
		</div>
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