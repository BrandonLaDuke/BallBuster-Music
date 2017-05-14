<?php get_header(); ?>
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
      <?php endwhile; ?>
        <nav>
        	<ul class="pager">
        		<li class="previous"><?php next_posts_link( 'Previous' ); ?></li>
        		<li class="next"><?php previous_posts_link( 'Next' ); ?></li>
        	</ul>
        </nav>
      <?php else: ?>
      <h3><?php _e('Sorry, We could not find any posts by this author. Come back later'); ?></h3>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
