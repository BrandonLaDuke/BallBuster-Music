<?php get_header(); ?>

<img id="banner-image" src="<?php the_field('banner_image'); ?>" alt="" />
<div style="text-align:center; padding:5px auto 15px auto; font-size: 1.3em;">
  <p>Since 1998 | Over a quarter million views in more than 70+ countries. | BallBusterMusic.com | Come Hang With Us!</p>
</div>
<div class="carousel">
  <div class="dots">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span>
    <span class="dot" onclick="currentSlide(6)"></span>
    <span class="dot" onclick="currentSlide(7)"></span>
    <span class="dot" onclick="currentSlide(8)"></span>
    <span class="dot" onclick="currentSlide(9)"></span>
    <span class="dot" onclick="currentSlide(10)"></span>
    <span class="dot" onclick="currentSlide(11)"></span>
    <span class="dot" onclick="currentSlide(12)"></span>
    <span class="dot" onclick="currentSlide(13)"></span>
    <span class="dot" onclick="currentSlide(14)"></span>
    <span class="dot" onclick="currentSlide(15)"></span>
  </div>

  <?php
    // the query
    $newPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-15)); ?>
    <?php if ( $newPosts->have_posts() ) : while ( $newPosts->have_posts() ) : $newPosts->the_post();

    //count == number of posts to display
    static $count = 0;
    if ($count == "15") { break; }
      else { ?>
        <div class="slide fade" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
          <div class="standard-slide-with-link" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">

          </div>
          <div class="slide-container">

              <div class="slide-photo" style="background-image:url(<?php the_post_thumbnail_url(); ?>);"></div>

              <div class="mFix">
                <h1><?php the_title(); ?></h1>
                <h5><?php the_author(); ?></h5>
                <p><?php the_excerpt(); ?></p>
                <a class="btn btn-raised btn-clear" href="<?php the_permalink(); ?>">Read</a>
              </div>

          </div>
        </div>
      <?php $count++; } ?>
    <?php endwhile; ?>

  <?php endif; ?>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<!-- End of Carousel -->

