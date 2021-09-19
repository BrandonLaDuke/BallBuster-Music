<?php
/**
 * The template for displaying the category template in the BallBuster Music theme.
 *
 * @package BallBuster Music
 * @subpackage BBM_4
 * @since BBM 4.0
 */

get_header();

if (is_category('hauntedhappenings')) { ?>
  <div style="background-image: url('https://www.ballbustermusic.com/wp-content/uploads/2021/09/haunted-happenings-bkg-2021-scaled.jpeg');" class="categoryProfile wide-feature haunted-feature">
<?php } else { ?>
  <div class="categoryProfile">
<?php } ?>


  <?php if (is_category('pigshit')) { ?>
    <img src="<?php bloginfo('template_directory'); ?>/assets/images/category-logos/PigshitLogo.jpeg" alt="Pigshit">
  <?php
  } else if (is_category('hauntedhappenings')) { ?>
    <h1 style="font-family: 'Bloodyslime', sans-serif;
    letter-spacing: 2px;
    background: #200122;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to top, #ff0000, #500f0f);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to top, #ff0000, #500f0f); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background-clip: text;
    -webkit-background-clip: text;
    text-shadow: 4px 4px 6px #00000044;
    color: transparent;"><?php single_cat_title(); ?></h1>
  <?php
  } else {
  ?><h1><?php single_cat_title(); ?></h1><?php
  }

  ?>





  <?php
    $cat_id = $wp_query->get_queried_object_id();
  ?>
  <p>
    <span><?php $cat_count = get_category($cat_id);
echo $cat_count->count; ?> posts</span>
  </p>

</div>




<div class="author-grid social-area">

<div class="bonus-col">
  <div class="newsletter">
    <p><span>Join the Newsletter</span> and stay up to date on all things BallBuster Music!</p>
    <a href="#">Subscribe ></a>
  </div>
  <br>
  <div class="latest-posts round-tn">
<?php
$next_args = array(
  'posts_per_page'=>25,
  'orderby'=>'rand'
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
        <div class="latest-right" style="margin-left:1rem;">
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
  <div class="hit-counter">
    <h2>You are visitor<h2>
    <?php echo do_shortcode("[srs_total_visitors]"); ?>
  </div>
</div>

<div class="sonic-latest-s stream-1 author-page-posts">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
    <?php endwhile;

     get_template_part('template-parts/pagination');

        else: ?>
    <h3><?php _e('Sorry, We could not find any posts in this category.'); ?></h3>
  <?php endif; ?>


</div> <!-- .sonic-latest -->


</div> <!-- Author grid -->










<?php get_footer(); ?>
