
<head>
	<title>My Charity A Charity category Flat bootstrap Responsive Website Template|About :: w3layouts</title>
	<link href='<?php echo base_url(); ?>assets/css/style.css' rel='stylesheet' type='text/css' media='all' />
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
   <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

 <!--Icons-->
 <script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>
	<!--web-fonts-->'
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<!--js-->
	<script src=''<?php echo base_url(); ?>js/jquery.min.js'></script>
	<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<script type='application/x-javascript'>
		addEventListener('load', function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		} >
	</script>
	<meta name='keywords' content='My Charity Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design'
	/>
	<!-- start-smoth-scrolling -->
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/move-top.js'></script>
	<script type='text/javascript' src='<?php echo base_url(); ?>assets/js/easing.js'></script>
	<script type='text/javascript'>
		jQuery(document).ready(function($) {
			$('.scroll').click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<style>
		img {
			vertical-align: middle;
			width: 131px;
			height: 69px;
		}

		font {
			font-family: Kristen ITC;
			color: #7B1B06;
			font-size: 20px;
		}

		.get-main {
			width: 80%;
			outline: none;
			margin-bottom: 10px;
			padding: 8px;
			margin-left: 370px;
		}

		.get-left p {
			font-size: 15px;
			font-weight: 400;
			color: #9B242D;
			margin-bottom: 5px;
			margin-left: 60x;
		}

		.get-main h4 {
			margin-left: 100px;
		}
	</style>
	<!-- //end-smoth-scrolling -->
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
    <li><a href="<?php echo site_url('user_c/home')?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Home</a></li>
    <li class="parent active">
				<a href="<?php echo site_url('user_c/applications')?>">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span>Application
				</a>
				<ul class="children collapse in" id="sub-item-1">
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
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class='get'>
			<div class='container'>
				<div class='get-main'>
					<h4><strong>Personal Information</strong></h4>
					<br></br>
					<div class='col-md-6 get-left'>
						<p>Name</p>
						<input type='text' value='' onfocus='this.value = '';' onblur='if (this.value == '') {this.value = '';}' / required>
						<p>CNIC</p>
						<input type='text' value='' onfocus='this.value = '';' onblur='if (this.value == '') {this.value = '';}' / required>
						<p>Address</p>
						<input type='text' value='' onfocus='this.value = '';' onblur='if (this.value == '') {this.value = '';}' / required>
						<p>City</p>
						<input type='text' value='' onfocus='this.value = '';' onblur='if (this.value == '') {this.value = '';}' / required>
						<p>District</p>
						<input type='text' value='' onfocus='this.value = '';' onblur='if (this.value == '') {this.value = '';}' / required>
						<p>Date Of Birth</p>
						<input type='text' value='' onfocus='this.value = '';' onblur='if (this.value == '') {this.value = '';}' / required>
						<p>Phone Number</p>
						<input type='text' value='' onfocus='this.value = '';' onblur='if (this.value == '') {this.value = '';}' / required>
						<a href='academic.html'> <input type='submit' value='Next'></a>
						<input type='submit' value='Save'>
					</div>

					<div class='clearfix'> </div>
				</div>
			</div>
		</div>
		</div>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>

</html>
