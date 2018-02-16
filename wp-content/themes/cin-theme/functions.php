<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles', PHP_INT_MAX );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'onepage-parallax', get_template_directory_uri() . '/style.css' );

    wp_enqueue_style('cin-styles', get_stylesheet_directory_uri() . '/css/styles.css' , array( 'onepage-parallax' )); 
    wp_enqueue_script('cin-main-script', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), null, true);

}

function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Josefin+Sans|Raleway');
            wp_enqueue_style( 'googleFonts');
        }
    add_action('wp_print_styles', 'load_fonts');


//add sections to customizer
function cin_customize_register( $wp_customize ) 
{
   $wp_customize->add_section('button_panel', array(
  'title'          => 'Button Text Section'
 ));
    //adding setting for header button text area
    $wp_customize->add_setting('button_1', array(
     'default'        => '',
     ));
    $wp_customize->add_control('button_1', array(
     'label'   => 'Button 1 Text Here',
      'section' => 'button_panel',
     'type'    => 'textarea',
    ));

     $wp_customize->add_setting( 'dropdownpages-1',
       array(
          //'default' => '1548',
          'transport' => 'refresh',
          'sanitize_callback' => 'absint'
       )
    );
 
    $wp_customize->add_control( 'dropdownpages-1',
       array(
          'label' => __( 'Link to page' ),
          'description' => esc_html__( 'Select a page that the Button 1 will link to' ),
          'section' => 'button_panel',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type' => 'dropdown-pages',
       )
    );



    //adding setting for header button text area
    $wp_customize->add_setting('button_2', array(
     'default'        => '',
     ));
    $wp_customize->add_control('button_2', array(
     'label'   => 'Button 2 Text Here',
      'section' => 'button_panel',
     'type'    => 'textarea',
    ));

    $wp_customize->add_setting( 'dropdownpages-2',
       array(
          //'default' => '1548',
          'transport' => 'refresh',
          'sanitize_callback' => 'absint'
       )
    );
 
    $wp_customize->add_control( 'dropdownpages-2',
       array(
          'label' => __( 'Link to page' ),
          'description' => esc_html__( 'Select a page that the Button 2 will link to' ),
          'section' => 'button_panel',
          'priority' => 10, // Optional. Order priority to load the control. Default: 10
          'type' => 'dropdown-pages',
       )
    );

   
}
add_action( 'customize_register', 'cin_customize_register');





?>