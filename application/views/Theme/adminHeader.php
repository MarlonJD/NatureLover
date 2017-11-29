<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

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
		header, main, footer {
			padding-left: 300px;
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


  <ul id="slide-out" class="side-nav fixed z-depth-2">
    <li class="center no-padding">
        <div class="row">
            Doğaktif Admin Panel
        </div>
    </li>

    <li id="dash_dashboard"><a class="waves-effect" href="<?php echo base_url('Admin'); ?>"><b>Admin Anasayfa</b></a></li>
    <li id="dash_mainpage"><a class="waves-effect" href="<?php echo base_url(''); ?>"><b>Site Anasayfa</b></a></li>
    <li id="dash_logout"><a class="waves-effect" href="<?php echo base_url('User/Logout'); ?>"><b>Çıkış Yap</b></a></li>
    

  </ul>
