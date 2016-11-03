<?php

// creating widets
function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget addclass">',
      'after_widget' => '</div>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the hompage');
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the hompage');
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the hompage');


// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

// activate google fonts
function tutsplus_add_google_fonts() {
  wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Shrikhand');
  wp_enqueue_style( 'googleFonts');
}
add_action( 'wp_enqueue_scripts', 'tutsplus_add_google_fonts' );

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
