<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <div class="sidebar-module" style="padding-top:10px">
      <!-- BallBuster -->
      <ins class="adsbygoogle"
           style="display:block"
           data-ad-client="ca-pub-8458877549325827"
           data-ad-slot="9908918197"
           data-ad-format="auto"></ins>
    </div>
    <div class="sidebar-module">
      <h4>Also on BallBuster Music</h4>
      <div class="other-posts">
        <?php
          if ( have_posts() ) : while ( have_posts() ) : the_post();

            get_template_part( 'content', get_post_format() );

          endwhile;endif;
        ?>
      </div>
    </div>
    <div class="sidebar-module">
      <h4>Archives</h4>
      <ol class="list-unstyled">
      	<?php wp_get_archives( 'type=monthly' ); ?>
      </ol>
    </div>
    <div class="sidebar-module">
      <h4>Elsewhere</h4>
      <ol class="list-unstyled">
        <li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
      </ol>
    </div>
  </div><!-- /.blog-sidebar -->
