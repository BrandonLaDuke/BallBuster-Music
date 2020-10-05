<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><? echo single_cat_title(); ?> <? echo wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">

    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/main.css">
    <?php if (is_front_page()) {?>
      <!-- Only include on home page -->
      <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/carousel.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/home.css">
    <?php } else if (is_category($category) or is_author($author)) { ?>
      <!-- Only include on author or category pages -->
      <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/author.css">

    <?php } ?>

    <!-- Ad -->
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
      (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-8458877549325827",
        enable_page_level_ads: true
      });
    </script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>



    <!-- Analytics -->
		<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-66276915-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-66276915-2');
    </script>
    <meta property="fb:app_id" content="255026351810383" />
    <script type='text/javascript' src='//platform-api.sharethis.com/js/sharethis.js#property=5c971c7e9b272f00119ab472&product=inline-share-buttons' async='async'></script>
    <?php wp_head() ?>
  </head>
  <body>
    <!-- Facebook Comments Intigration -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=255026351810383&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <header>
      <div class="header-logo-container" style="background-image:url(<?php bloginfo('template_directory');?>/images/header-background.jpg)">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <?php
          if (is_front_page()) { ?>
            <img src="<?php bloginfo('template_directory');?>/icons/bbmlogo.png" alt="BallBuster Music Logo">
          <?php } else { ?>
            <img src="<?php bloginfo('template_directory');?>/icons/bbmlogo-inline.png" alt="BallBuster Music Logo">
          <?php } ?>
        </a>
      </div>
      <nav role="navigation" class="active">
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/columns/" aria-haspopup="true">Columns</a>
            <ul class="dropdown" aria-label="submenu">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/audioagression/">Audio Agression</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/axebanger/">Axe Banger</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/hauntedhappenings/">Haunted Happenings</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/leftfield/">Left Field</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/locomotionmadness/">LocoMotion Madness</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/metaltothecore/">Metal To The Core!</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/pigshit/">PIGSHIT!</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/spotlight/">Spotlight</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/unsignedpubliceye/">Unsigned Public Eye</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/womeninrock/">Women In Rock</a></li>
            </ul>
          </li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/reviews/" aria-haspopup="true">Reviews</a>
            <ul class="dropdown" aria-label="submenu">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/hardfeatures/">Hard Features</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/hardread/">Hard Read</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/hardvision/">Hard Vision</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/quicktiques/">Quick Tiques!</a></li>
            </ul>
          </li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/interviews/" aria-haspopup="true">Interviews</a>
            <ul class="dropdown" aria-label="submenu">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/guitarist2guitarist/">Guitarist 2 Guitarist</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/hardtalk/">Hard Talk</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/quickchat/">Quick Chat!</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/voiceoftheunderground/">Voice of the Underground</a></li>
            </ul>
          </li>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>newsletter/" aria-haspopup="false">Newsletter</a>
          <!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about/" aria-haspopup="true">About</a> -->
            <!-- <ul class="dropdown" aria-label="submenu">
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>history/">History</a></li>
              <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>writers/">Writers</a></li>


            </ul> -->
          <!-- </li> -->
        </ul>
        <div class="search">
          <a href="https://www.facebook.com/BallBusterMusic/">Facebook</a>
          <a href="https://twitter.com/BallBusterMusic">Twitter</a>
          <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <label for="<?php echo $unique_id; ?>">
              <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'ballbuster-v3' ); ?></span>
            </label>
            <input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'ballbuster-v3' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
            <button type="submit" class="search-submit">Search</button>
          </form>
          <div style="margin-left:15px" id="google_translate_element"></div>
        </div>
      </nav>
    </header>
