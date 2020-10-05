<?php get_header() ?>

<section class="author-page">
  <div class="content-box author-head">
    <div class="the-category">
      <?php

      if (is_category('pigshit')) { ?>
        <img src="<?php bloginfo('template_directory'); ?>/images/cat/PigshitLogo.jpg" alt="Pigshit" style="width: 100%; max-width:800px;">
<?php } else if (is_category('hauntedhappenings')) { ?>
        <img src="<?php bloginfo('template_directory'); ?>/images/cat/haunted_happenings.jpg" alt="Pigshit" style="width: 100%; max-width:800px;">
<?php } else { ?>
      <h1><?php single_cat_title(); ?></h1>
<?php } ?>
    </div>

  </div>
  <div class="content-box author-post-container">
    <div class="author-posts">
      <!-- Needs 30 posts per page -->
    <?php
  if ( have_posts() ) {
  while ( have_posts() ) {
   the_post(); ?>
   <a href="<?php the_permalink() ?>" class="suggested-content">
     <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
     </div>
     <div class="suggested-content-txt">
       <span class="title"><?php the_title(); ?></span>
       <span>By <?php the_author(); ?></span>
       <span><?php the_date() ?></span>
     </div>
   </a>
    <?php } ?>
  </div>
</div>
</section>
  <section id="page-controls">
    <ul class="pager" style="text-align:center">
      <li class="previous btn"><?php previous_posts_link( '< Previous' ); ?></li>
      <li class="next btn"><?php next_posts_link( 'Next > ' ); ?></li>
    </div>
  </section>
<?php } else { ?>
  <h3><?php _e('Sorry, We could not find any posts in this category.'); ?></h3>
<?php } ?>



<?php get_footer(); ?>
