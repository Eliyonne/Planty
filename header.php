<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Do not change! For now... -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
    <div class="main-header-container">
        <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }    
        ?>
        <div id="menu-container">
            <?php wp_nav_menu( array (
                'menu' => 'Main-menu',
                'theme_location' => 'header-menu',
                'menu_class'=> 'main_menu_custom',
                'menu_id'=> 'Main_menu',
                'container'=> 'ul',
            )); ?>
            <?php wp_nav_menu( array (
                'theme_location' => 'header-extra',
                'menu_class'=> 'main_menu_custom2',
                'menu_id'=> 'Main_menu',
                'container'=> 'ul',
            )); ?>
        </div>
    </div>
    </header>
