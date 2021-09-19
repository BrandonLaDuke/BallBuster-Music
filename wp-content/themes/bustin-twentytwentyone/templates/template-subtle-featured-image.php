<?php
/**
 * Template Name: Headline Only Template
 * Template Post Type: post, page
 *
 * @package BallBuster Music
 * @subpackage BBM_4
 * @since BBM 4.0
 */

 get_header();
 ?>

 <main id="site-content" role="main">

 	<?php

 	if ( have_posts() ) {

 		while ( have_posts() ) {
 			the_post();

 			get_template_part( 'template-parts/content-subtle' );
 		}
 	}

 	?>

 </main><!-- #site-content -->

 <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

 <?php get_footer(); ?>
