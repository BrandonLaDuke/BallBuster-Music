<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo single_cat_title(); echo wp_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/style.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/slick/slick-theme.css"/>


    <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/master.css">

    <!-- <link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/main.css"> -->
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

      <header class="site-header" id="site-header">
        <div id="menu-btn" class="menu-btn">
          <a href="#">
            <img src="<?php bloginfo('template_directory');?>/icons/menu.svg" width="55px" style="padding:10px" alt="">
            <span style="padding-left:6px; margin-top:5px;">Menu</span>
          </a>
        </div>
        <div class="logo">
          <a href="#">
            <img src="<?php bloginfo('template_directory');?>/images/ballbusterlogo.png" alt="">
          </a>
        </div>
        <div id="nav-drawer" class="header-middle-area">
          <!-- Navigation -->
          <nav class="main-nav">
            <ul class="main-sections">
              <?php require 'navbar.php'; ?>
            </ul>
          </nav>
        </div>
        <!-- Search -->
        <div class="search" role="search" id="search-area">
          <a href="#">
            <img src="<?php bloginfo('template_directory');?>/icons/search.svg" width="55px" alt="">
            <span>Search</span>
          </a>
        </div>
    </header>
