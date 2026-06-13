<?php
function onstage_enqueue_styles() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600&display=swap', array(), null );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), null );
    wp_enqueue_style( 'onstage-style', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ) );
}
add_action( 'wp_enqueue_scripts', 'onstage_enqueue_styles' );

function onstage_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'onstage' ),
    ) );
}
add_action( 'after_setup_theme', 'onstage_theme_setup' );
