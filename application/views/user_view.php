<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title>Simple Login with CodeIgniter - Private Area</title>
   <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

   <!--Icons-->
   <script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>
 </head>
 <body>
   <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
 		<div class="container-fluid">
 			<div class="navbar-header">
 				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
 					<span class="sr-only">Toggle navigation</span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 					<span class="icon-bar"></span>
 				</button>
 				<a class="navbar-brand" href="#"><span>Hello </span>User</a>
 				<ul class="user-menu">
 					<li class="dropdown pull-right">
 						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg><?php echo $email;?> <span class="caret"></span></a>
 						<ul class="dropdown-menu" role="menu">
 							<li><a href="user_c/logout"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
 						</ul>
 					</li>
 				</ul>
 			</div>

 		</div><!-- /.container-fluid -->
 	</nav>
<div class="">
  <!--a href="user_c/form">form</a-->
<?php $this->view('form'); ?>
</div>
  <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
 </body>
</html>
