<a href="<?php the_permalink(); ?>" class="suggested-content">
  <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
  </div>
  <div class="suggested-content-txt">
    <span class="title"><?php echo wp_trim_words( get_the_title(), 10 ); ?></span>
    <span>By <?php the_author(); ?></span>
    <span><?php the_date(); ?></span>
  </div>
</a>
