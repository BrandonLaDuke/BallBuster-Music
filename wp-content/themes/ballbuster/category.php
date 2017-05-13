<?php get_header(); ?>

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
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="relatedthumb">
        <a rel="external" href="<?php the_permalink() ?>">
          <div style="background-size:cover; background-position:center; background-image:url(<?php the_post_thumbnail_url(); ?>)" class="postThumbnail"></div>
          <div class="relatedtext">
            <h3><?php the_title(); ?></h3>
            <p><?php the_excerpt(); ?></p>
            <h6><?php the_time('M d Y'); ?> in <?php the_category('&');?></h6>
          </div>
        </a>
      </div>
    <?php endwhile;?>
    </div>
    <nav>
    	<ul class="pager">
    		<li class="previous"><?php next_posts_link( 'Previous' ); ?></li>
    		<li class="next"><?php previous_posts_link( 'Next' ); ?></li>
    	</ul>
    </nav>
    <?php else: ?>
      <h3><?php _e('Sorry, We could not find any posts by this author.'); ?></h3>
      <?php endif; ?>

  </div>
</div>
<?php get_footer(); ?>
