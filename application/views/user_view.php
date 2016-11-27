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
            <li><a href="<?php echo site_url('user_c/logout')?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>

  </div><!-- /.container-fluid -->
</nav>
<div id="sidebar-collapse" class="col-sm-3 col-md-2 sidebar">
  <br>
  <ul class="nav menu">
    <li class="active"><a href="<?php echo site_url('user_c/home')?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Home</a></li>
    <li class="parent">
      <a href="<?php echo site_url('user_c/applications')?>">
        <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span>Application
      </a>
      <ul class="children collapse" id="sub-item-1">
        <li>
          <a class="" href="<?php echo site_url('user_c/person')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Personal Information
          </a>
        </li>
        <li>
          <a class="" href="<?php echo site_url('user_c/academic')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Academics
          </a>
        </li>
        <li>
          <a class="" href="<?php echo site_url('user_c/family')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Family Information     
          </a>
        </li>
        <li>
          <a class="" href="#<?php echo site_url('user_c/expense')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Expenses     
          </a>
        </li>
        <li>
          <a class="" href="<?php echo site_url('user_c/asset')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Assets     
          </a>
        </li>
        <li>
          <a class="" href="<?php echo site_url('user_c/reference')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> References     
          </a>
        </li>
      </ul>
    </li>
    <li role="presentation" class="divider"></li>
    <li><a href="<?php echo site_url('user_c/pass')?>"><svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"></use></svg> Change Password</a></li>
    <li role="presentation" class="divider"></li>
    <li><a href="<?php echo site_url('user_c/logout')?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
  </ul>
</div>
<?php if($new){
  echo '<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">';
  echo  '<div class="alert alert-success alert-dismissible" role="alert">';
  echo '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
  echo $new;
  echo "</div>";
  echo "</div>";
}
?>


<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
