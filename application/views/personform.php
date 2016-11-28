<!DOCTYPE html>
<html>
<head>
	<title>My Charity A Charity category Flat bootstrap Responsive Website Template|About :: w3layouts</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/datepicker3.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
	<!--Icons-->
	<script src="<?php echo base_url(); ?>assets/js/lumino.glyphs.js"></script>
	<!--web-fonts-->'
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<!--js-->
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
		<div class="row"><h2 class="text-center">Personal Information</h2></div>
		<br>
		<div class="row">
			<div class="form-horizontal">
				<div class="form-group">
					<label for="FName" class="col-md-4 control-label">FName</label>
					<div class="col-md-4">
						<input type="text" name="FName" value="<?php echo $this->input->post('FName'); ?>" class="form-control" id="FName" />
					</div>
				</div>
				<div class="form-group">
					<label for="LName" class="col-md-4 control-label">LName</label>
					<div class="col-md-4">
						<input type="text" name="LName" value="<?php echo $this->input->post('LName'); ?>" class="form-control" id="LName" />
					</div>
				</div>
				<div class="form-group">
					<label for="DateOfBirth" class="col-md-4 control-label">DateOfBirth</label>
					<div class="col-md-4">
						<input type="text" name="DateOfBirth" value="<?php echo $this->input->post('DateOfBirth'); ?>" class="form-control" id="DateOfBirth" />
					</div>
				</div>
				<div class="form-group">
					<label for="Email" class="col-md-4 control-label">Email</label>
					<div class="col-md-4">
						<input type="text" name="Email" value="<?php echo $this->input->post('Email'); ?>" class="form-control" id="Email" />
					</div>
				</div>
				<div class="form-group">
					<label for="CNIC" class="col-md-4 control-label">CNIC</label>
					<div class="col-md-4">
						<input type="text" name="CNIC" value="<?php echo $this->input->post('CNIC'); ?>" class="form-control" id="CNIC" />
					</div>
				</div>
				<div class="form-group">
					<label for="Phone" class="col-md-4 control-label">Phone</label>
					<div class="col-md-4">
						<input type="text" name="Phone" value="<?php echo $this->input->post('Phone'); ?>" class="form-control" id="Phone" />
					</div>
				</div>
				<div class="form-group">
					<label for="Address" class="col-md-4 control-label">Address</label>
					<div class="col-md-4">
						<textarea name="Address" value="<?php echo $this->input->post('Address'); ?>" class="form-control" id="Address"></textarea>  
					</div>
				</div>
				<div class="form-group">
					<label for="City" class="col-md-4 control-label">City</label>
					<div class="col-md-4">
						<input type="text" name="City" value="<?php echo $this->input->post('City'); ?>" class="form-control" id="City" />
					</div>
				</div>
				<div class="form-group">
					<label for="District" class="col-md-4 control-label">District</label>
					<div class="col-md-4">
						<input type="text" name="District" value="<?php echo $this->input->post('District'); ?>" class="form-control" id="District" />
					</div>
				</div>
				<div class="form-group">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-3">
					<button type="submit" class="btn btn-success btn-lg">Save</button>	
					</div>
					<div class="col-md-3">
					<button type="submit" class="btn btn-success btn-lg">Next</button>		
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js"></script>
</body>
</html>
