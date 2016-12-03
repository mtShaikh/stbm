<html>

<body>
	<br>
	<ul class="nav menu">
		<li class="<?php if($this->uri->uri_string() == 'admin/dash') { echo 'active'; } ?>"><a href="<?php echo site_url('admin/dash')?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
		<li class="<?php if($this->uri->segment(1) == 'persondetail') { echo 'active'; } ?>"><a href="<?php echo site_url('admin/applicants')?>"><svg class="glyph stroked male user"><use xlink:href="#stroked-male-user"></use></svg> Applicants</a></li>
		<li class="<?php if($this->uri->uri_string() == 'academicdetail') { echo 'active'; } ?>"><a href="<?php echo site_url('admin/applications')?>"><svg class="glyph stroked email"><use xlink:href="#stroked-email"></use></svg> Applications</a></li>
		<li class="<?php if($this->uri->uri_string() == '') { echo 'active'; } ?>"><a href="<?php echo site_url('admin/applicants')?>"><svg class="glyph stroked blank document"><use xlink:href="#stroked-blank-document"></use></svg> Reports</a></li>
		<li><a href=""><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg> Analysis</a></li>
		<li role="presentation" class="divider"></li>
		<li><a href=""><svg class="glyph stroked star"><use xlink:href="#stroked-star"></use></svg>Sponsors/Donors</a></li>
		<li role="presentation" class="divider"></li>
		<li class="
		<?php 
		if($this->uri->segment(1) == 'institution') 
			{ echo 'active'; } 
		?>">
		<a href="<?php echo site_url('admin/institution')?>"><svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"></use></svg> Institutions</a></li>
		<li role="presentation" class="divider"></li>
		<li><a href="<?php echo site_url('admin/changepass')?>"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Change Password</a></li>
		<li><a href="<?php echo site_url('admin/logout')?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
	</ul>
</body>
</html>