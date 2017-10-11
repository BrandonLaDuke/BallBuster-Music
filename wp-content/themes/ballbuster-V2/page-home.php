<?php get_header(); ?>

<img id="banner-image" src="<?php the_field('banner_image'); ?>" alt="" />

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
        <div class="slide fade standard-slide-with-link" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
          <div class="slide-container">
            <h1><?php the_title(); ?></h1>
            <h5><?php the_author(); ?></h5>
            <p><?php the_excerpt(); ?></p>
            <a class="btn btn-raised btn-clear" href="#">Read</a>
          </div>
        </div>
        <div class="post">


        </div>
      <?php $count++; } ?>
    <?php endwhile; ?>

  <?php endif; ?>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<script src="<?php bloginfo('template_directory');?>/js/carousel.js" charset="utf-8"></script>

<?php get_footer(); ?>
