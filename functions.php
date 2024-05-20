<?php

function bare_initialize(){ //bare support
    //Bare minimum support add or delete
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('dark-editor-style');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
   
    

};

function bare_style() {
    //Bare minimal style support for your css
    wp_register_style('Syne-police', 'https://fonts.googleapis.com/css2?family=Syne:wght@400..800&display=swap');
    wp_register_style( 'bare-theme', get_template_directory_uri() . '/style.css', $deps = array(), $ver = '0.1');
    wp_enqueue_style( 'bare-theme');
    wp_enqueue_style( 'Syne-police' );
};

function bare_logo_custom() { //Custom logo setting, can be deactivate if you hardcode your header
    $default_logo = array(
        'heigh' => 80,
        'width'=> 220,
    ); 
    add_theme_support( 'custom-logo', $default_logo );
};

function bare_header_custom() {
    $default_header_custom = array(
        'width'=> '1100',
        'height'=> '240',
        'flex-width'=> 'false',
        'flex_height'=> 'true',
    );
    add_theme_support('custom-header', $default_header_custom );
};

function menu_remove() { // Delete or comment to repop the admin menu
    remove_menu_page( 'edit.php' );
    remove_menu_page( 'edit-comments.php' );
    remove_menu_page( 'tools.php' );  

};

function elementor_support( $elementor_theme_manager ) { //elementor location support if desired
    $elementor_theme_manager->register_location( 'page' );
};

function bare_menu_init() {
    // register_nav_menu('header-menu', 'Header Menu');
    register_nav_menus(  array(
        'header-menu' => 'Header Menu',
        'header-extra' => 'Extra Menu',
      )
    );


};

function add_admin_button( $items, $args) { //add the admin link to the menu if you're connected on the admin part
    if (is_user_logged_in() && $args->theme_location == 'header-menu') {
        $items .= '<li class="menu-item"><a href="/wp-admin">Admin</a></li>';
    }
    return $items;
};

function myfunc() {
    // $menuitems = wp_get_nav_menu_items($menu->"Main_menu", array( 'order' => 'ASC' ));
    var_dump( $menuitems );
    die;
};

//Bare initializer
add_action( 'after_setup_theme', 'bare_initialize' );
add_action( 'after_setup_theme', 'bare_logo_custom' );
add_action( 'after_setup_theme', 'bare_header_custom');
add_action( 'wp_enqueue_scripts', 'bare_style' );
add_action( 'elementor/theme/register_locations','elementor_support'); //add elementor support for pages only
add_action( 'admin_menu', 'menu_remove' ); //disable post, comments and tools menu in admin menu
add_action( 'init','bare_menu_init'); //register function for header menu
add_filter( 'wp_nav_menu_items', 'add_admin_button', 10, 2);
// add_filter( 'wp_nav_menu_items', 'myfunc');

?>