<!-- Music Underground -->
<div class="mu">
  <?php
  //The Query
  $newPosts = new WP_Query(array('post_type'=>'post', 'category_name'=>'musicunderground', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
  <?php if ( $newPosts->have_posts() ) : while ( $newPosts->have_posts() ) : $newPosts->the_post();

  //count == number of posts to display
  static $count = 0;
  if ($count == "1") { break; }
    else { ?>
  <div class="">
    <h2>Music Underground</h2>
    <h4>All things rock! All things metal!</h4>
  </div>
  <div class="">
    <h4><?php the_date(); ?></h4>
    <h3><?php the_title(); ?></h3>
  </div>
  <?php $count++; } ?>
<?php endwhile; ?>

<?php endif; ?>
</div>


<!-- New Posts for specific areas -->
<div class="row">
  <div class="grid">
    <div class="grid-section">
      <h2>Hard Talk</h2>
      <?php
      //The Query
      $newPosts = new WP_Query(array('post_type'=>'post', 'category_name'=>'hardtalk', 'post_status'=>'publish', 'posts_per_page'=>-5)); ?>
      <?php if ( $newPosts->have_posts() ) : while ( $newPosts->have_posts() ) : $newPosts->the_post();

      //count == number of posts to display
      static $count = 0;
      if ($count == "5") { break; }
        else { ?>

          <!-- Template -->
          <a href="<?php the_permalink(); ?>" class="card">
            <div class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

            </div>
            <h3><?php the_title(); ?></h3>
          </a>
          <!-- End Template -->

          <?php $count++; } ?>
        <?php endwhile; ?>

      <?php endif; ?>
      <a class="btn btn-clear btn-wide" href="#">View more</a>
    </div>
    <div class="grid-section">
      <h2>Hard Vision</h2>
      <?php
      //The Query
      $newPosts = new WP_Query(array('post_type'=>'post', 'category_name'=>'hardvision', 'post_status'=>'publish', 'posts_per_page'=>-5)); ?>
      <?php if ( $newPosts->have_posts() ) : while ( $newPosts->have_posts() ) : $newPosts->the_post();

      //count == number of posts to display
      static $count = 0;
      if ($count == "5") { break; }
        else { ?>

          <!-- Template -->
          <a href="<?php the_permalink(); ?>" class="card">
            <div class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

            </div>
            <h3><?php the_title(); ?></h3>
          </a>
          <!-- End Template -->

          <?php $count++; } ?>
        <?php endwhile; ?>

      <?php endif; ?>
      <a class="btn btn-clear btn-wide" href="#">View more</a>
    </div>
    <div class="grid-section">
      <h2>Hard Features</h2>
      <?php
      //The Query
      $newPosts = new WP_Query(array('post_type'=>'post', 'category_name'=>'hardfeatures', 'post_status'=>'publish', 'posts_per_page'=>-5)); ?>
      <?php if ( $newPosts->have_posts() ) : while ( $newPosts->have_posts() ) : $newPosts->the_post();

      //count == number of posts to display
      static $count = 0;
      if ($count == "5") { break; }
        else { ?>

          <!-- Template -->
          <a href="<?php the_permalink(); ?>" class="card">
            <div class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

            </div>
            <h3><?php the_title(); ?></h3>
          </a>
          <!-- End Template -->

          <?php $count++; } ?>
        <?php endwhile; ?>

      <?php endif; ?>
      <a class="btn btn-clear btn-wide" href="#">View more</a>
    </div>
    <div class="grid-section">
      <h2>Guitarist 2 Guitarist</h2>
      <?php
      //The Query
      $newPosts = new WP_Query(array('post_type'=>'post', 'category_name'=>'guitarist2guitarist', 'post_status'=>'publish', 'posts_per_page'=>-5)); ?>
      <?php if ( $newPosts->have_posts() ) : while ( $newPosts->have_posts() ) : $newPosts->the_post();

      //count == number of posts to display
      static $count = 0;
      if ($count == "5") { break; }
        else { ?>

          <!-- Template -->
          <a href="<?php the_permalink(); ?>" class="card">
            <div class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

            </div>
            <h3><?php the_title(); ?></h3>
          </a>
          <!-- End Template -->

          <?php $count++; } ?>
        <?php endwhile; ?>

      <?php endif; ?>
      <a class="btn btn-clear btn-wide" href="#">View more</a>
    </div>
    <div class="grid-section">
      <h2>Audio Aggression</h2>
      <?php
      //The Query
      $newPosts = new WP_Query(array('post_type'=>'post', 'category_name'=>'audioaggression', 'post_status'=>'publish', 'posts_per_page'=>-5)); ?>
      <?php if ( $newPosts->have_posts() ) : while ( $newPosts->have_posts() ) : $newPosts->the_post();

      //count == number of posts to display
      static $count = 0;
      if ($count == "5") { break; }
        else { ?>

          <!-- Template -->
          <a href="<?php the_permalink(); ?>" class="card">
            <div class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

            </div>
            <h3><?php the_title(); ?></h3>
          </a>
          <!-- End Template -->

          <?php $count++; } ?>
        <?php endwhile; ?>

      <?php endif; ?>
      <a class="btn btn-clear btn-wide" href="#">View more</a>
    </div>
    <div class="grid-section">
      <h2>Pigshit</h2>
      <?php
      //The Query
      $newPosts = new WP_Query(array('post_type'=>'post', 'category_name'=>'pigshit', 'post_status'=>'publish', 'posts_per_page'=>-5)); ?>
      <?php if ( $newPosts->have_posts() ) : while ( $newPosts->have_posts() ) : $newPosts->the_post();

      //count == number of posts to display
      static $count = 0;
      if ($count == "5") { break; }
        else { ?>

          <!-- Template -->
          <a href="<?php the_permalink(); ?>" class="card">
            <div class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

            </div>
            <h3><?php the_title(); ?></h3>
          </a>
          <!-- End Template -->

          <?php $count++; } ?>
        <?php endwhile; ?>

      <?php endif; ?>
      <a class="btn btn-clear btn-wide" href="#">View more</a>
    </div>
    <div class="grid-section">
      <h2>Metal to the Core!</h2>
      <?php
      //The Query
      $newPosts = new WP_Query(array('post_type'=>'post', 'category_name'=>'metaltothecore', 'post_status'=>'publish', 'posts_per_page'=>-5)); ?>
      <?php if ( $newPosts->have_posts() ) : while ( $newPosts->have_posts() ) : $newPosts->the_post();

      //count == number of posts to display
      static $count = 0;
      if ($count == "5") { break; }
        else { ?>

          <!-- Template -->
          <a href="<?php the_permalink(); ?>" class="card">
            <div class="thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

            </div>
            <h3><?php the_title(); ?></h3>
          </a>
          <!-- End Template -->

          <?php $count++; } ?>
        <?php endwhile; ?>

      <?php endif; ?>
      <a class="btn btn-clear btn-wide" href="#">View more</a>
    </div>

  </div>
</div>

<!-- BallBuster Babes goes here-->

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

<!-- Look who read ballbuster goes here -->


<script src="<?php bloginfo('template_directory');?>/js/carousel.js" charset="utf-8"></script>

<?php get_footer(); ?>
