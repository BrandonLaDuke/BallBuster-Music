<?php
// WordPress Titles
add_theme_support( 'title-tag' );
// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Style Login
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

//Remove Author Filter
remove_filter('pre_user_description', 'wp_filter_kses');

//Nav Menus
register_nav_menus(array(
  'primary' => __( 'Primary Menu' )
));
