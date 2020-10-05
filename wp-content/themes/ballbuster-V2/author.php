<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/author.css">
<div class="authorPage">
  <div class="authorProfile">
    <div class="authorPicture">
      <img src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>" />
    </div>
    <h1><?php $author = get_the_author(); echo $author; ?></h1>
    <p><?php the_author_meta( 'description' ); ?></p>
  </div>

  <div class="authorPosts">
    <h2>Posts by <?php echo $author; ?>:</h2>
    <div class="postsFlex">


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

    //count == number of posts to display
    static $count = 0;
    if ($count == "40") { break; }
      else { ?>
        <div class="blog-post">
          <div class="postThumbnail" style="background-image:url(<?php the_post_thumbnail_url();?>)"></div>
          <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

         <?php the_excerpt(); ?>
         <a class="btn btn-pill btn-wide" href="<?php the_permalink(); ?>">Read</a>
        </div>
        <?php if ($count == "8" || $count == "15" || $count == "26" || $count == "33") {
          ?>
          <ins class="adsbygoogle"
             style="display:block"
             data-ad-format="fluid"
             data-ad-layout-key="-6h+ed+1l-6o+ab"
             data-ad-client="ca-pub-8458877549325827"
             data-ad-slot="7698236590"></ins>
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
  </div>
</div>
<?php get_footer(); ?>



<div class="blog-post">
  <div class="postThumbnail" style="background-image:url(<?php the_post_thumbnail_url();?>)"></div>
  <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>

 <?php the_excerpt(); ?>
 <a class="btn btn-pill btn-wide" href="<?php the_permalink(); ?>">Read</a>
</div>
