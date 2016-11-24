<!DOCTYPE html>
<?php
ini_set('include_path', '/pear');
?>
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
		<?php include(dirname(__DIR__)."/sidebar.php");?>
	</div>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="panel panel-default">
		<div class="panel-heading">Students</div>
		<div class="panel-body">
			<table class="table table-striped table-bordered table-responsive">
				<tr>
					<th>ID</th>
					<th>FName</th>
					<th>LName</th>
					<th>DateOfBirth</th>
					<th>Email</th>
					<th>CNIC</th>
					<th>Phone</th>
					<th>Address</th>
					<th>City</th>
					<th>District</th>
					<th>FamilyDetails ID</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
				<?php foreach($persondetails as $P){ ?>
				<tr>
					<td><?php echo $P['ID']; ?></td>
					<td><?php echo $P['FName']; ?></td>
					<td><?php echo $P['LName']; ?></td>
					<td><?php echo $P['DateOfBirth']; ?></td>
					<td><?php echo $P['Email']; ?></td>
					<td><?php echo $P['CNIC']; ?></td>
					<td><?php echo $P['Phone']; ?></td>
					<td><?php echo $P['Address']; ?></td>
					<td><?php echo $P['City']; ?></td>
					<td><?php echo $P['District']; ?></td>
					<td><?php echo $P['FamilyDetails_ID']; ?></td>
					<td><?php echo $P['Status']; ?></td>
					<td>
						<a href="<?php echo site_url('persondetail/edit/'.$P['ID']); ?>" class="btn btn-info">Edit</a> 
						<a href="<?php echo site_url('persondetail/remove/'.$P['ID']); ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
				<?php } ?>
			</table>
			<div class="pull-right">
	      <a href="<?php echo site_url('persondetail/add'); ?>" class="btn btn-success">Add</a> 
        </div>
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
<script>
	$('#calendar').datepicker({
	});

	!function ($) {
		$(document).on("click","ul.nav li.parent > a > span.icon", function(){
			$(this).find('em:first').toggleClass("glyphicon-minus");
		});
		$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
	}(window.jQuery);

	$(window).on('resize', function () {
		if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
	})
	$(window).on('resize', function () {
		if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
	})
</script>
</body>
</html>
