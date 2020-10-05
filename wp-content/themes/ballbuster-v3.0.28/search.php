<?php get_header(); ?>

<div class="wrap">

	<header class="page-header">
		<?php if ( have_posts() ) : ?>
			<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentyseventeen' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
		<?php else : ?>
			<h1 class="page-title"><?php _e( 'Nothing Found', 'twentyseventeen' ); ?></h1>
		<?php endif; ?>
	</header><!-- .page-header -->

	<div id="primary" class="content-area search-results">
		<main id="main" class="site-main" role="main">
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-format="fluid"
           data-ad-layout-key="-f7+1n-6x-m5+1u5"
           data-ad-client="ca-pub-8458877549325827"
           data-ad-slot="8545592759"></ins>
		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */?>
         <div class="suggested-post">
           <a href="<?php the_permalink(); ?>" class="suggested-content">
             <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
             </div>
             <div class="suggested-content-txt">
               <span class="title"><?php the_title(); ?></span>
               <span>By <?php the_author(); ?></span>
               <span><?php the_date(); ?></span>
             </div>
           </a>
         </div>
<?php
endwhile; // End of the loop. ?>

      <section id="page-controls">
        <ul class="pager" style="text-align:center">
          <li class="previous btn"><?php previous_posts_link( '< Previous' ); ?></li>
          <li class="next btn"><?php next_posts_link( 'Next > ' ); ?></li>
        </div>
      </section>

		<?php else : ?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'twentyseventeen' ); ?></p>
			<?php
				get_search_form();

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
