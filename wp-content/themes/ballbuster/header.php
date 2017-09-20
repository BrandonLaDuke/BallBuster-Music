<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory');?>/images/logo/ballbustermusic_icon.png" />

    <script src="<?php bloginfo('template_directory');?>/bower_components/webcomponentsjs/webcomponents-lite.js"></script>
    <link rel="import" href="<?php bloginfo('template_directory');?>/bower_components/app-layout/app-header/app-header.html">
    <link rel="import" href="<?php bloginfo('template_directory');?>/bower_components/app-layout/app-toolbar/app-toolbar.html">
    <link rel="import" href="<?php bloginfo('template_directory');?>/bower_components/app-layout/app-scroll-effects/effects/waterfall.html">
    <link rel="import" href="<?php bloginfo('template_directory');?>/bower_components/iron-icons/iron-icons.html">
    <link rel="import" href="<?php bloginfo('template_directory');?>/bower_components/app-layout/app-drawer-layout/app-drawer-layout.html">
    <link rel="import" href="<?php bloginfo('template_directory');?>/bower_components/app-layout/app-header-layout/app-header-layout.html">
    <link rel="import" href="<?php bloginfo('template_directory');?>/bower_components/simple-carousel/simple-carousel.html">
    <link rel="import" href="<?php bloginfo('template_directory');?>/bower_components/paper-icon-button/paper-icon-button.html">
    <link rel="import" href="<?php bloginfo('template_directory');?>/bower_components/paper-material/paper-material.html">
    <link rel="import" href="<?php bloginfo('template_directory');?>/bower_components/iron-image/iron-image.html">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/styles.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/back_in_the_day.css">

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>
  <body>
    <app-drawer-layout force-narrow fullbleed>
      <app-drawer swipe-open>
        <app-toolbar>Menu</app-toolbar>
        <?php wp_list_categories( '&title_li=' ); ?>
      </app-drawer>
      <app-header-layout has-scrolling-region>
        <app-header condenses reveals effects="waterfall">
          <app-toolbar>
            <paper-icon-button icon="menu" drawer-toggle></paper-icon-button>
            <div title><a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a><span> | <?php echo get_bloginfo( 'description' );?></span></div>
            <div class="article-title" id="google_translate_element"></div>
          </app-toolbar>
        </app-header>
          <div>
