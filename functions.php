<?php 

/*
* Theme Functions.
*
* @package azimoxxe
*/


function azimoxxe_theme_scripts() {
    // Register the styles and scripts first
    wp_register_style( 'main-css', get_template_directory_uri() . '/assets/css/main.css', [], filemtime(get_template_directory() . '/assets/css/main.css'), 'all');
    wp_register_style( 'style', get_stylesheet_uri() );
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [], filemtime(get_template_directory() . '/assets/js/main.js'), true);

    // Then Equeue the styles and scripts, this allows for conditional loading of styles or scripts
    wp_enqueue_style('main-css');
    wp_enqueue_style('style');
    wp_enqueue_script('main-js');


  }
  add_action( 'wp_enqueue_scripts', 'azimoxxe_theme_scripts' );
