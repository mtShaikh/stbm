<!DOCTYPE html>
<html>
<body>
<ul class="nav menu">
    <li class="<?php if($this->uri->uri_string() == 'user_c/home') { echo 'active'; } ?>"><a href="<?php echo site_url('user_c/home')?>"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg>Home</a></li>
    <li class="parent <?php if($this->uri->uri_string() == 'user_c/applications') { echo 'active'; } ?>">
      <a href="<?php echo site_url('user_c/applications')?>">
        <span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span>Application
      </a>
      <ul class="children collapse.in" id="sub-item-1">
        <li class="<?php if($this->uri->segment(2) == 'person') { echo 'active'; } ?>">
          <a class="" href="<?php echo site_url('user_c/person')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Personal Information
          </a>
        </li>
        <li class="<?php if($this->uri->segment(2) == 'user_c/addacademicinfo') { echo 'active'; } ?>">
          <a class="" href="<?php echo site_url('user_c/addacademicinfo/'.$mail)?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Academics
          </a>
        </li>
        <li class="<?php if($this->uri->uri_string() == 'user_c/family') { echo 'active'; } ?>">
          <a class="" href="<?php echo site_url('user_c/family')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Family Information     
          </a>
        </li>
        <li class="<?php if($this->uri->uri_string() == 'user_c/expense') { echo 'active'; } ?>">
          <a class="" href="<?php echo site_url('user_c/expense')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Expenses     
          </a>
        </li>
        <li class="<?php if($this->uri->uri_string() == 'user_c/asset') { echo 'active'; } ?>">
          <a class="" href="<?php echo site_url('user_c/asset')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Assets     
          </a>
        </li>
        <li class="<?php if($this->uri->uri_string() == 'user_c/areference') { echo 'active'; } ?>">
          <a class="" href="<?php echo site_url('user_c/areference')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Academic Reference
          </a>
        </li>
        <li class="<?php if($this->uri->uri_string() == 'user_c/preference') { echo 'active'; } ?>">
          <a class="" href="<?php echo site_url('user_c/preference')?>">
            <svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Personal Reference
          </a>
        </li>
      </ul>
    </li>
    <li role="presentation" class="divider"></li>
    <li class="<?php if($this->uri->uri_string() == 'user_c/pass') { echo 'active'; } ?>"><a href="<?php echo site_url('user_c/pass')?>"><svg class="glyph stroked pen tip"><use xlink:href="#stroked-pen-tip"></use></svg> Change Password</a></li>
    <li role="presentation" class="divider"></li>
    <li><a href="<?php echo site_url('user_c/logout')?>"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
  </ul>
</body>
</html>