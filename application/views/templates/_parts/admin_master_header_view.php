<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $this->config->item('cms_title');?></title>
<?php echo $before_head;?>
</head>
<body>
<?php
if($this->ion_auth->logged_in()) {
?>

<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper">
        <a href="<?php echo site_url('admin');?>" class="brand-logo"><?php echo $this->config->item('cms_title');?></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="left hide-on-med-and-down" style="position: relative; padding-left: 100px;">
          <?php echo $current_user_menu;?>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <?php echo $current_user_menu;?>
        </ul>


         <ul id="dropdown1" class="dropdown-content">
          <?php print_r($this->ion_auth->user()->row()->username);?>
         
            <li><a href="#">Profile page</a></li>
            <li><a href="<?php echo site_url('admin/user/logout');?>">Logout</a></li>
          
        </ul>
        
        <ul class="right">
        <li><a href="<?php echo site_url('admin/user/profile');?>">Profile page</a></li>
       <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>

      </div>
    </nav>
  </div>



<?php } ?>