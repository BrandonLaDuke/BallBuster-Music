<?php get_header(); ?>

<div id="sonic-grid">

  <div class="sonic-featured">


  <?php
  $query = new WP_Query( 'posts_per_page=1' );
  if ( $query->have_posts() ) {
    $not_in_next_two = array();
    while ( $query->have_posts() ) {
      $query->the_post(); ?>
  <article class="sonic-featured-post">
    <a href="<?php the_permalink() ?>">
    <div class="featured-post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
    <div class="post-text-block">


      <span class="cat-label"><?php $category = get_the_category();
            echo $category[0]->cat_name; ?></span>
            <br>
      <h1><?php the_title(); ?></h1>
      <div><?php the_excerpt(); ?></div>
      <span>by <?php the_author(); ?> · </span>
      <span><?php the_date(); ?></span>
    </a>
    </div>
  </article> <!-- .sonic-featured -->
  <?php
      $not_in_next_two[] = get_the_ID();
    }
  } ?>

  <div class="sonic-latest-s stream-1 stream-0">
<?php
  $next_args = array(
    'posts_per_page'=>3,
    'post__not_in'=>$not_in_next_two
  );
  $query = new WP_Query( $next_args );
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
      $query->the_post(); ?>
      <!-- Start Repeating Post Loop -->
      <hr>
      <article class="post">
        <a href="<?php the_permalink() ?>">
          <div class="post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
          <div class="post-text-area">
            <span class="cat-label"><?php $category = get_the_category();
            echo $category[0]->cat_name; ?></span>
            <h2><?php the_title(); ?></h2>
            <div class="excerpt"><?php the_excerpt(); ?></div>
            <span class="author-title">By <?php the_author(); ?><br><?php the_date() ?></span>
          </div>
        </a>
      </article>
      <!--  End Repeating Post Loop  -->
<?php
      $not_in_next_two[] = get_the_ID();
    }
  } ?>

  </div> <!-- .sonic-latest -->
</div>
<div class="sonic-latest">
  <div class="sonic-latest-heading">
    <div class="section-title">
      <h2 class=category-heading>The Latest</h2>
      <div class="current-date">
July 17, 2021</div>
    </div>
  </div>
  <div class="latest-posts round-tn">
<?php
$next_args = array(
  'posts_per_page'=>8,
  'post__not_in'=>$not_in_next_two
);
$query = new WP_Query( $next_args );
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post(); ?>
    <!-- Start Repeating Post Loop -->
    <hr>
    <article class="post">
      <a href="<?php the_permalink() ?>">

        <div class="post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
        <div class="latest-right">
          <span class="cat-label"><?php $category = get_the_category();
          echo $category[0]->cat_name; ?></span>
          <h2><?php the_title(); ?></h2>
          <span class="author-title">By <?php the_author(); ?><br><?php the_date() ?></span>
        </div>
      </a>
    </article>
    <!--  End Repeating Post Loop  -->
<?php
    $not_in_next_two[] = get_the_ID();
  }
} ?>

  </div>
</div> <!-- .sonic-latest -->



  <div class="social-area">
    <div class="newsletter">
      <p><span>Join the Newsletter</span> and stay up to date on all things BallBuster Music!</p>
      <a href="#">Subscribe ></a>
    </div>
    <br>
    <div class="our-partners">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/mvd.jpeg" alt="MVD">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/metalblade.jpeg" alt="metalblade">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/SME-logo-on-black-background.jpg" alt="SME">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/roadrunnerheader.jpg" alt="Roadrunner records">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/century-media.jpeg" alt="Centry Media">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/labels-columbia.jpeg" alt="Columbia Records">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/legacy.jpeg" alt="Legacy">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/cleopatra.jpeg" alt="cleopatra">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/acetate.jpeg" alt="Acetate">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/puresteel.jpg" alt="puresteel">
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/07/deadlinemusic.jpg" alt="Deadline Music Records">
    </div>
    <div class="hit-counter">
      <h2>You are visitor<h2>
      <?php echo do_shortcode("[srs_total_visitors]"); ?>
    </div>
  </div>


</div> <!-- #sonic-grid -->

