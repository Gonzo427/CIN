<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', PHP_INT_MAX );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'onepage-parallax', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style('cin-styles', get_stylesheet_directory_uri() . '/css/styles.css' , array( 'onepage-parallax' )); 
    wp_enqueue_script('cin-main-script', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), null, true);

}

function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Josefin+Sans');
            wp_enqueue_style( 'googleFonts');
        }
    add_action('wp_print_styles', 'load_fonts');

?>