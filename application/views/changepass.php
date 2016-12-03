<?php echo validation_errors(); ?>
<?php 
if ($type!= 1)
{
	echo form_open();
}
else{
			//include("sidebar.php");
} ?>
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
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">

		$(document).ready(function(){
			$("#sbutton").click(function(event){
				var newPass = $("input#newPass").val();
				var oldPass = $("input#oldPass").val();

				jQuery.ajax({
					type: "POST",
					dataType: "TEXT",
					contentType: "application/x-www-form-urlencoded; charset=UTF-8",
					url: "<?php echo base_url();?>"+"index.php/user_c/editpass",
					data: {new: newPass, old: oldPass},
					error: function (xhr, status) {
						alert(status);
					},
					success: function(res) {
							if(res =="true"){
								//alert(res);
							$("input#newPass").val("");
							$("input#oldPass").val("");
							jQuery("div#result").show();
							jQuery("div#value").html("Password successfully changed");
							}
							else{
								$("input#newPass").val("");
							$("input#oldPass").val("");
								jQuery("div#result").show();
								jQuery("div#result").removeClass("alert-success");
								jQuery("div#result").addClass("alert-danger");
						      jQuery("div#value").html("Password change failed because your old password does not match");
							}
							
						}
						
				});
				event.preventDefault();
			});
		});
	</script>

<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<?php include("nav.php"); ?>
	<div id="sidebar-collapse" class="col-sm-3 col-md-2 sidebar">
		<br>
		<?php 
		if ($type!= 1)
		{
			include("usidebar.php");
		}
		else{
			include("sidebar.php");
		} ?>
	</div>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<br>
		<?php 
		echo  '<div id="result" style="display: none" class="alert alert-success alert-dismissible" role="alert">';
		echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close">';
		echo '<span aria-hidden="true">&times';
		echo '</span>';
		echo '</button>';
		echo '<div id="value"></div>';
		echo '</div>';
		
		?>
		<br>
		<h1 class="text-center">Change Password</h1>
		<div class="col-xs-12" style="height:50px;"></div>
		<div class="col-xs-12" style="height:50px;"></div>
		<div class="form-horizontal">
			<div class="form-group">
				<label for="oldPass" class="col-md-4 control-label">Current Password</label>
				<div class="col-md-4">
					<input type="password" name="oldPass" class="form-control" id="oldPass" />
				</div>
			</div>
			<div class="col-xs-12" style="height:50px;"></div>
			<div class="form-group">
				<label for="newPass" class="col-md-4 control-label">New Password</label>
				<div class="col-md-4">
					<input type="password" name="newPass" class="form-control" id="newPass" />
				</div>
			</div>
			<div class="col-xs-12" style="height:50px;"></div>
			<div class="text-center">
				<input id="sbutton" class="btn btn-primary" type="submit" value="Change"/>
			</div>
		</div>

	</div>
	<?php echo form_close(); ?>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

</body>
</html>
