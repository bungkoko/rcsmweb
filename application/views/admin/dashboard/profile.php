<div class="btn-group pull-right">
  <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
    <i class="icon-user"></i><?php echo $this->session->userdata('display_name');?>
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
    <li>
      <a href="">
        <i class="icon-map-marker"></i>Profil User
      </a>
    </li>
    <li>
      <a href="">
        <i class="icon-folder-open"></i>Password User
      </a>
    </li>
    <li class="divider"></li>
    <li>
      <a href="<?php echo site_url('admin/logout');?>">
        <i class="icon-off"></i>Logout
      </a>
    </li>
  </ul>
</div>
