<div class="latest-posts related-posts round-tn">
  
  <div class="toggle-wrapper search-toggle-wrapper dt-st-wp" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
    <button class="toggle search-toggle desktop-search-toggle" data-toggle-target=".search-modal" data-toggle-body-class="showing-search-modal" data-set-focus=".search-modal .search-field" aria-expanded="false">
      <span class="toggle-inner">
        <?php twentytwenty_the_theme_svg( 'search' ); ?>
        <span class="toggle-text-desktop" style="font-size: 2rem; color: #fff; padding: 0 0 0 1rem;"><?php _e( 'Search', 'twentytwenty' ); ?></span>
      </span>
    </button><!-- .search-toggle -->
  </div>

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
