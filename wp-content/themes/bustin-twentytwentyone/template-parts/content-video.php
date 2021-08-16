<?php
/**
 * The subtle template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<main id="site-content" class="single-post-view" role="main">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php



	if ( ! is_search() ) { ?>
  <?php  get_template_part( 'template-parts/post-header-video' );
	} else {
    get_template_part( 'template-parts/entry-header' );
  }

	?>

	<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading', 'twentytwenty' ) );
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php echo do_shortcode('[easy-facebook-comments]'); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->

<div class="latest-posts related-posts round-tn">
  <div class="section-title">
    <h2 class=category-heading>Related Posts</h2>
  </div>
<?php
$tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
$args = [
    'post__not_in'        => array( get_queried_object_id() ),
    'posts_per_page'      => 5,
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
      <div class="latest-right">
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

</div>
</main> <!-- Site content -->
