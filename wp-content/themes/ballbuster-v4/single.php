<?php get_header(); ?>

    <section class="post-page">
      <style>
      :root {
        --the-post-image: url(<?php the_post_thumbnail_url(); ?>);
        --header-background: url(<?php bloginfo('template_directory');?>/images/header-background.jpg);
      }
      </style>
      <div class="content-box">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="the-post">
          <div class="post-img"></div>
          <?php $category = get_the_category();
                $firstCategory = $category[0]->cat_name; ?>

                <?php
                if ($firstCategory == "PIGSHIT") {
                  ?> <a href="https://www.ballbustermusic.com/category/pigshit/"><img style="margin-left:.6em; margin-top:1em;" width="200px" src="<?php bloginfo('template_directory');?>/images/cat/PigshitLogo.jpg" alt="Pigshit"></a> <?php
                } else {
                  $category_link = get_category_link( $category_id );
                ?>

          <span class="the-post-category metal linear"><a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo $firstCategory; ?>"><?php echo $firstCategory; ?></a></span>
        <?php } ?>

          <h1 class="the-post-headline"><?php single_post_title(); ?></h1>
          <h2 class="the-post-sub-heading"></h2>
          <span class="the-post-author">By <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a></span>
          <span class="the-post-date"><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></span>




          <div class="the-post-body">
              <div class="sharethis-inline-share-buttons"></div>
            <div class="blog-post">
             <?php the_content(); ?>
            </div>
            <div class="sharethis-inline-share-buttons"></div>
            <div class="the-post-comments">


              <div class="fb-comments" data-href="<?php echo get_the_permalink(); ?>" data-width="100%" data-numposts="20" data-colorscheme="dark"></div>

            </div>
          </div>
          <?php endwhile; endif; ?>
        </div>
        <div class="related-box">
          <?php
          $currentID = get_the_ID();
          $upNext = new WP_Query( array( 'showposts' => '5', 'post__not_in' => array($currentID)));
          if ( $upNext->have_posts() ) : while ( $upNext->have_posts() ) : $upNext->the_post();

          static $count = 0;
          if ($count == "1") { break; }
            else {
              get_template_part( 'up-next', get_post_format() );
              $count++;
            }


         endwhile; endif;
          ?>
          <!-- Ad slot: Temp use as tripple break -->
          <br><br><br>
          <?php
          $randa = rand(0,10);
          if($randa <= 5) { ?>
            <div>
              <a href="https://louderthanlife.frontgatetickets.com/?utm_source=BallBusterMusic"><img width="100%" src="https://www.ballbustermusic.com/wp-content/uploads/2019/05/3lHc4EKA.jpeg" alt="Louder than Life" /></a>
            </div>
          <?php } else { ?>
            <div>
              <a href="https://bourbon.frontgatetickets.com/?utm_source=BallBusterMusic"><img width="100%" src="https://www.ballbustermusic.com/wp-content/uploads/2019/05/8qQnj0zw.jpeg" alt="Burbon and Beyond" /></a>
            </div>
          <?php } ?>


          <div class="suggested-post ymal">
            <span>YOU MAY ALSO LIKE</span>
          <?php
          // the query
          $currentID = get_the_ID();
          $recentPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'orderby'=>'rand', 'posts_per_page'=>-13, 'post__not_in' => array($currentID))); ?>
          <?php if ( $recentPosts->have_posts() ) : while ( $recentPosts->have_posts() ) : $recentPosts->the_post();

          //count == number of posts to display
          static $count = 0;
          if ($count == "11") { break; }
             else {
              get_template_part( 'suggested-posts', get_post_format() );
              if ($count == "5") {  ?>
                <?php

                if($randa <= 5) { ?>
                  <a href="https://bourbon.frontgatetickets.com/?utm_source=BallBusterMusic" style="display:flex"><img style="text-align: center; margin: 10px auto;" src="https://www.ballbustermusic.com/wp-content/uploads/2019/05/SxYnEPUw.jpeg" alt="" /></a></a>
                <?php } else { ?>
                  <a href="https://louderthanlife.frontgatetickets.com/?utm_source=BallBusterMusic" style="display:flex"><img style="text-align: center; margin: 10px auto;" src="https://www.ballbustermusic.com/wp-content/uploads/2019/05/thCPW_eg.jpeg" alt="Louder than Life" /></a></a>
                <?php } ?>
                <!-- <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-format="fluid"
                     data-ad-layout-key="-f7+1n-6x-m5+1u5"
                     data-ad-client="ca-pub-8458877549325827"
                     data-ad-slot="8545592759"></ins> -->
                     <?php
              }
               $count++;
             }  endwhile; endif; ?>
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
