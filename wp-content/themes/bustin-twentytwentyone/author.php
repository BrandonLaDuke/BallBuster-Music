<?php
/**
 * The template for displaying the author template in the BallBuster Music theme.
 *
 * @package BallBuster Music
 * @subpackage BBM_4
 * @since BBM 4.0
 */

get_header(); ?>

<div class="authorProfile">
  <div class="authorPicture">
    <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>" />
  </div>
  <h1><?php $author = get_the_author(); echo $author; ?></h1>
  <div class="author-links">
    <?php
                  // Get the id of the post's author.
                  $author_id = get_the_author_meta( 'ID' );

                  // Get WP_User object for the author.
                  $author_userdata = get_userdata( $author_id );

                  // Get the author's website. It's stored in the wp_users table in the user_url field.
                  $author_website = $author_userdata->data->user_url;

                  // Get the rest of the author links. These are stored in the
                  // wp_usermeta table by the key assigned in wpse_user_contactmethods()
                  $author_facebook = get_the_author_meta( 'facebook', $author_id );
                  $author_twitter  = get_the_author_meta( 'twitter', $author_id  );
                  $author_linkedin = get_the_author_meta( 'linkedin', $author_id );
                  $author_youtube  = get_the_author_meta( 'youtube', $author_id  );
                  $author_instagram = get_the_author_meta( 'instagram', $author_id );
                  $author_myspace  = get_the_author_meta( 'myspace', $author_id  );
                  $author_linkedin = get_the_author_meta( 'linkedin', $author_id );
                  $author_pinterest  = get_the_author_meta( 'pinterest', $author_id  );
                  $author_soundcloud  = get_the_author_meta( 'soundcloud', $author_id  );
                  $author_tumblr  = get_the_author_meta( 'tumblr', $author_id  );
                  $author_wikipedia  = get_the_author_meta( 'wikipedia', $author_id  );

                  // Output the user's social links if they have values.
                  if ( $author_website ) {
                          printf( '<a href="%s"><i class="fa fa-blog" aria-hidden="true"></i></a>',
                                  esc_url( $author_website )
                          );
                  }

                  if ( $author_facebook ) {
                          printf( '<a href="%s"><i class="fa fa-facebook" aria-hidden="true"></i></a>',
                                  esc_url( $author_facebook )
                          );
                  }

                  if ( $author_instagram ) {
                          printf( '<a href="%s"><i class="fa fa-instagram" aria-hidden="true"></i></a>',
                                  esc_url( $author_instagram )
                          );
                  }

                  if ( $author_linkedin ) {
                          printf( '<a href="%s"><i class="fa fa-linkedin" aria-hidden="true"></i></a>',
                                  esc_url( $author_linkedin )
                          );
                  }

                  if ( $author_myspace ) {
                          printf( '<a href="%s"><i class="fa fa-users" aria-hidden="true"></i></a>',
                                  esc_url( $author_myspace )
                          );
                  }

                  if ( $author_pinterest ) {
                          printf( '<a href="%s"><i class="fa fa-pinterest" aria-hidden="true"></i></a>',
                                  esc_url( $author_pinterest )
                          );
                  }

                  if ( $author_soundcloud ) {
                          printf( '<a href="%s"><i class="fa fa-soundcloud" aria-hidden="true"></i></a>',
                                  esc_url( $author_soundcloud )
                          );
                  }

                  if ( $author_tumblr ) {
                          printf( '<a href="%s"><i class="fa fa-tumblr" aria-hidden="true"></i></a>',
                                  esc_url( $author_tumblr )
                          );
                  }

                  if ( $author_twitter ) {
                          printf( '<a href="%s"><i class="fa fa-twitter" aria-hidden="true"></i></a>',
                                  esc_url( $author_twitter )
                          );
                  }


                  if ( $author_youtube ) {
                          printf( '<a href="%s"><i class="fa fa-youtube" aria-hidden="true"></i></a>',
                                  esc_url( $author_youtube )
                          );
                  }

                  if ( $author_wikipedia ) {
                          printf( '<a href="%s"><i class="fa fa-wikipedia-w" aria-hidden="true"></i></a>',
                                  esc_url( $author_wikipedia )
                          );
                  }
              ?>
  </div>
  <p>
    <?php the_author_meta( 'description' ); ?>
    <br>
    <span><?php echo count_user_posts($author_id); ?> posts</span>
  </p>

</div>




<div class="author-grid social-area">

<div class="bonus-col">
  <div class="newsletter">
    <p><span>Join the Newsletter</span> and stay up to date on all things BallBuster Music!</p>
    <a href="#">Subscribe ></a>
  </div>
  <br>
  <div class="latest-posts round-tn">
<?php
$next_args = array(
  'posts_per_page'=>25,
  'orderby'=>'rand'
);
$query = new WP_Query( $next_args );
if ( $query->have_posts() ) {
  while ( $query->have_posts() ) {
    $query->the_post(); ?>
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
    <!--  End Repeating Post Loop  -->
<?php
    $not_in_next_two[] = get_the_ID();
  }
} ?>

  </div>
  <div class="hit-counter">
    <h2>You are visitor<h2>
    <?php echo do_shortcode("[srs_total_visitors]"); ?>
  </div>
</div>

<div class="sonic-latest-s stream-1 author-page-posts">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- Start Repeating Post Loop -->
    <hr>
    <article class="post">
      <a href="<?php the_permalink() ?>">
        <div class="post-thumbnail" style="background-image:url(<?php the_post_thumbnail_url(); ?>)"></div>
        <div class="post-text-area">
          <span class="cat-label"><?php $category = get_the_category();
          echo $category[0]->cat_name; ?></span>
          <h2><?php the_title(); ?></h2>
          <div class="excerpt"><?php the_excerpt(); ?></div>
          <span class="author-title">By <?php the_author(); ?><br><?php the_date() ?></span>
        </div>
      </a>
    </article>
    <?php endwhile;

     get_template_part('template-parts/pagination');

        else: ?>
    <h3><?php _e('Sorry, We could not find any posts by this author.'); ?></h3>
  <?php endif; ?>


</div> <!-- .sonic-latest -->


</div> <!-- Author grid -->










<?php get_footer(); ?>
