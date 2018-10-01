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
	<script src="https://use.fontawesome.com/7dbe7bb3a7.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
	<script src="https://unpkg.com/vue"></script>
	<link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

<nav class="light-pink lighten-1 " role="navigation">
	<div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Figur Macher </a>
	<ul class="right hide-on-med-and-down">
	<?php if ($_SESSION['is_admin']  === true) { ?>
		<li><a href="<?php echo base_url('admin/');?>">Admin</a></li>
	<?php } ?>
		<li><a href="<?php echo base_url('admin/user/'.$this->uri->segment(2));?>"><?php echo $this->lang->line("n_main"); ?></a></li>
		<li><a href="<?php echo base_url('admin/uFoods/'.$this->uri->segment(2));?>"><?php echo $this->lang->line("n_foods"); ?></a></li>
		<li><a href="<?php echo base_url('admin/uDiet/'.$this->uri->segment(2));?>"><?php echo $this->lang->line("n_diet"); ?></a></li>
		<li><a href="<?php echo base_url('admin/uSupplements/'.$this->uri->segment(2));?>"><?php echo $this->lang->line("n_supp"); ?></a></li>
		<li><a href="<?php echo base_url('user/logout'.$this->uri->segment(2));?>"><?php echo $this->lang->line("n_logout"); ?></a></li>
	</ul>

	<ul id="nav-mobile" class="side-nav">
		<li><a href="<?php echo base_url('user/logout');?>"><div class="blue-text">Logout</div></a></li>
	</ul>
	<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>	
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