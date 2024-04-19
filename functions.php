<?php
$header_default = array(
    'flex-width'=> false,
    'height' => 80,
);


function bare_initialize(){
    //Bare minimum support add or delete
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('dark-editor-style');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    // add_theme_support( 'custom-header', $header_default );
    

};

function bare_style() {
    //Bare minimal style support for your css
    wp_register_style( 'bare-theme', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bare-theme');
};

function bare_logo_custom() { //Custom logo setting, can be deactivate if you hardcode your header
    $default_logo = array(
        'heigh' => 80,
        'width'=> 220,
    ); 
    add_theme_support( 'custom-logo', $default_logo );
};

function menu_remove() { // Delete or comment to repop the admin menu
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page( 'tools.php' );  

};

function elementor_support( $elementor_theme_manager ) { //elementor location support if desired
    $elementor_theme_manager->register_location( 'page' );
};

//Bare initializer
add_action( 'after_setup_theme', 'bare_initialize' );
add_action( 'after_setup_theme', 'bare_logo_custom' );
add_action( 'wp_enqueue_scripts', 'bare_style' );
add_action( 'elementor/theme/register_locations','elementor_support'); //add elementor support for pages only
add_action( 'admin_menu', 'menu_remove' ); //disable post, comments and tools menu in admin menu

?>