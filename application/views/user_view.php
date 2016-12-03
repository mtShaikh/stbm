<!DOCTYPE html>
<html>
<head>
 <title>Simple Login with CodeIgniter - Private Area</title>
 <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
 <link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
 <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

 <!--Icons-->
 <script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>
</head>
<body>
 <?php include('nav.php');?>
<div id="sidebar-collapse" class="col-sm-3 col-md-2 sidebar">
<br>
  <?php include("usidebar.php"); ?>
</div>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
<?php if($new!=""){
  echo  '<div class="alert alert-success alert-dismissible" role="alert">';
  echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span  aria-hidden="true">&times;</span></button>';
  echo $new;
  echo "</div>";
}

?>
</div>


<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
