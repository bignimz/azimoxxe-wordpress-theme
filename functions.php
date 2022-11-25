<?php 

/*
* Theme Functions.
*
* @package azimoxe
*/


function azimoxe_theme_scripts() {

  // Register the styles and scripts first
  wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', [], 'false', 'all');
  wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'), 'all');
  wp_register_style( 'style', get_stylesheet_uri() );
  wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap.bundle.min.js', ['jquery'], 'false', true);
  wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);


  // Then Equeue the styles and scripts, this allows for conditional loading of styles or scripts
  wp_enqueue_style('bootstrap-css');
  wp_enqueue_script('bootstrap-js');
  wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/d2acf3efbe.js');
  wp_enqueue_style('main-css');
  wp_enqueue_style('style');
  wp_enqueue_script('main-js');

  
}
add_action( 'wp_enqueue_scripts', 'azimoxe_theme_scripts' );

// Main Configuration Settings
function azimoxe_config() {
  // Register Nav menus
  register_nav_menus(
    array(
      "primary_menu" => "Primary Menu",
      "footer-menu" => "Footer Menu",
    )
  );

  // Custom Page Header Image
  $args = array(
    'height'   => 225,
    'width'  => 1920
  );

  add_theme_support('custom-header', $args);
  // Add Post Featured Image
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats', array('video', 'image'));

  // Custom EXcerpt length
  function azimoxe_custom_excerpt_length( $length ) {
    return 10;
  }
  add_filter( 'excerpt_length', 'azimoxe_custom_excerpt_length', 999 );

}
add_action('after_setup_theme', 'azimoxe_config', 0);


// Setup Widget Areas
function azimoxe_widgets_init() {
  register_sidebar([
    'name'          => esc_html__('Main Sidebar', 'azimoxxe'),
    'id'            => 'main-sidebar',
    'description'   => esc_html__('Add widgets to the main sidebar here', 'azimoxxe'),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ]);
  register_sidebar([
    'name'          => esc_html__('Page Sidebar', 'azimoxxe'),
    'id'            => 'page-sidebar',
    'description'   => esc_html__('Add widgets to the page sidebar here', 'azimoxxe'),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ]);

}
add_action ('widgets_init', 'azimoxe_widgets_init');