<carousel-slide style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
  <a href="<?php the_permalink(); ?>">
    <div class="slideOverlay">
      <h1><?php the_title(); ?></h1>
      <hr>
      <h2><?php the_excerpt(); ?></h2>
      <h3>By <?php the_author(); ?></h3>
      <h5><?php the_date(); ?></h5>
    </div>
  </a>
</carousel-slide>
