<?php
/**
 * Displays the content when the cover template is used.
 *
 * @package BallBuster Music
 * @subpackage BBM_4
 * @since BBM 4.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php
	// On the cover page template, output the cover header.
	$cover_header_style   = '';
	$cover_header_classes = '';

	$color_overlay_style   = '';
	$color_overlay_classes = '';

	$image_url = ! post_password_required() ? get_the_post_thumbnail_url( get_the_ID(), 'twentytwenty-fullscreen' ) : '';

	if ( $image_url ) {
		$cover_header_style   = ' style="background-image: url( ' . esc_url( $image_url ) . ' );"';
		$cover_header_classes = ' bg-image';
	}

	// Get the color used for the color overlay.
	$color_overlay_color = get_theme_mod( 'cover_template_overlay_background_color' );
	if ( $color_overlay_color ) {
		$color_overlay_style = ' style="color: ' . esc_attr( $color_overlay_color ) . ';"';
	} else {
		$color_overlay_style = '';
	}

	// Get the fixed background attachment option.
	if ( get_theme_mod( 'cover_template_fixed_background', true ) ) {
		$cover_header_classes .= ' bg-attachment-fixed';
	}

	// Get the opacity of the color overlay.
	$color_overlay_opacity  = get_theme_mod( 'cover_template_overlay_opacity' );
	$color_overlay_opacity  = ( false === $color_overlay_opacity ) ? 80 : $color_overlay_opacity;
	$color_overlay_classes .= ' opacity-' . $color_overlay_opacity;
	?>

	<div class="cover-header <?php echo $cover_header_classes; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- static output ?>"<?php echo $cover_header_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>>
		<div class="cover-header-inner-wrapper screen-height">
			<div class="cover-header-inner">
				<div class="cover-color-overlay color-accent<?php echo esc_attr( $color_overlay_classes ); ?>"<?php echo $color_overlay_style; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- We need to double check this, but for now, we want to pass PHPCS ;) ?>></div>

					<header class="entry-header has-text-align-center">
						<div class="entry-header-inner section-inner medium">

							<?php

							/**
							 * Allow child themes and plugins to filter the display of the categories in the article header.
							 *
							 * @since Twenty Twenty 1.0
							 *
							 * @param bool Whether to show the categories in article header, Default true.
							 */
							$show_categories = apply_filters( 'twentytwenty_show_categories_in_entry_header', true );

							if ( true === $show_categories && has_category() ) {
								?>

								<div class="entry-categories">
									<span class="screen-reader-text"><?php _e( 'Categories', 'twentytwenty' ); ?></span>
                  <?php
                  $category = get_the_category();
                  $firstCategory = $category[0]->cat_name;
                  $category_link = get_category_link($firstCategory->cat_ID);
                  if ($firstCategory == "PIGSHIT") { ?>
                    <a class="cover-category-img" href="https://ballbustermusic.com/category/columns/pigshit"><img style="margin-left:auto; margin-right:auto; margin-top:1em;" width="200px" src="<?php bloginfo('template_directory');?>/assets/images/category-logos/PigshitLogo.jpeg" alt="Pigshit"></a> <?php
                  } else { ?>
									<div class="entry-categories-inner">
										<?php the_category( ' ' ); ?>
									</div><!-- .entry-categories-inner -->
                <?php } ?>
								</div><!-- .entry-categories -->

								<?php
							}

							the_title( '<h1 class="entry-title">', '</h1>' );

							if ( is_page() ) {
								?>

								<div class="to-the-content-wrapper">

									<a href="#post-inner" class="to-the-content fill-children-current-color">
										<?php twentytwenty_the_theme_svg( 'arrow-down' ); ?>
										<div class="screen-reader-text"><?php _e( 'Scroll Down', 'twentytwenty' ); ?></div>
									</a><!-- .to-the-content -->

								</div><!-- .to-the-content-wrapper -->

								<?php
							} else {

								$intro_text_width = '';

								if ( is_singular() ) {
									$intro_text_width = ' small';
								} else {
									$intro_text_width = ' thin';
								}

								if ( has_excerpt() ) {
									?>

									<div class="intro-text section-inner max-percentage<?php echo esc_attr( $intro_text_width ); ?>">
										<?php the_excerpt(); ?>
									</div>

									<?php
								}

								twentytwenty_the_post_meta( get_the_ID(), 'single-top' );

							}
							?>

						</div><!-- .entry-header-inner -->
					</header><!-- .entry-header -->

			</div><!-- .cover-header-inner -->
		</div><!-- .cover-header-inner-wrapper -->
	</div><!-- .cover-header -->
<div class="max-cover-post-width">


  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">


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
  </div>
