<?php echo validation_errors(); ?>
<?php echo form_open('persondetail/add',array("class"=>"form-horizontal")); ?>
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
	<div class="form-group">
		<label for="FName" class="col-md-4 control-label">FName</label>
		<div class="col-md-8">
			<input type="text" name="FName" value="<?php echo $this->input->post('FName'); ?>" class="form-control" id="FName" />
		</div>
	</div>
	<div class="form-group">
		<label for="LName" class="col-md-4 control-label">LName</label>
		<div class="col-md-8">
			<input type="text" name="LName" value="<?php echo $this->input->post('LName'); ?>" class="form-control" id="LName" />
		</div>
	</div>
	<div class="form-group">
		<label for="DateOfBirth" class="col-md-4 control-label">DateOfBirth</label>
		<div class="col-md-8">
			<input type="text" name="DateOfBirth" value="<?php echo $this->input->post('DateOfBirth'); ?>" class="form-control" id="DateOfBirth" />
		</div>
	</div>
	<div class="form-group">
		<label for="Email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="Email" value="<?php echo $this->input->post('Email'); ?>" class="form-control" id="Email" />
		</div>
	</div>
	<div class="form-group">
		<label for="CNIC" class="col-md-4 control-label">CNIC</label>
		<div class="col-md-8">
			<input type="text" name="CNIC" value="<?php echo $this->input->post('CNIC'); ?>" class="form-control" id="CNIC" />
		</div>
	</div>
	<div class="form-group">
		<label for="Phone" class="col-md-4 control-label">Phone</label>
		<div class="col-md-8">
			<input type="text" name="Phone" value="<?php echo $this->input->post('Phone'); ?>" class="form-control" id="Phone" />
		</div>
	</div>
	<div class="form-group">
		<label for="Address" class="col-md-4 control-label">Address</label>
		<div class="col-md-8">
			<input type="text" name="Address" value="<?php echo $this->input->post('Address'); ?>" class="form-control" id="Address" />
		</div>
	</div>
	<div class="form-group">
		<label for="City" class="col-md-4 control-label">City</label>
		<div class="col-md-8">
			<input type="text" name="City" value="<?php echo $this->input->post('City'); ?>" class="form-control" id="City" />
		</div>
	</div>
	<div class="form-group">
		<label for="District" class="col-md-4 control-label">District</label>
		<div class="col-md-8">
			<input type="text" name="District" value="<?php echo $this->input->post('District'); ?>" class="form-control" id="District" />
		</div>
	</div>
	<div class="form-group">
			<label for="Status" class="col-md-4 control-label">Status</label>
			<div class="col-md-8">
				<select name="Status" class="form-control">
					<option value="">select</option>
					<?php 
					$Status_values = array(
					);

					foreach($Status_values as $value => $display_text)
					{
						$selected = ($value == $this->input->post('Status')) ? ' selected="selected"' : null;

						echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
					} 
					?>
				</select>
			</div>
		</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
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