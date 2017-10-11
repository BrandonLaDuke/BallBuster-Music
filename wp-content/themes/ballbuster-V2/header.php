<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/styles.css" />


    <?php wp_head();?>
  </head>
  <body fullbleed>
    <header>
      <div id="navigation" class="drawer">
        <div class="logo-menu">
          <a onclick="openDrawer()">Open Menu</a>
          <a href="<?php bloginfo( 'wpurl' );?>" class="logo">

          </a>
        </div>
        <div id="nav-items" class="nav-items">
          <a onclick="closeDrawer()" id="closeDrawerIcon">

          </a>
          <a id="nav1" href="#">Home</a>
          <a id="nav2" href="#">News</a>
          <a id="nav3" href="#">Reviews</a>
          <a id="nav4" href="#">Interviews</a>
          <a id="nav5" href="#">Features</a>
          <a id="nav6" href="#">Haunted Happenings</a>
          <a id="nav7" href="#">BallBuster Babes</a>
        </div>
      </div>
    </header>
