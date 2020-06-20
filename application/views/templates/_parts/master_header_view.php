<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $this->config->item('cms_title');?></title>
<?php echo $before_head;?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/main.css">

</head>

<body>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=1595538550509121&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<nav class="black darken-1 top-nav white" style="height: 25px;">
<div class="nav-wrapper">
<ul id="nav-mobile" class="left" style="margin-top: -20px;">
<li><div class="black-text" style="font-size: 11.5px; font-weight: bold;" href="javascript:void(0)">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;community for stans , community for &exist; lovers</div></li>
</ul>
<ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-top: -20px;">
<li style="padding-right: 20px"><i style="font-size: 15px;" class="fa fa-facebook-official black-text" aria-hidden="true"></i></li>
<li style="padding-right: 20px"><i style="font-size: 15px;" class="fa fa-twitter black-text" aria-hidden="true"></i></li>
<li style="padding-right: 20px"><i style="font-size: 15px;" class="fa fa-youtube-play black-text" aria-hidden="true"></i></li>
<li style="padding-right: 20px"><i style="font-size: 15px;" class="fa fa-instagram black-text" aria-hidden="true"></i></li>
<li style="padding-right: 20px"><i style="font-size: 15px;" class="fa fa-google-plus" aria-hidden="true"></i></li>
</ul>
</div>
</nav>
<br/>
<a href="#" class="brand-logo"><h1 class="center" style="font-size: 10.5em;  
width: 180px;
height: 180px;
background: #000;
color: #fff; 
-moz-border-radius: 110px; 
-webkit-border-radius: 110px; 
border-radius: 110px; 
margin: auto;
">&exist;</h1></a> 

<br/>
<nav class="black darken-1">
<div class="nav-wrapper">
<a href="#" data-activates="mobile-demo" class="white-text button-collapse"><i class="material-icons">menu</i></a>
<ul id="nav-mobile" class="left hide-on-med-and-down">
<li><a href="#" class="brand-logo" style="padding-left: 10px;">&exist;</a> </li>
<div style="padding-left: 30px;">
<?php
foreach ($categories as $c) {
echo '<li><a href="'.base_url('category')."/".$c->name.'">'.$c->name.'</a></li>';
}
?>
</div>
</ul>
<ul class="side-nav" id="mobile-demo">	
<a href="#" class="brand-logo"><h1 class="center" style="font-size: 1.8em;  
width: 60px;
height: 60px;
background: #000;
color: #fff; 
-moz-border-radius: 70px; 
-webkit-border-radius: 70px; 
border-radius: 70px; 
margin: 15px auto;
">&exist;</h1></a> 
<br/>
<?php
foreach ($categories as $c) {
echo '<li><a href="/e/category/'.$c->name.'">'.$c->name.'</a></li>';
}
?>
</ul>
</div>
</nav>

<ul class="newsticker">
<?php
foreach ($pages_c1 as $p) {
echo '<li style="font-weight: bold; font-size:1.02em;">&nbsp;&nbsp;&nbsp;'.$p->name.'</li>';

}

?>
</ul>