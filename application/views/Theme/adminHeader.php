<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Burak Karahan">
	<!-- Burak Karahan Github: MarlonJD-->

	<!-- css -->
	<script src="https://unpkg.com/vue"></script>
	<script src="https://use.fontawesome.com/7dbe7bb3a7.js"></script>
	<style>
		nav, footer{
			font-family: 'Bangers', cursive;
		}
    #dash_users_header{
      padding-left: 30px;
    }
	</style>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js"></script>
		<script type="text/javascript">

		$(document).ready(function() {
    		$('select').formSelect();
				$('select').select();
  			$('.sidenav').sidenav();
				$('.datepicker').datepicker({formatSubmit: 'yyyy/mm/dd', format: 'YYYY-MM-DD', showDaysInNextAndPreviousMonths: true});
				$(".dropdown-trigger").dropdown();
		});
		</script>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="<?php echo base_url('Admin/addEvent'); ?>">Etkinlik Ekle</a></li>
  <li><a href="<?php echo base_url('Admin/events'); ?>">Düzenle</a></li>
</ul>

<nav class="nav-extended blue">
	<div class="nav-wrapper container">
		<a href="#" class="brand-logo">Doğaktif Admin</a>
		<a href="#" data-target="mobile-demo" class="sidenav-trigger button-collapse"><i class="material-icons">menu</i></a>
		<ul id="nav-mobile" class="right hide-on-med-and-down"> <!--Web-->
			<li><a href="<?php echo base_url('Admin'); ?>">Admin Anasayfa</a></li>
			<li><a href="<?php echo base_url(''); ?>">Site Anasayfa</a></li>
			<li><a href="<?php echo base_url('Admin/users'); ?>">Kullanıcılar</a></li>
			<!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Etkinlikler<i class="material-icons right">arrow_drop_down</i></a></li>
			<li><a href="<?php echo base_url('User/Logout'); ?>">Çıkış Yap</a></li>
		</ul>
		<ul class="sidenav" id="mobile-demo"> <!--Mobil-->
		<li><a href="<?php echo base_url('Admin'); ?>">Admin Anasayfa</a></li>
		<li><a href="<?php echo base_url(''); ?>">Site Anasayfa</a></li>
		<li><a href="<?php echo base_url('Admin/users'); ?>">Kullanıcılar</a></li>
			<li><div class="divider"></div></li>
			<li><a class="subheader">Etkinlikler</a></li>
    	<li><a class="waves-effect" href="<?php echo base_url('Admin/addEvent'); ?>">Etkinlik Ekle</a></li>
			<li><a class="waves-effect" href="<?php echo base_url('Admin/events'); ?>">Düzenle</a></li>
			<li><div class="divider"></div></li>
			<li><a href="<?php echo base_url('User/Logout'); ?>">Çıkış Yap</a></li>
		</ul>
	</div> 
</nav>