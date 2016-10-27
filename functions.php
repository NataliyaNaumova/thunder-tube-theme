<?php
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

/*menus*/
add_theme_support( 'menus' );

function register_theme_menus() {
    register_nav_menus(
      array(
        'primary' => __( 'Primary' )
      )
    );
}
add_action( 'init', 'register_theme_menus' );

/* add css*/
function theme_styles() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );
    wp_enqueue_style( 'jumbotron_css', get_template_directory_uri() . '/css/jumbotron.css' );
    wp_enqueue_style( 'main.css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

/*add java script*/
function theme_js() {
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery, tether'), '', true );
    wp_enqueue_script( 'ie10_js', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );
/*filters*/
/*add_filter( 'show_admin_bar', '__return_false' );*/

?>
