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
						<a class="" href="<?php echo site_url('user_c/expense')?>">
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
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Academic References     
            </a>
          </li>
          <li>
            <a class="" href="<?php echo site_url('user_c/Preference')?>">
              <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Personal References     
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
		<div class="row"><h2 class="text-center">Family Expenditures</h2></div>
		<div class="row"><h4 class="text-center">please mention mothly average amount</h4></div>
		4
		<br>
		<div class="row">
			<div class="form-horizontal">
				
				<div class="form-group">
					<label for="grocery" class="col-md-4 control-label">Grocery</label>
					<div class="col-md-4">
						<input type="text" name="grocery" value="<?php echo $this->input->post('grocery'); ?>" class="form-control" id="grocery" />
					</div>
				</div>
				<div class="form-group">
					<label for="electricity" class="col-md-4 control-label">Electricity Bill</label>
					<div class="col-md-4">
						<input type="text" name="electricity" value="<?php echo $this->input->post('electricity'); ?>" class="form-control" id="electricity" />
					</div>
				</div>
				<div class="form-group">
					<label for="gass" class="col-md-4 control-label">Gass Bill</label>
					<div class="col-md-4">
						<input type="text" name="gas" value="<?php echo $this->input->post('gas'); ?>" class="form-control" id="gas" />
					</div>
				</div>
				<div class="form-group">
					<label for="telephone" class="col-md-4 control-label">Telephone Bill</label>
					<div class="col-md-4">
						<input type="text" name="telephone" value="<?php echo $this->input->post('telephone'); ?>" class="form-control" id="telephone" />
					</div>
				</div>

                 <div class="form-group">
					<label for="education" class="col-md-4 control-label">family education expense</label>
					<div class="col-md-4">
						<input type="text" name="education" value="<?php echo $this->input->post('education'); ?>" class="form-control" id="education" />
					</div>
				</div>


				<div class="form-group">
					<label for="house" class="col-md-4 control-label">HHouse rent</label>
					<div class="col-md-4">
						<input type="text" name="house" value="<?php echo $this->input->post('house'); ?>" class="form-control" id="house" />
					</div>
				</div>

				<div class="form-group">
					<label for="miscellaneous" class="col-md-4 control-label">Miscellaneous Expense</label>
					<div class="col-md-4">
						<input type="text" name="miscellaneous" value="<?php echo $this->input->post('miscellaneous'); ?>" class="form-control" id="miscellaneous" />
					</div>
				</div>
				<div class="form-group">
					<label for="total" class="col-md-4 control-label">Total expense</label>
					<div class="col-md-4">
						<input type="text" name="total" value="<?php echo $this->input->post('total'); ?>" class="form-control" id="total" />
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
