<?php get_header(); ?>



<?php
if ( has_post_format( 'video' )) {

  if ( have_posts() ) : while ( have_posts() ) : the_post();
  ?>
<header>
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
  </header>
  <div class="contPad" style="background-color: #111111;
  background-image: -webkit-linear-gradient(top, rgb(0, 0, 0) 0%, rgb(50, 50, 50) 50%, rgb(0, 0, 0) 100%);
  background-image: linear-gradient(to bottom, rgb(0, 0, 0) 0%, rgb(50, 50, 50) 50%, rgb(0, 0, 0) 100%);
  background-attachment: fixed;">
    <div class="container" >
  <div class="row">
    <div class="mobileAd">
      <!-- BallBuster -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-8458877549325827"
           data-ad-slot="9908918197"
           data-ad-format="auto"></ins>
    </div>
    <div class="main-column">
    <div>

      <?php
          get_template_part('content-single');
      ?>
      <?php
        endwhile; endif;
      ?>
    </div>
    <paper-material style="padding:10px; background-color:#222222; clear:both;" elevation="1" class="closing">
      <div class="closeingtop">
        <img class="inline" src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>" />
        <h2 style="padding:0 0 0 0;" class="inline">&nbsp;<?php the_author_posts_link(); ?></h2>
      </div>
      <hr>
      <div class="closeingbottom">
        <p><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></p>
      </div>
      <div class="closeingbottom websgn">
        <p><a href="<?php $authorURL = the_author_meta('url'); echo $authorURL; ?>"><?php $authorURL = the_author_meta('url'); echo $authorURL; ?></a></p>
      </div>
    </paper-material>


    <div class="diqus">
      <div id="disqus_thread"></div>
    </div>
  </div>
    <div class="side-column">
      <div class="side-column-ad">
        <!-- BallBuster -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8458877549325827"
             data-ad-slot="9908918197"
             data-ad-format="auto"></ins>
      </div>
      <div class="relatedposts">
        <h2>Also on BallBuster Music</h2>
      <?php
        $orig_post = $post;
        global $post;
        $tags = wp_get_post_tags($post->ID);

        if ($tags) {
        $tag_ids = array();
        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
        $args=array(
        'post__not_in' => array($post->ID),
        'posts_per_page'=>6, // Number of related posts to display.
        'caller_get_posts'=>1
        );

        $my_query = new wp_query( $args );

        while( $my_query->have_posts() ) {
        $my_query->the_post();
        ?>

        <div class="relatedthumb">
          <a rel="external" href="<?php the_permalink()?>"><?php the_post_thumbnail(); ?><br />
            <div class="relatedtext">
              <h3><?php the_title(); ?></h3>
              <p>By <?php the_author(); ?></p>
            </div>
          </a>
        </div>

        <?php }
        }
        $post = $orig_post;
        wp_reset_query();
        ?>
      </div>
      <div class="side-column-ad">
        <!-- BallBuster -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-8458877549325827"
             data-ad-slot="9908918197"
             data-ad-format="auto"></ins>
      </div>
      <div class="socialShare">
        <!--Facebook-->
        <!--Google+-->
        <!--Twitter-->
      </div>

    </div><!-- /.side-column -->
  </div> <!-- /.row -->
  </div>
  <?php

} else {
  	if ( have_posts() ) : while ( have_posts() ) : the_post();
  	?>
  <div class="bkg-img" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>

    <div class="postHeader">
      <div class="title">
        <h1><?php single_post_title(); ?></h1>
        <h2><img class="pic" src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>" /> &nbsp; By <?php the_author_posts_link(); ?></h2>

        <h4><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></h4>
      </div>
      <div>
        <div class="postPhoto" style="background-image: url(<?php the_post_thumbnail_url(); ?>)"></div>
      </div>
    </div>



		<div class="contPad">
      <div class="mobileAd-container">
        <div class="mobileAd">
 	       <!-- BallBuster -->
          <ins class="adsbygoogle"
               style="display:block"
               data-ad-client="ca-pub-8458877549325827"
               data-ad-slot="9908918197"
               data-ad-format="auto"></ins>
        </div> <!-- .mobileAd -->
      </div>

       <div class="main-column">
	       <div>
  				<?php
  						get_template_part('content-single');
  				?>
  				<?php
  					endwhile; endif;
  				?>
  			</div>
      </div> <!-- .main-column -->
    </div> <!-- .contPad -->


    <?php
}
get_footer(); ?>
