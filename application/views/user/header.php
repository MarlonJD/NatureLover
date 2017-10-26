<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Site title</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- css -->


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

						<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
							<li><a href="<?= base_url('logout') ?>">Logout</a></li>
						<?php else : ?>
							<li><a href="<?= base_url('register') ?>">Register</a></li>
							<li><a href="<?= base_url('login') ?>">Login</a></li>
						<?php endif; ?>
		
