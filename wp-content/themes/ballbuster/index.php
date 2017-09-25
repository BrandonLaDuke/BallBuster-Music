<?php get_header(); ?>
<div class="bannerImg" style="background-color:#000">
  <img style="width:100%;" src="<?php bloginfo('template_directory');?>/images/home/BallBusterMusicHomeImage2017.jpg" alt="BallBuster Music Banner" />
  <h3 style="text-align:center; color:#fff; font-weight:100; padding:5px;">Since 1998 | Over a quarter million views in more than 70+ countries. | BallBusterMusic.com | Come Hang With Us!</h3>
</div>


<!-- Experimental Grid layout for new posts -->
<div class="new-grid">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <a href="<?php the_permalink(); ?>" class="new-post">
        <div class="new-post-img">
          <div class="new-post-img-src" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
        </div>

          <div class="new-post-des">
            <h1><?php the_title(); ?></h1>
            <p class="post-excert"><?php the_excerpt(); ?></p>
            <p>By <?php the_author(); ?></p>
            <p><?php the_date(); ?></p>
          </div>

      </a>

  <?php
    endwhile;
    endif;
  ?>
</div>



<style>
.musicunderground {background-image: url(<?php bloginfo('template_directory');?>/images/home/BallBusterMusicHomeImage2017.jpg);}
</style>
<div class="musicunderground">
  <div class="overlay">
    <div class="container">
      <div class="left">
        <h1>Music Underground!</h1>
        <h3>-- January/Febuary 2017 --</h3>
        <h3 style="margin-bottom: 5px;">All Things Rock! - All Things Metal!</h3>
        <h4 style="margin-bottom: 21px;">(Music News, Press Releases, Tour Dates)</h4>
      </div>
      <div class="right">
        <a href="#">
          <h2 style="color: gold;">KILLERBEE / POKERFACE / NODE / IGNITOR / DAVID ELLEFSON / TRAUMA / HEAVY BABY SEA SLUGS / DEAD BY WEDNESDAY / MEGA COLOSSUS / DEATH VALLEY DRIVER / EVHO</h2>
        </a>
      </div>
    </div>
  </div>
</div>


<!-- Classic Archives -->
<div class="classicArchives">
  <div class="cAHeader">
    <h2>Classic Archives: Back in the Day!</h2>
  </div>
  <div class="cAFlex">

      <div class="cAPost" style="background-image:url(http://www.ballbustermusic.com/images/ballbuster/hardtalk/2002/05/diamondhead/Diamondhead1.jpg)">
        <a href="#">
          <h2 class="overlay">Hard Talk with SEAN HARRIS OF DIAMOND HEAD fron 2002</h2>
</a>
      </div>
      <div class="cAPost" style="background-image:url(http://www.ballbustermusic.com/images/ballbuster/hardtalk/2006/01/la_guns.jpg)">
<a href="#">
          <h2 class="overlay">Hard Talk with PHIL LEWIS OF LA GUNS from 2006</h2>
</a>
      </div>

  </div>
</div>

<div class="back_in_day">
  <h1>Look who's read BallBuster!</h1>
  <div class="tb-image-grid">
    <div>
      <img src="<?php bloginfo('template_directory');?>/images/who_has_read_ballbuster/deep_purple.jpg" alt="" title="Steve Moorse">
      <h2>Steve Moorse</h2>
    </div>
    <div>
      <img src="<?php bloginfo('template_directory');?>/images/who_has_read_ballbuster/bruce_dickinson.jpg" alt="" title="Steve Moorse">
      <h2>Bruce Dickinson</h2>
    </div>
    <div>
      <img src="<?php bloginfo('template_directory');?>/images/who_has_read_ballbuster/doug_pinnick.jpg" alt="" title="Doug Pinnick">
      <h2>Doug Pinnick <span>(King's X)</span></h2>
    </div>
    <div>
      <img src="<?php bloginfo('template_directory');?>/images/who_has_read_ballbuster/deep_purple.jpg" alt="" title="Steve Moorse">
      <h2>Steve Moorse</h2>
    </div>
  </div>


  <!-- <div class="half-and-half" bg-color="glass">
    <div class="half bid-text">
      <h3>Back in the day</h3>
      <h1>DEEP PURPLE</h1>
    </div>
    <div class="half bid-img">
      <iron-image src="http://www.ballbustermusic.com/images/ballbuster/who_has_read_ballbuster/deep_purple.jpg"></iron-image>
    </div>
  </div>
  <div class="half-and-half bid-right" bg-color="glass">
    <div class="half bid-img">
      <iron-image src="http://www.ballbustermusic.com/images/ballbuster/who_has_read_ballbuster/mini/steve_moorse.png"></iron-image>
    </div>
    <div class="half bid-text">
      <h3>Back in the day</h3>
      <h1>Steve Moorse</h1>
    </div>
  </div> -->
</div>

<!-- Post highlights and Back in the day still needed to be added. -->


<div class="counter">
  <center>
    <p>You are visitor #</p>
    <img alt="counter" src="cgi-sys/Count.cgi?df=ballbust.dat|display=Counter|ft=0|md=6|frgb=100;139;216|dd=C">
  </center>
  <br><br>
  <h3 style="text-align:center; color:#fff;">Stay tuned for Archives and new feature updates, MUCH MORE TO COME!!!</h3>
  <br><br>
</div>




<?php get_footer(); ?>
