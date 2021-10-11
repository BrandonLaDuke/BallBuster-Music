<?php
/**
 * The subtle template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BallBuster Music
 * @subpackage BBM_4
 * @since BBM 4.0
 */

?>

<main id="site-content" class="single-post-view" role="main">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php



	if ( ! is_search() ) { ?>
  <?php  get_template_part( 'template-parts/post-header-subtle' );
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

			<div class="fb-comments" data-href="<?php echo get_the_permalink(); ?>" data-width="100%" data-numposts="20" data-colorscheme="dark"></div>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->

<?php get_template_part('template-parts/related-posts'); ?>

</main> <!-- Site content -->
