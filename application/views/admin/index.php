<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Rumah Cantik Sehat Muslimah</title>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/bootstrap-responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/admin/css/redactor.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/admin/js/redactor.js"></script>
  </head>
  <body>
    <div class="navbar navbar-fixed-top m-header">
      <div class="navbar-inner m-inner">
  			<div class="container-fluid">
  				<a target="_blank" class="brand m-brand" href="http://localhost/dinas-pendidikan/">Rumah Cantik Sehat Muslimah</a>
  				<div class="nav-collapse collapse">
  					<?php $this->load->view('admin/'.$profile);?>
  					<div class="btn-group pull-right">
							<a class="btn" href="">
								<i class="icon-home"></i> Dashboard
							</a>
  					</div>
    	    </div>
    		</div>
    	</div>
    </div>
    <div class="m-top"></div>
    <aside class="sidebar">
       <?php $this->load->view('admin/'.$sidebar);?>
    </aside>
    <div class="m-sidebar-collapsed">
    	<ul class="nav nav-pills"></ul>
      <div class="arrow-border">
    	   <div class="arrow-inner"></div>
    	</div>
    </div>
    <div class="main-container">
    	<div class="container-fluid">
    	  <?php $this->load->view('admin/'.$content);?>
        <footer class="footer">
      		<div class="container">
      			Copyright &copy; 2017 Rumah Cantik Sehat Muslimah<br> Developed by Joko Purwanto
          </div>
    		</footer>
    		<div class="cleaner_h60"></div>
    	</div>
    </div>
  </body>
</html>
