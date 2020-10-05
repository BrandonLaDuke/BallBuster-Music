<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/author.css">
<div class="categoryPage">
  <div class="categoryPicture">
    <?php if (is_category('pigshit')) : ?>
      <img src="<?php bloginfo('template_directory');?>/images/pages/PigshitLogo.jpg" />
    <?php elseif (is_category('hardtalk')) : ?>
      <h1>Hard Talk</h1>
      <h2>Interviews</h2>
    <?php elseif (is_category('hardvision')) : ?>
      <h1>Hard Vision</h1>
      <h2>Bluray / DVD / Video Reviews</h2>
    <?php elseif (is_category('audioagression')) : ?>
      <h1>Audio Agression</h1>
    <?php elseif (is_category('guitarist2guitarist')) : ?>
      <h1>Guitarist 2 Guitarist</h1>
      <h2>Interviews</h2>
    <?php elseif (is_category('hardfeatures')) : ?>
      <h1>Hard Features</h1>
      <h2>Gig Reviews &amp; Special Features</h2>
    <?php elseif (is_category('musicunderground')) : ?>
      <h1>Music Underground!</h1>
    <?php elseif (is_category('metaltothecore')) : ?>
      <h1>Metal to the Core!</h1>
    <?php elseif (is_category('hauntedhappenings')) : ?>
      <img src="<?php bloginfo('template_directory');?>/images/pages/haunted_happenings.jpg" />
    <?php else : ?>
      <br>
      <h1 style="text-align:center; color:#fff;">Uncategorized</h1>
      <br>
    <?php endif; ?>
  </div>
  <div class="authorPosts">
    <h2>Archives:</h2>
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

<?php get_footer(); ?>
