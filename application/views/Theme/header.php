<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Compiled and minified CSS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.1/css/materialize.min.css">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Burak Karahan">
	<meta name="theme-color" content="#29b6f6">
	<link rel="icon" sizes="192x192" href="<?php echo base_url('assets/img/logoFavicon.png'); ?>" type="image/png">
	<!-- Burak Karahan Github: MarlonJD-->
	<!-- css -->
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
	 <!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.1/js/materialize.min.js"></script>
	<script src="https://unpkg.com/vue"></script>
	<script src="https://use.fontawesome.com/7dbe7bb3a7.js"></script>
  	<script type="text/javascript">
		$(document).ready(function() {
			$('.sidenav').sidenav();
			$('select').select();
			$('.collapsible').collapsible();
			$('.modal').modal();
			
		});
		</script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url('');?>" class="brand-logo">Doğaktif</a>
      <ul class="right hide-on-med-and-down">
		<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
			<?php if ($_SESSION['is_admin']  === true) { ?>
			<li><a href="<?php echo base_url('admin/');?>">Admin</a></li>
			<?php } ?>
			<li><a href="<?php echo base_url('user/logout');?>">Çıkış Yap</a></li>
		<?php } else { ?>
			<li><a href="<?php echo base_url('user/login');?>">Giriş Yap</a></li>
			<li><a href="<?php echo base_url('user/register');?>">Üye Ol</a></li>
		<?php } ?>
	  </ul>

      <ul id="nav-mobile" class="sidenav">
		<?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
		<li><a href="<?php echo base_url('user/logout');?>"><div class="blue-text">Çıkış Yap</div></a></li>
		<?php if ($_SESSION['is_admin']  === true) { ?>
			<li><a href="<?php echo base_url('admin/');?>">Admin</a></li>
		<?php } ?>
		<?php } else { ?>
			<li><a href="<?php echo base_url('user/login');?>">Giriş Yap</a></li>
			<li><a href="<?php echo base_url('user/register');?>">Üye Ol</a></li>
		<?php } ?>
	  </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>

<style>
nav, footer{
	font-family: 'Bangers', cursive;
}
.tooltip {
    display: block;
	font-size: 14px;
}
.value {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    user-select: none;
    font-size: 32px;
    font-weight: 400;
    line-height: 26px;
    padding-bottom: 4px;
}

nav {
    background-color: #E183B7 !important;
}


.i {
	text-align: center;
 }


.h {
	font-size: 13px;
 }


.v {
	text-align: center;
 }

</style>