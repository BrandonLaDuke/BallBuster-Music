<?php get_header(); ?>

<section class="carousel-container">
  <div class="carousel carousel-inner" style="color:red;">
  <?php
  $query = new WP_Query( 'posts_per_page=12' );
  $carousel_number = 1;
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
      $query->the_post(); ?>

    <div class="slide" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
    <a href="<?php the_permalink() ?>" class="s-container">

        <span class="title category-title"><?php $category = get_the_category();
   echo $category[0]->cat_name; ?></span>

        <h1 class="title headline"><?php the_title(); ?></h1>

        <p class="title author-title">By <?php the_author(); ?></p>
        <p class="date"><?php the_date() ?></p>
        <a href="#"></a>
    </a>
  </div>
  <?php $carousel_number = $carousel_number + 1;
      }
     } ?>
  </div>
</section>





  <style media="screen">
    #announcementText {
      text-shadow:2px 2px 2px black;
      text-align:center;
      min-height:220px;
      display:flex;
    }
    @media (min-width:800px) {
      #announcementText {
        height: 90%;
      }
    }
  </style>
  <!-- <div class="box-2 announcements" style="background-image:url(http://ballbustermusic.com/images/ballbuster/hauntedhappenings/2016/10/james-montgomery.jpg); background-size:cover;">
    <img width="100%" src="http://www.ballbustermusic.com/images/ballbuster/hauntedhappenings/haunted_happenings.jpg" alt="">
    <br>
    <div id="announcementText" >
      <div style="margin:auto;">
        <h1 style="text-align:center;">Haunted Happenings Revisited!</h1>
        <h2 style="text-align:center; font-size:24px;">Blues Legend "JAMES MONTGOMERY"</h2>
      <p>“I stay in haunted houses and inns frequently”</p>
      <a class="btn" href="http://www.ballbustermusic.com/bbm/hauntedhappenings/james_montgomery">Read more</a>
    </div>
    </div>
  </div> -->
</section>

<section id="categoryLists">
  <div class="list-1">

    <!-- Temporaly ad placement -->

    <!-- End Temporaly ad placement -->



    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/hauntedhappenings/">Haunted Happenings</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=hauntedhappenings' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?>






  </div>
  <div class="list-2">

    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/pigshit/">Pigshit</a></h2>

      <?php
      $query = new WP_Query( 'posts_per_page=4' . '&category_name=pigshit' ); ?>

      <?php
      if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
      $query->the_post(); ?>
      <a href="<?php the_permalink() ?>" class="suggested-content">
        <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
        </div>
        <div class="suggested-content-txt">
          <span class="title"><?php the_title(); ?></span>
          <span>By <?php the_author(); ?></span>
          <span><?php the_date() ?></span>
        </div>
      </a>
      <?php } ?>
    <?php } ?>





  </div>
  <div class="list-3">

    <!-- Temporaly ad placement -->
    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/axebanger/">Axe Banger: The Guitarist Showcase</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=axebanger' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?>
    <!-- End Temporaly ad placement -->




  </div>
  <div class="list-4">
    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/hardtalk/">Hard Talk</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=hardtalk' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?>

  </div>
  <div class="list-5">
    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/hardvision/">Hard Vision</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=hardvision' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?>
  </div>
  <div class="list-6">
    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/guitarist2guitarist/">Guitarist 2 Guitarist</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=guitarist2guitarist' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?>
  </div>
  <div class="list-7">
    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/axebanger/">Axe Banger</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=axebanger' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?>
  </div>
  <div class="list-8">

    <!-- List 8 -->

    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/quicktiques/">Quick Tiques!</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=quicktiques' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?>
  </div>
  <div class="list-9">
    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/unsignedpubliceye/">Unsigned Public Eye</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=unsignedpubliceye' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?>
  </div>
  <div class="list-10">
    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/voiceoftheunderground/">Voice of the Underground</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=voiceoftheunderground' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?>
  </div>
  <div class="list-11">
    <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/hardfeatures/">Hard Features</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=hardfeatures' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?>
  </div>
  <div class="list-12">

   <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/metaltothecore/">Metal to the Core!</a></h2>

      <?php
      $query = new WP_Query( 'posts_per_page=4' . '&category_name=metaltothecore' ); ?>

      <?php
    if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
    $query->the_post(); ?>
      <a href="<?php the_permalink() ?>" class="suggested-content">
        <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
        </div>
        <div class="suggested-content-txt">
          <span class="title"><?php the_title(); ?></span>
          <span>By <?php the_author(); ?></span>
          <span><?php the_date() ?></span>
        </div>
      </a>
    <?php } ?>
    <?php } ?>





    <!-- <h2><a href="<?php echo esc_url( home_url( '/' ) ); ?>category/hauntedhappenings/">Haunted Happenings</a></h2>

    <?php
    $query = new WP_Query( 'posts_per_page=4' . '&category_name=hauntedhappenings' ); ?>

    <?php
