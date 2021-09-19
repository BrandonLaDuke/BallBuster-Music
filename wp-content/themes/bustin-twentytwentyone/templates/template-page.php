<?php
/**
 * Template Name: Newsletter Page Template
 * Template Post Type: page
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

 			get_template_part( 'template-parts/content-page' );
 		}
 	}

 	?>

 </main><!-- #site-content -->

 <?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

 <?php get_footer(); ?>
