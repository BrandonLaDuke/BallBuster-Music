<?php get_header() ?>

<section class="author-page">
  <style>
  :root {
    --the-author-image: url(http://beta.ballbustermusic.com/wp-content/uploads/2018/06/Evil_Enough_album_cover.jpg)
  }
  </style>
  <div class="content-box author-head">
    <div class="the-author">
      <img src="<?php echo get_avatar_url(get_the_author_meta( 'ID' ), apply_filters( 'bbm4_author_bio_avatar_size', 200 ), 32 ); ?>">
      <a href="<?php echo $website ?>"><h1><?php $author = get_the_author(); echo $author; ?></h1></a>
    </div>
    <div class="the-author-bio">
      <p><?php the_author_meta( 'description' ); ?></p>
    </div>
    <div class="the-author-links">
      <?php
      $twitter = get_the_author_meta( 'twitter', $post->post_author );
      $facebook = get_the_author_meta( 'facebook', $post->post_author );
      $website = get_the_author_meta( 'user_url');?>
      <a class="author-twitter" href="https://twitter.com/<?php  echo $twitter ?>">
        <svg aria-labelledby="simpleicons-twitter-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-twitter-icon">Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
      </a>
      <a class="author-facebook" href="<?php echo $facebook ?>" rel="nofollow" target="_blank">
        <svg aria-labelledby="simpleicons-facebook-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-facebook-icon">Facebook icon</title><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg>
      </a>
      <a class="author-website" href="<?php echo $website ?>">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 15 15" style="enable-background:new 0 0 15 15;" xml:space="preserve">
        <g>
        	<path d="M14.982,7C14.736,3.256,11.744,0.263,8,0.017V0H7.5H7v0.017C3.256,0.263,0.263,3.256,0.017,7H0v0.5
        		V8h0.017C0.263,11.744,3.256,14.736,7,14.982V15h0.5H8v-0.018c3.744-0.246,6.736-3.238,6.982-6.982H15V7.5V7H14.982z M4.695,1.635
        		C4.212,2.277,3.811,3.082,3.519,4H2.021C2.673,2.983,3.599,2.16,4.695,1.635z M1.498,5h1.758C3.122,5.632,3.037,6.303,3.01,7H1.019
        		C1.072,6.296,1.238,5.623,1.498,5z M1.019,8H3.01c0.027,0.697,0.112,1.368,0.246,2H1.498C1.238,9.377,1.072,8.704,1.019,8z
        		 M2.021,11h1.497c0.292,0.918,0.693,1.723,1.177,2.365C3.599,12.84,2.673,12.018,2.021,11z M7,13.936
        		C5.972,13.661,5.087,12.557,4.55,11H7V13.936z M7,10H4.269C4.128,9.377,4.039,8.704,4.01,8H7V10z M7,7H4.01
        		c0.029-0.704,0.118-1.377,0.259-2H7V7z M7,4H4.55C5.087,2.443,5.972,1.339,7,1.065V4z M12.979,4h-1.496
        		c-0.293-0.918-0.693-1.723-1.178-2.365C11.4,2.16,12.327,2.983,12.979,4z M8,1.065C9.027,1.339,9.913,2.443,10.45,4H8V1.065z M8,5
        		h2.73c0.142,0.623,0.229,1.296,0.26,2H8V5z M8,8h2.99c-0.029,0.704-0.118,1.377-0.26,2H8V8z M8,13.936V11h2.45
        		C9.913,12.557,9.027,13.661,8,13.936z M10.305,13.365c0.483-0.643,0.885-1.447,1.178-2.365h1.496
        		C12.327,12.018,11.4,12.84,10.305,13.365z M13.502,10h-1.758c0.134-0.632,0.219-1.303,0.246-2h1.99
        		C13.928,8.704,13.762,9.377,13.502,10z M11.99,7c-0.027-0.697-0.112-1.368-0.246-2h1.758c0.26,0.623,0.426,1.296,0.479,2H11.99z"/>
        </g>
        </svg>
      </a>
      <!-- <a class="author-email" href="mailto:garypiggold@ballbustermusic.com">
        <svg aria-labelledby="simpleicons-gmail-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-gmail-icon">Gmail icon</title><path d="M24 4.5v15c0 .85-.65 1.5-1.5 1.5H21V7.387l-9 6.463-9-6.463V21H1.5C.649 21 0 20.35 0 19.5v-15c0-.425.162-.8.431-1.068C.7 3.16 1.076 3 1.5 3H2l10 7.25L22 3h.5c.425 0 .8.162 1.069.432.27.268.431.643.431 1.068z"/></svg>
      </a> -->

    </div>
  </div>
  <div class="content-box author-post-container">
    <div class="author-posts">
      <!-- Needs 30 posts per page -->
    <?php
  if ( have_posts() ) {
  while ( have_posts() ) {
   the_post(); ?>
   <a href="<?php the_permalink() ?>" class="suggested-content">
     <div class="suggested-content-img" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
     </div>
     <div class="suggested-content-txt">
       <span class="title"><?php the_title(); ?></span>
       <span>By <?php the_author(); ?></span>
       <span><?php the_date() ?></span>
     </div>
   </a>
    <?php } ?>
  </div>
</div>
</section>
  <section id="page-controls">
    <ul class="pager" style="text-align:center">
      <li class="previous btn"><?php previous_posts_link( '< Previous' ); ?></li>
      <li class="next btn"><?php next_posts_link( 'Next > ' ); ?></li>
    </div>
  </section>
<?php } else { ?>
  <h3><?php _e('Sorry, We could not find any posts by this author.'); ?></h3>
<?php } ?>



<?php get_footer(); ?>
