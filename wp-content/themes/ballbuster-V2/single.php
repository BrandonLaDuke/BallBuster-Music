<?php get_header(); ?>



<?php
if ( has_post_format( 'video' )) {

  if ( have_posts() ) : while ( have_posts() ) : the_post();
  ?>
<div>
  <?php
  $videoURL = get_field( "video" );
  if ($videoURL) {
    ?>
    <div class="embeded-video">
      <iframe src="https://www.youtube.com/embed/<?php the_field("video") ?>" allowfullscreen frameborder="0"></iframe>
    </div>
    <?php
  }
  ?>


    <div class="videoHeader">
      <h1><?php single_post_title(); ?></h1>
      <h2>By &nbsp; <img class="pic" src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>" /> &nbsp; <?php the_author_posts_link(); ?></h2>
      <h4><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></h4>
    </div>
  </div>

  <div class="contPad">

    <div class="article-grid">
      <div class="mobileAd-container">
        <div class="mobileAd">
         <!-- BallBuster -->
         <img style="width:100%; height: auto;" src="http://placehold.it/728x90" alt="">
          <!-- <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-8458877549325827"
               data-ad-slot="9908918197"
               data-ad-format="auto"></ins> -->
        </div> <!-- .mobileAd -->
      </div>
       <div class="main-column">

         <!-- <div class="postHeaderDesktop-review">
           <div class="product-title">
             <h2><?php the_field( 'product' ); ?></h2>
             <h3><?php the_field( 'product_label' ); ?></h3>
             <h3><?php the_field( 'release_date' ); ?></h3>
           </div>
           <div class="postPhoto" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
           <img class="postPhoto-lg" src="<?php the_post_thumbnail_url(); ?>" alt="">
         </div> -->

         <div>
          <?php
              get_template_part('content-single');
          ?>
          <?php
            endwhile; endif;
          ?>
        </div>

        <div class="author-block">
          <div class="left">
            <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>" alt="author">
          </div>
          <div class="right">
            <div>
              <h3>By <?php the_author_posts_link(); ?></h3>
              <p>Published: <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></p>
              <p>Category: <?php $category = get_the_category();
              $firstCategory = $category[0]->cat_name;
               echo $firstCategory; ?></p>
            </div>
          </div>
        </div>

        <div class="comments">
          <!-- <div class="diqus">
            <div id="disqus_thread"></div>
          </div> -->
          <div class="fb-comments" data-href="http://www.ballbustermusic.com" data-width="100%" data-numposts="20" data-colorscheme="dark"></div>
        </div>
      </div> <!-- .main-column -->

      <div class="sidebar">


<h2 class="sidebar-title">Also on BallBuster Music:</h2>
<?php
// the query
$recentPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-8)); ?>
<?php if ( $recentPosts->have_posts() ) : while ( $recentPosts->have_posts() ) : $recentPosts->the_post();

//count == number of posts to display
static $count = 0;
if ($count == "8") { break; }
  else { ?>
    <a href="<?php the_permalink(); ?>" class="related-post">
      <div style="background-image:url(<?php the_post_thumbnail_url(); ?>)" class="r-img"></div>
      <div class="thumb-title">
        <h2><?php the_title(); ?></h2>
        <h4>By <?php the_author(); ?></h4>
      </div>
    </a>
    <?php if ($count == "3" || $count == "6") {
      ?>
        <ins class="adsbygoogle"
           style="display:block"
           data-ad-format="fluid"
           data-ad-layout-key="-fa+15-2u-in+187"
           data-ad-client="ca-pub-8458877549325827"
           data-ad-slot="8545592759"></ins>
        <script>
           (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
      <?php
    }?>
  <?php $count++; } ?>
<?php endwhile; ?>

<?php endif; ?>




      </div>
    </div>

  </div> <!-- .contPad -->
  <?php

} else {
  	if ( have_posts() ) : while ( have_posts() ) : the_post();
  	?>


    <div class="postHeader">
      <div class="postPhoto" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
      <div class="title">
        <?php $terms = get_the_terms( $post->ID , 'category');
        if($terms) {
        	foreach( $terms as $term ) {
        		$cat_obj = get_term($term->term_id, 'category');
        		$cat_slug = $cat_obj->slug;
        	}
        }
        ?>
        <h1 class="section-label"><a href="<?php echo 'http://localhost/BallBuster-Music-Beta/category/' . $cat_slug; ?>"><?php the_field( 'review_section_name' ); ?></a></h1>
        <h1><?php single_post_title(); ?></h1>
        <h2><img class="pic" src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>" /> &nbsp; By <?php the_author_posts_link(); ?></h2>
        <h4><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></h4>
      </div>


    </div>



		<div class="contPad">

      <div class="article-grid">
        <div class="mobileAd-container">
          <div class="mobileAd">
   	       <!-- BallBuster -->
           <img style="width:100%; height: auto;" src="http://placehold.it/728x90" alt="">
            <!-- <ins class="adsbygoogle"
                 style="display:block"
                 data-ad-client="ca-pub-8458877549325827"
                 data-ad-slot="9908918197"
                 data-ad-format="auto"></ins> -->
          </div> <!-- .mobileAd -->
        </div>
         <div class="main-column">

           <!-- <div class="postHeaderDesktop-review">
             <div class="product-title">
               <h2><?php the_field( 'product' ); ?></h2>
               <h3><?php the_field( 'product_label' ); ?></h3>
               <h3><?php the_field( 'release_date' ); ?></h3>
             </div>
             <div class="postPhoto" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
             <img class="postPhoto-lg" src="<?php the_post_thumbnail_url(); ?>" alt="">
           </div> -->

  	       <div>
    				<?php
    						get_template_part('content-single');
    				?>
    				<?php
    					endwhile; endif;
    				?>
    			</div>

          <div class="author-block">
            <div class="left">
              <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>" alt="author">
            </div>
            <div class="right">
              <div>
                <h3>By <?php the_author_posts_link(); ?></h3>
                <p>Published: <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></p>
                <p>Category: <?php $category = get_the_category();
                $firstCategory = $category[0]->cat_name;
                 echo $firstCategory; ?></p>
              </div>
            </div>
          </div>

          <div class="comments">
            <div class="diqus">
              <div id="disqus_thread"></div>
            </div>
          </div>
        </div> <!-- .main-column -->

        <div class="sidebar">


<h2 class="sidebar-title">Also on BallBuster Music:</h2>
<?php
  // the query
  $recentPosts = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-8)); ?>
  <?php if ( $recentPosts->have_posts() ) : while ( $recentPosts->have_posts() ) : $recentPosts->the_post();

  //count == number of posts to display
  static $count = 0;
  if ($count == "8") { break; }
    else { ?>
      <a href="<?php the_permalink(); ?>" class="related-post">
        <div style="background-image:url(<?php the_post_thumbnail_url(); ?>)" class="r-img"></div>
        <div class="thumb-title">
          <h2><?php the_title(); ?></h2>
          <h4>By <?php the_author(); ?></h4>
        </div>
      </a>
      <?php if ($count == "3" || $count == "6") {
        ?>
          <ins class="adsbygoogle"
             style="display:block"
             data-ad-format="fluid"
             data-ad-layout-key="-fa+15-2u-in+187"
             data-ad-client="ca-pub-8458877549325827"
             data-ad-slot="8545592759"></ins>
          <script>
             (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        <?php
      }?>
    <?php $count++; } ?>
  <?php endwhile; ?>

<?php endif; ?>




        </div>
      </div>

    </div> <!-- .contPad -->


    <?php
}
get_footer(); ?>
