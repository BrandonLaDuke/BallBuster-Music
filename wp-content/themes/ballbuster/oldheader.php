<header style="background-image: url(<?php the_post_thumbnail_url(); ?>)" background-position="top">
  <div id="date">
    <p><?php $post_date = get_the_date( 'F j, Y' ); echo $post_date ?></p>
  </div>
  <div id="title">
    <h1><?php single_post_title(); ?> </h1>
    <p>by&nbsp; <img class="pic" src="<?php echo get_avatar_url( get_the_author_meta( 'ID' ), 32 ); ?>" /> &nbsp;
      <?php the_author_posts_link(); ?> </p>

  </div>
  <a href="#article">
    <div class="arrow">
      <img width="100%"src="<?php bloginfo('template_directory');?>/images/icons/arrow_down.png"/>
    </div>
  </a>
</header>


<?php if (is_category('pigshit')) : ?>
  <img src="<?php bloginfo('template_directory');?>/images/pages/PigshitLogo.jpg" />
<?php elseif (is_category('hardtalk')) : ?>
  <h2>Hard Talk</h2>
<?php elseif (is_category('hardvision')) : ?>
  <h2>Hard Vision</h2>
<?php elseif (is_category('audioagression')) : ?>
  <h2>Audio Agression</h2>
<?php elseif (is_category('guitarist2guitarist')) : ?>
  <h2>Guitarist 2 Guitarist</h2>
<?php elseif (is_category('hardfeatures')) : ?>
  <h2>Hard Features</h2>
<?php elseif (is_category('musicunderground')) : ?>
  <h2>Music Underground!</h2>
<?php elseif (is_category('metaltothecore')) : ?>
  <h2>Metal to the Core!</h2>
<?php elseif (is_category('hauntedhappenings')) : ?>
  <h2>Haunted Happenings</h2>
<?php else : ?>
  <h2>No Category</h2>
<?php endif; ?>