<div class="three-equal-grid">
  <!-- Three coloumn Layout -->
  <div class="interviews stream-1 round-tn">
    <h3>Interviews</h3>
    <?php
    $next_args = array(
      'posts_per_page'=>1,
      'category_name'=>"interviews"
    );
    $query = new WP_Query( $next_args );
    if ( $query->have_posts() ) {
      $not_in_next_two = array();
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
    <article class="sonic-featured-post tri-grid-imgfix">
      <a href="<?php the_permalink() ?>">
      <div class="featured-post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
      <div class="post-text-block">


        <span class="cat-label"><?php $category = get_the_category();
              echo $category[0]->cat_name; ?></span>
              <br>
        <h1><?php the_title(); ?></h1>
        <span class="author-title">by <?php the_author(); ?> · </span>
        <span><?php the_date(); ?></span>
      </a>
      </div>
    </article> <!-- .sonic-featured -->
    <?php
        $not_in_prev[] = get_the_ID();
      }
    }
      $next_args = array(
        'posts_per_page'=>3,
        'category_name'=>"interviews",
        'post__not_in'=>$not_in_prev
      );
      $query = new WP_Query( $next_args );
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post(); ?>
          <!-- Start Repeating Post Loop -->
          <hr>
          <article class="post">
            <a href="<?php the_permalink() ?>">
              <div class="post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
              <div class="post-text-area">
                <span class="cat-label"><?php $category = get_the_category();
                echo $category[0]->cat_name; ?></span>
                <h2><?php the_title(); ?></h2>
                <span class="author-title">By <?php the_author(); ?><br><?php the_date() ?></span>
              </div>
            </a>
          </article>
          <!--  End Repeating Post Loop  -->
    <?php
          $not_in_prev[] = get_the_ID();
        }
      } ?>
  </div>
  <div class="reviews stream-1 round-tn">
    <h3>Reviews</h3>
    <?php
    $next_args = array(
      'posts_per_page'=>1,
      'category_name'=>"reviews"
    );
    $query = new WP_Query( $next_args );
    if ( $query->have_posts() ) {
      $not_in_next_two = array();
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
    <article class="sonic-featured-post tri-grid-imgfix">
      <a href="<?php the_permalink() ?>">
      <div class="featured-post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
      <div class="post-text-block">


        <span class="cat-label"><?php $category = get_the_category();
              echo $category[0]->cat_name; ?></span>
              <br>
        <h1><?php the_title(); ?></h1>
        <span class="author-title">by <?php the_author(); ?> · </span>
        <span><?php the_date(); ?></span>
      </a>
      </div>
    </article> <!-- .sonic-featured -->
    <?php
        $not_in_prev[] = get_the_ID();
      }
    }
      $next_args = array(
        'posts_per_page'=>3,
        'category_name'=>"reviews",
        'post__not_in'=>$not_in_prev
      );
      $query = new WP_Query( $next_args );
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post(); ?>
          <!-- Start Repeating Post Loop -->
          <hr>
          <article class="post">
            <a href="<?php the_permalink() ?>">
              <div class="post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
              <div class="post-text-area">
                <span class="cat-label"><?php $category = get_the_category();
                echo $category[0]->cat_name; ?></span>
                <h2><?php the_title(); ?></h2>
                <span class="author-title">By <?php the_author(); ?><br><?php the_date() ?></span>
              </div>
            </a>
          </article>
          <!--  End Repeating Post Loop  -->
    <?php
          $not_in_prev[] = get_the_ID();
        }
      } ?>
  </div>
  <div class="columns stream-1 round-tn">
    <h3>Columns</h3>
    <?php
    $next_args = array(
      'posts_per_page'=>1,
      'category_name'=>"columns"
    );
    $query = new WP_Query( $next_args );
    if ( $query->have_posts() ) {
      $not_in_next_two = array();
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
    <article class="sonic-featured-post tri-grid-imgfix">
      <a href="<?php the_permalink() ?>">
      <div class="featured-post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
      <div class="post-text-block">


        <span class="cat-label"><?php $category = get_the_category();
              echo $category[0]->cat_name; ?></span>
              <br>
        <h1><?php the_title(); ?></h1>
        <span class="author-title">by <?php the_author(); ?> · </span>
        <span><?php the_date(); ?></span>
      </a>
      </div>
    </article> <!-- .sonic-featured -->
    <?php
        $not_in_prev[] = get_the_ID();
      }
    }
      $next_args = array(
        'posts_per_page'=>3,
        'category_name'=>"columns",
        'post__not_in'=>$not_in_prev
      );
      $query = new WP_Query( $next_args );
      if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
          $query->the_post(); ?>
          <!-- Start Repeating Post Loop -->
          <hr>
          <article class="post">
            <a href="<?php the_permalink() ?>">
              <div class="post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
              <div class="post-text-area">
                <span class="cat-label"><?php $category = get_the_category();
                echo $category[0]->cat_name; ?></span>
                <h2><?php the_title(); ?></h2>
                <span class="author-title">By <?php the_author(); ?><br><?php the_date() ?></span>
              </div>
            </a>
          </article>
          <!--  End Repeating Post Loop  -->
    <?php
          $not_in_prev[] = get_the_ID();
        }
      } ?>
  </div>
