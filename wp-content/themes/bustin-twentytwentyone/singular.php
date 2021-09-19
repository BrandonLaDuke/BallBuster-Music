<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" class="single-post-view" role="main">

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>



<div class="latest-posts related-posts round-tn">
  <div class="spa-area">

  </div>

  <div class="section-title">
    <h2 class=category-heading>Related Posts</h2>
  </div>
<?php
$tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
$args = [
    'post__not_in'        => array( get_queried_object_id() ),
    'posts_per_page'      => 10,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'rand',
    'tax_query' => [
        [
            'taxonomy' => 'post_tag',
            'terms'    => $tags
        ]
    ]
];
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
  while( $my_query->have_posts() ) {
      $my_query->the_post(); ?>
  <!-- Start Repeating Post Loop -->
  <hr>
  <article class="post">
    <a href="<?php the_permalink() ?>">
      <div class="post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
      <div class="post-text-area" style="margin-left:1rem;">
        <span class="cat-label"><?php $category = get_the_category();
        echo $category[0]->cat_name; ?></span>
        <h2><?php the_title(); ?></h2>
        <span class="author-title">By <?php the_author(); ?><br><?php the_date() ?></span>
      </div>
    </a>
  </article>
<?php }
}
  wp_reset_postdata();
  ?>
  <!--  End Repeating Post Loop  -->

  <div class="spa-area">

  </div>

  <div class="social-qs social-area">
    <br>
    <div class="newsletter">
      <p><span>Join the Newsletter</span> and stay up to date on all things BallBuster Music!</p>
      <a href="#">Subscribe ></a>
    </div>
  </div>

</div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
