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
          <a class="menuBtn" onclick="openDrawer()"><img src="<?php bloginfo('template_directory');?>/icons/ic_menu.svg" alt="Menu"></a>
          <a href="<?php bloginfo( 'wpurl' );?>" class="logo">

          </a>
        </div>
        <div id="nav-items" class="nav-items">
          <a onclick="closeDrawer()" id="closeDrawerIcon">
            <img src="<?php bloginfo('template_directory');?>/icons/ic_close.svg" alt="">
          </a>
          <a id="nav1" href="#">Home</a>
          <a id="nav2" href="#">Pigshit</a>
          <a id="nav3" href="#">Hard Talk</a>
          <a id="nav4" href="#">Hard Vision</a>
          <a id="nav5" href="#">Audio Agression</a>
          <a id="nav6" href="#">BallBuster Babes</a>
          <a id="nav7" href="#">Guitarist 2 Guitarist</a>
          <a id="nav8" href="#">Hard Features</a>
          <a id="nav9" href="#">Music Underground</a>
          <a id="nav10" href="#">Metal to the Core!</a>
          <div class="nav-social">
            <a href="" class="nav-facebook">
              <img src="<?php bloginfo('template_directory');?>/icons/facebook.svg" alt="Facebook">
            </a>
            <a href="" class="nav-twitter">
              <img src="<?php bloginfo('template_directory');?>/icons/twitter.svg" alt="">
            </a>
            <a href="" class="nav-googleplus">
              <img src="<?php bloginfo('template_directory');?>/icons/googleplus.svg" alt="">
            </a>
          </div>
        </div>
        <div class="nav-item-row">
          <div class="nav-items-row">
            <a id="nav1" href="#"><p>Pigshit</p></a>
            <a id="nav2" href="#"><p>Hard Talk</p></a>
            <a id="nav3" href="#"><p>Hard Vision</p></a>
            <a id="nav4" href="#"><p>Audio Agression</p></a>
            <a id="nav5" href="#"><p>BallBuster Babes</p></a>
            <a id="nav6" href="#"><p>Guitarist 2 Guitarist</p></a>
            <a id="nav7" href="#"><p>Hard Features</p></a>
            <a id="nav8" href="#"><p>Music Underground</p></a>
            <a id="nav9" href="#"><p>Metal to the Core!</p></a>
          </div>
          <div class="nav-translate-row">
            <div id="google_translate_element"></div><script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
            </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


          </div>
        </div>
      </div>
    </header>
