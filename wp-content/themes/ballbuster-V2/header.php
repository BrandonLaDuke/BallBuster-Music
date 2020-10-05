<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/styles.css" />
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

    <?php wp_head();?>
  </head>
  <body fullbleed>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=255026351810383&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <header>
      <div id="navigation" class="drawer">
        <div class="logo-menu">
          <a class="menuBtn" onclick="openDrawer()"><img src="<?php bloginfo('template_directory');?>/icons/ic_menu.svg" alt="Menu"></a>
          <a href="<?php bloginfo( 'wpurl' );?>" class="logo">

          </a>
        </div>
        <div id="nav-items" class="nav-items">
          <a onclick="closeDrawer()" id="closeDrawerIcon">
            <img src="<?php bloginfo('template_directory');?>/icons/ic_close.svg" alt="">
          </a>
          <a id="nav1" href="<?php bloginfo( 'wpurl' );?>">Home</a>
          <a id="nav2" href="<?php bloginfo( 'wpurl' );?>/category/pigshit">Pigshit</a>
          <a id="nav3" href="#">Hard Talk</a>
          <a id="nav4" href="#">Hard Vision</a>
          <a id="nav5" href="#">Audio Agression</a>
          <a id="nav6" href="#">BallBuster Babes</a>
          <a id="nav7" href="#">Guitarist 2 Guitarist</a>
          <a id="nav8" href="#">Hard Features</a>
          <a id="nav9" href="#">Music Underground</a>
          <a id="nav10" href="#">Metal to the Core!</a>
          <div class="nav-social">
            <a href="https://www.facebook.com/BallBusterMusic/" class="nav-facebook">
              <img src="<?php bloginfo('template_directory');?>/icons/facebook.svg" alt="Facebook">
            </a>
            <a href="https://twitter.com/BallBusterMusic/" class="nav-twitter">
              <img src="<?php bloginfo('template_directory');?>/icons/twitter.svg" alt="">
            </a>
          </div>
        </div>
      </div>
    </header>
