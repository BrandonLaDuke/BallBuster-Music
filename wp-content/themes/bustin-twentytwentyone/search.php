<?php
/**
 * The template for displaying the search template in the BallBuster Music theme.
 *
 * @package BallBuster Music
 * @subpackage BBM_4
 * @since BBM 4.0
 */

get_header();

get_template_part('template-parts/modal-search');
?>



<div class="searchProfile">
  <h1 class="search-title">
    <?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: <span>"<?php the_search_query(); ?>"</span>
  </h1>
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