</div> <!-- .three-equal-grid -->



<div class="wide-feature" style="background-image: url('https://www.spinelessbound.com/img/books.jpg');">
  <div class="f-category">
    <a href="#">
      <h2>Back in the Day! A look back at the BallBuster Music Legacy</h2>
    </a>
  </div>
</div>



<div class="f-category">
  <img src="https://www.ballbustermusic.com/wp-content/themes/ballbuster-v3.0.28/images/cat/PigshitLogo.jpg" alt="">
  <div class="column-grid-f g-ps">


  <div class="newps">
    <?php
    $next_args = array(
      'posts_per_page'=>1,
      'category_name'=>"pigshit"
    );
    $query = new WP_Query( $next_args );
    if ( $query->have_posts() ) {
      $not_in_next_two = array();
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <a href="<?php the_permalink() ?>">
    <article class="tall-roku" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

      <div class="post-text-block">

        <h1><?php the_title(); ?></h1>

        <span><?php the_date(); ?></span>

      </div>
    </article> <!-- .sonic-featured -->
    </a>
    <?php
        $not_in_pigshit1[] = get_the_ID();
      }
    } ?>
  </div>

    <?php $next_args = array(
      'posts_per_page'=>6,
      'category_name'=>"pigshit",
      'post__not_in'=>$not_in_pigshit1
    );
    $query = new WP_Query( $next_args );
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <!-- Start Repeating Post Loop -->
        <div class="cl-6">
          <a href="<?php the_permalink() ?>">
          <article class="post-bkg-tn" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">


            <div class="post-text-block">

              <h1><?php the_title(); ?></h1>

              <span><?php the_date(); ?></span>

            </div>

          </article> <!-- .sonic-featured -->
          </a>
          <!--  End Repeating Post Loop  -->
        </div>
  <?php

      }
    } ?>
    </div>
</div>

<div class="wide-feature" style="background-image: url('https://www.spinelessbound.com/img/books.jpg');">
  <div class="f-category">
    <a href="#">
      <h2>A look back at the BallBuster Music Legacy from the Official BallBuster Hard Music: The International Underground Hard Music Report</h2>
    </a>
  </div>
</div>

<div class="f-category">
  <h3>Denimn N' Leather</h3>
  <div class="column-grid-f g-ps">


  <div class="newps">
    <?php
    $next_args = array(
      'posts_per_page'=>1,
      'category_name'=>"denimnleather"
    );
    $query = new WP_Query( $next_args );
    if ( $query->have_posts() ) {
      $not_in_next_two = array();
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <a href="<?php the_permalink() ?>">
    <article class="tall-roku" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">

      <div class="post-text-block">

        <h1><?php the_title(); ?></h1>

        <span><?php the_date(); ?></span>

      </div>
    </article> <!-- .sonic-featured -->
    </a>
    <?php
        $not_in_denimnleather[] = get_the_ID();
      }
    } ?>
  </div>

    <?php $next_args = array(
      'posts_per_page'=>6,
      'category_name'=>"denimnleather",
      'post__not_in'=>$not_in_denimnleather
    );
    $query = new WP_Query( $next_args );
    if ( $query->have_posts() ) {
      while ( $query->have_posts() ) {
        $query->the_post(); ?>
        <!-- Start Repeating Post Loop -->
        <div class="cl-6">
          <a href="<?php the_permalink() ?>">
          <article class="post-bkg-tn" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">


            <div class="post-text-block">

              <h1><?php the_title(); ?></h1>

              <span><?php the_date(); ?></span>

            </div>

          </article> <!-- .sonic-featured -->
          </a>
          <!--  End Repeating Post Loop  -->
        </div>
  <?php

      }
    } ?>
    </div>
</div>










<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
<?php get_footer(); ?>
