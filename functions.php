<?php
/*
*   @package realestate
*/

// styles and Scripts Registrations
require 'inc/re_scripts_links.php';
// Menus Registration
register_nav_menus(
    array(
        'primary_menu'=>'Top Menus',
        'sub_menu'=> 'Footer Menu'
)); 

function re_custom_theme_setup() {
    // Custome logo
    $defaults = array(
        'height'               => 86,
        'width'                => 100,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );

    // Add theme supports for title
    add_theme_support('title-tag');

    // custom background
    add_theme_support('custom-background');
    //custom thumbnalis or feature image option in the add-post section
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('html5',['search-form','comment-form', 'comment-list','gallery','caption','script','style']);
    //add custom header on appearence section 
    add_theme_support('custom-header');
    add_theme_support('custom-line-height');

    add_editor_style();
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
}
add_action( 'after_setup_theme', 're_custom_theme_setup' );