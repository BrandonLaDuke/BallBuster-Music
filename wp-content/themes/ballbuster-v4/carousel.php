<section class="carousel-container">
  <div class="carousel carousel-inner" style="color:red;">
  <?php
  $query = new WP_Query( 'posts_per_page=12' );
  $carousel_number = 1;
  if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
      $query->the_post(); ?>

    <div class="slide" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
    <a href="<?php the_permalink() ?>" class="s-container">

        <span class="title category-title"><?php $category = get_the_category();
   echo $category[0]->cat_name; ?></span>

        <h1 class="title headline"><?php the_title(); ?></h1>

        <p class="title author-title">By <?php the_author(); ?></p>
        <p class="date"><?php the_date() ?></p>
        <a href="#"></a>
    </a>
  </div>
  <?php $carousel_number = $carousel_number + 1;
      }
     } ?>
  </div>
</section>
