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
		<br>
		<ul class="nav menu">
			<li><a href="<?php echo site_url('admin/dash')?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<!--li><a href="widgets.html"><svg class="glyph stroked calendar"><use xlink:href="#stroked-calendar"></use></svg> Widgets</a></li>
			<li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Charts</a></li-->
			<li class="active"><a href="<?php echo site_url('admin/applicants')?>"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"></use></svg> Applicants</a></li>
			<li><a href="<?php echo site_url('admin/applications')?>"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Applications</a></li>
			<li><a href="<?php echo site_url('admin/applicants')?>"><svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"></use></svg> Reports</a></li>
			<li><a href=""><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Analysis</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href=""><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg>Sponsors/Donors</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href=""><svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"></use></svg> Universities</a></li>
			<li role="presentation" class="divider"></li>
			<li><a href="<?php echo site_url('admin/logout')?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
		</ul>
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<br>
		<div class="panel panel-default">
			<div class="panel-heading">Applicants' Personal Details</div>
			<div class="panel-body" id="data">
				<table class="table table-striped table-bordered table-responsive">
					<tr>
						<th>Name</th>
						<th>DateOfBirth</th>
						<th>Email</th>
						<th>CNIC</th>
						<th>Phone</th>
						<th>Address</th>
						<th>City</th>
						<th>District</th>
						<th>Status</th>
						<th>Actions</th>
					</tr>
					<?php foreach($persondetails as $P){ ?>
					<tr>
						<td><?php echo $P['FName']; ?>  <?php echo $P['LName']; ?></td>
						<td><?php echo $P['DateOfBirth']; ?></td>
						<td><?php echo $P['Email']; ?></td>
						<td><?php echo $P['CNIC']; ?></td>
						<td><?php echo $P['Phone']; ?></td>
						<td><?php echo $P['Address']; ?></td>
						<td><?php echo $P['City']; ?></td>
						<td><?php echo $P['District']; ?></td>	
						<td><?php echo $P['Status']; ?></td>
						<td>
							<a href="<?php echo site_url('persondetail/edit/'.$P['ID']); ?>" class="btn btn-info">Edit</a> 
							<a href="<?php echo site_url('persondetail/remove/'.$P['ID']); ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
					<?php } ?>
				</table> 	
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
