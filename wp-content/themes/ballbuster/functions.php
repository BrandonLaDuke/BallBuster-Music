<?php
// Add scripts and stylesheets
function ballbustermusic_scripts() {
	// wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	// wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/blog.css' );
	wp_enqueue_script( 'vibrant', get_template_directory_uri() . '/bower_components/vibrant/dist/vibrant.js');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'ballbustermusic_scripts' );

// Add Google Fonts
function ballbustermusic_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}

add_action('wp_print_styles', 'ballbustermusic_google_fonts');

// WordPress Titles
add_theme_support( 'title-tag' );

// Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );
           submit_button();
       ?>
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'All Settings', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );

  register_setting('section', 'twitter');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Random posts
function wpb_rand_posts() {

$args = array(
	'post_type' => 'post',
	'orderby'	=> 'rand',
	'posts_per_page' => 5,
	);

$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) {

$string .= '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		$string .= '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
	}
	$string .= '</ul>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {

$string .= 'no posts found';
}

return $string;
}

add_shortcode('wpb-random-posts','wpb_rand_posts');
add_filter('widget-text', 'do_shortcode');

// Custom Post Type
function create_my_custom_post() {
	register_post_type( 'video-post',
			array(
			'labels' => array(
					'name' => __( 'Video Post' ),
					'singular_name' => __( 'Video Post' ),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action( 'init', 'create_my_custom_post' );



function create_post_your_post() {
	register_post_type( 'video_post',
		array(
			'labels'       => array(
				'name'       => __( 'Video Post' ),
			),
			'public'       => true,
			'hierarchical' => true,
			'has_archive'  => true,
			'supports'     => array(
				'title',
				'editor',
				'excerpt',
				'thumbnail',
			),
			'taxonomies'   => array(
				'post_tag',
				'category',
			)
		)
	);
	register_taxonomy_for_object_type( 'category', 'your_post' );
	register_taxonomy_for_object_type( 'post_tag', 'your_post' );
}
add_action( 'init', 'create_post_your_post' );

function ballbustermusic_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/home/bbm_login.svg);
						height:65px;
						width:320px;
						background-size: 320px 65px;
						background-repeat: no-repeat;
        		padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'ballbustermusic_login_logo' );

function bbm_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/css/style-login.css' );
    wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/js/style-login.js' );
}
add_action( 'login_enqueue_scripts', 'bbm_login_stylesheet' );
