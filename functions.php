<?php
function bare_initialize(){
    //Bare minimum support add or delete
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('dark-editor-style');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

};

function bare_style() {
    //Bare minimal style support for your css
    wp_register_style( 'bare-theme', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bare-theme');
};

//Bare initializer
add_action( 'after_setup_theme', 'bare_initialize' );
add_action( 'wp_enqueue_scripts', 'bare_style' );

