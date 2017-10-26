<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Starter Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
  <link href="<?php echo base_url('assets/css/anasayfa.css')?>" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
<nav class="nav-extended blue">
<div class="nav-background">
  <div class="resim bresim" style="background-image: url('https://previews.123rf.com/images/neyro2008/neyro20081404/neyro2008140400133/27490357-Seamless-camping-background-vector-pattern-with-tents-a-campfire-radio-mushrooms-backpack-binoculars-Stock-Vector.jpg');"></div>
</div>
<div class="nav-wrapper container">
  <a href="<?php echo base_url(); ?>" class="brand-logo">Dogaktif</a>
  <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul class="right hide-on-med-and-down">
  <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?> 
                  <li><a class="dropdown-button" href="#" data-activates="dropdown1">
                          Üye Paneli<i class="material-icons right">arrow_drop_down</i>
                      </a>
                  </li>
 <?php } else { ?>
              <li><a href="<?php echo base_url("user/login"); ?>">Giriş Yap</a></li>
              <li><a href="<?php echo base_url("user/register"); ?>">Üye Ol</a></li>
<?php } ?> 
  </ul>
  <!-- Dropdown Structure -->
      <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) { ?>
          <!-- Dropdown Structure -->
          <ul id="dropdown1" class="dropdown-content">
              <li><a href="<?php echo base_url(); ?>road/createTrip">safdaf</a></li>
              <li><a href="<?php echo base_url(); ?>road/RoadTrips">fdasfda</a></li>
              <li><a href="<?php echo base_url("user/logout"); ?>">asdfa</a></li>
          </ul>
      <?php }?>
         
  <div class="nav-header center">
  <img class="responsive-img" style="max-height: 200px;"src="http://buzulorman.com/files/logo.png">
    <h1</h1>
    <div class="header-text"></div>
  </div>
</div>

</nav>
