<div class="latest-posts related-posts round-tn">

  <div class="toggle-wrapper search-toggle-wrapper dt-st-wp" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
    <button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
      <span class="toggle-inner">
        <?php twentytwenty_the_theme_svg( 'search' ); ?>
        <span class="toggle-text-desktop" style="font-size: 2rem; color: #fff; padding: 0 0 0 1rem;"><?php _e( 'Search', 'twentytwenty' ); ?></span>
      </span>
    </button><!-- .search-toggle -->
  </div>

        <!-- ad -->
  <ins class="adsbygoogle"
       style="display:block"
       data-ad-client="ca-pub-8458877549325827"
       data-ad-slot="9908918197"
       data-ad-format="auto"
       data-full-width-responsive="true"></ins>
       <!-- end ad -->

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
if( $my_query->have_posts() ) { ?>
  <div class="section-title">
    <h2 class=category-heading>Related Posts</h2>
  </div>
  <?php
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

<?php
  $related_posts[] = get_the_ID();
  }
}
  wp_reset_postdata();
  ?>
  <!--  End Repeating Post Loop  -->

  <!-- Back in the day -->
  <h2 class=category-heading>Back in the Day</h2>
  <?php
  $randa = mt_rand(0,15);
  if($randa == 0) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/1.jpg" alt="Doro Pesch">
      <figcaption>Doro Pesch</figcaption>
    </figure>
  <?php } else if ($randa == 1) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/2.jpg" alt="">
      <figcaption>Bruce Dickinson (Iron Maiden)</figcaption>
    </figure>
  <?php } else if ($randa == 2) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/3.jpg" alt="">
      <figcaption>DIO</figcaption>
    </figure>
  <?php } else if ($randa == 3) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/4.jpg" alt="">
      <figcaption>Halford</figcaption>
    </figure>
  <?php } else if ($randa == 4) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/5.jpg" alt="">
      <figcaption>Deep Purple</figcaption>
    </figure>
  <?php } else if ($randa == 5) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/6.jpg" alt="">
      <figcaption>Peter Baltes (Accept) & Michael Hannon (Hilljack)</figcaption>
    </figure>
  <?php } else if ($randa == 6) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/7.jpg" alt="">
      <figcaption>Dio & Tracy G.</figcaption>
    </figure>
  <?php } else if ($randa == 7) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/8.jpg" alt="">
      <figcaption>John Bush</figcaption>
    </figure>
  <?php } else if ($randa == 8) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/9.jpg" alt="">
      <figcaption>Michael Sweet (Stryper)</figcaption>
    </figure>
  <?php } else if ($randa == 9) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/10.jpg" alt="">
      <figcaption>Phil Naro</figcaption>
    </figure>
  <?php } else if ($randa == 10) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/11.jpg" alt="">
      <figcaption>Christian Passos (Wizzards)</figcaption>
    </figure>
  <?php } else if ($randa == 11) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/12.jpg" alt="">
      <figcaption>Tropa De Shock</figcaption>
    </figure>
  <?php } else if ($randa == 12) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/13.jpg" alt="">
      <figcaption>Ty Tabor (King's X)</figcaption>
    </figure>
  <?php } else if ($randa == 13) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/14.jpg" alt="">
      <figcaption>Edwardos B. (Editor Of Strike Magazine, Brazil)</figcaption>
    </figure>
  <?php } else if ($randa == 14) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/15.jpg" alt="">
      <figcaption>John Sykes (Whitesnake)</figcaption>
    </figure>
  <?php } else if ($randa == 15) { ?>
    <figure>
      <img src="https://www.ballbustermusic.com/wp-content/uploads/2021/09/16.jpg" alt="">
      <figcaption>Michael Hannon (American Dog) & Chris Worley (Jackyl)</figcaption>
    </figure>
  <?php } ?>

  <!-- ad -->
  <ins class="adsbygoogle"
   style="display:block"
   data-ad-client="ca-pub-8458877549325827"
   data-ad-slot="9908918197"
   data-ad-format="auto"
   data-full-width-responsive="true"></ins>
 <!-- end ad -->

  <?php

  $args = [
      'post__not_in'        => $related_posts,
      'posts_per_page'      => 5,
      'orderby'             => 'rand'
  ];
  $my_query = new wp_query( $args );
  if( $my_query->have_posts() ) { ?>
    <div class="section-title">
      <h2 class=category-heading>You may also like</h2>
    </div>
    <?php
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

  <?php
    $related_posts[] = get_the_ID();
    }
  } ?>

</div>