if ( $query->have_posts() ) {
while ( $query->have_posts() ) {
 $query->the_post(); ?>
    <a href="<?php the_permalink() ?>" class="suggested-content">
      <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
      </div>
      <div class="suggested-content-txt">
        <span class="title"><?php the_title(); ?></span>
        <span>By <?php the_author(); ?></span>
        <span><?php the_date() ?></span>
      </div>
    </a>
  <?php } ?>
<?php } ?> -->
  </div>
</section>
<!-- <section id="columns">
  <div class="tri-title">
    <h1>Columns</h1>
     Add pigshit, metal to the core and other columns here
  </div>
</section> -->

<section id="section-3">

  <?php
  //Create a random number to select a back in the day images
  $rand = mt_rand(1,32);
  if ($rand == 1 or $rand == 17) {
    $bitd_name = "Doro Pesch";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/1.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/1.jpg";
  } else if ($rand == 2 or $rand == 18) {
    $bitd_name = "Bruce Dickinson (Iron Maiden)";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/2.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/2.jpg";
    $custom_style = "background-position:top";
  } else if ($rand == 3 or $rand == 19) {
    $bitd_name = "DIO";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/3.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/3.jpg";
  } else if ($rand == 4 or $rand == 20) {
    $bitd_name = "Halford";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/4.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/4.jpg";
  } else if ($rand == 5 or $rand == 21) {
    $bitd_name = "Deep Purple";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/5.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/5.jpg";
  } else if ($rand == 6 or $rand == 22) {
    $bitd_name = "Peter Baltes (Accept) & Michael Hannon (Hilljack)";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/6.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/6.jpg";
  } else if ($rand == 7 or $rand == 23) {
    $bitd_name = "Dio & Tracy G.";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/7.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/7.jpg";
  } else if ($rand == 8 or $rand == 24) {
    $bitd_name = "John Bush";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/8.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/8.jpg";
  } else if ($rand == 9 or $rand == 25) {
    $bitd_name = "Michael Sweet (Stryper)";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/9.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/9.jpg";
  } else if ($rand == 10 or $rand == 26) {
    $bitd_name = "Phil Naro";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/10.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/10.jpg";
  } else if ($rand == 11 or $rand == 27) {
    $bitd_name = "Christian Passos (Wizzards)";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/11.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/11.jpg";
  } else if ($rand == 12 or $rand == 28) {
    $bitd_name = "Tropa De Shock";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/12.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/12.jpg";
  } else if ($rand == 13 or $rand == 29) {
    $bitd_name = "Ty Tabor (King's X)";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/13.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/13.jpg";
    $custom_style = "background-position:top";
  } else if ($rand == 14 or $rand == 30) {
    $bitd_name = "Edwardos B. (Editor Of Strike Magazine, Brazil)";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/14.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/14.jpg";
  } else if ($rand == 15 or $rand == 31) {
    $bitd_name = "John Sykes (Whitesnake)";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/15.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/15.jpg";
    $custom_style = "background-position:top";
  } else if ($rand == 16 or $rand == 32) {
    $bitd_name = "Michael Hannon (American Dog) & Chris Worley (Jackyl)";
    $bitd_img = "background-image: url(wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/16.jpg)";
    $bitd_url = "wp-content/themes/ballbuster-v3.0.23/images/back-in-the-day/16.jpg";
  }
   ?>

  <div class="bitd-overlay">
    <div class="title">
      <h2>Back in the Day!</h2>
      <h3><?php echo $bitd_name; ?></h3>
    </div>
  </div>
  <a href="<?php echo $bitd_url; ?>"><div class="bitd">
    <div style="<?php echo $bitd_img; ?>; <?php echo $custom_style; ?>"></div>
  </div></a>
</section>

<section id="section-4">

  <?php
  $args = array(
	'date_query' => array(
		array(
			'before'    => array(
				'year'  => 2017,
				'month' => 1,
				'day'   => 1,
			),
			'inclusive' => true,
		),
	),
  'orderby' => 'rand',
	'posts_per_page' => 1,
);
$query = new WP_Query( $args );
if ( $query->have_posts() ) {
$query->the_post(); ?>

    <div class="bitd-overlay-right">
      <div class="title">
        <h2>From the Archives</h2>
        <h3><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>" class="btn">Read more</a>
      </div>
    </div>
    <div class="bitd-right">
      <div style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
    </div>
  <?php } ?>
</section>

<script type="text/javascript">
var slide1 = document.getElementById("carousel-1").checked = true;
var slide2 = document.getElementById("carousel-2").checked = false;
var slide3 = document.getElementById("carousel-3").checked = false;
var slide4 = document.getElementById("carousel-4").checked = false;
var slide5 = document.getElementById("carousel-5").checked = false;
var slide6 = document.getElementById("carousel-6").checked = false;
</script>
<?php get_footer(); ?>
