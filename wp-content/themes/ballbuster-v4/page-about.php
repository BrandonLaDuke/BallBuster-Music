<?php get_header();?>

<section class="post-page">
  <div class="content-box">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="the-post">
        <div class="the-post-body">
          <div class="blog-post">
  			       <?php the_title( '<h1 class="the-post-headline">', '</h1>' ); ?>
               <?php the_content(); ?>
          </div>
        </div>
      </div>
    <?php endwhile; // End of the loop.?>
    <div class="related-box">
      <div class="ad">

        <div class="ad" style="display:flex;">

          <ins class="adsbygoogle"
           style="display:block; margin:auto;"
           data-ad-client="ca-pub-8458877549325827"
           data-ad-slot="9908918197"
           data-ad-format="auto"></ins>

        </div>

      </div>
      <div class="suggested-post">
        <span>YOU MAY ALSO LIKE</span>
      <?php
      // the query
      $currentID = get_the_ID();
      $recentPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-10, 'post__not_in' => array($currentID))); ?>
      <?php if ( $recentPosts->have_posts() ) : while ( $recentPosts->have_posts() ) : $recentPosts->the_post();

      //count == number of posts to display
      static $count = 0;
      if ($count == "5") { break; }
        else {
          get_template_part( 'suggested-posts', get_post_format() );
           $count++;
         }  endwhile; endif; ?>
       </div>
       <br>
       <div class="ad" style="display:flex;">

         <!-- BallBuster -->
         <ins class="adsbygoogle"
              style="display:block"
              data-ad-client="ca-pub-8458877549325827"
              data-ad-slot="9908918197"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>

       </div>
    </div>

   </div>
</section>

<?php get_footer(); ?>
