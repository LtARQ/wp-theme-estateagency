<?php
// Register all stylesheets and Scripts of the theme
function re_add_scripts(){
    // register Stylesheets
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700',[],'','all');
    wp_register_style('stylesheet_animate', get_template_directory_uri() . '/assets/vendor/animate/animate.min.css',[],'','all');
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css',[],'','all');        
    wp_register_style('bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css',[],'','all');
    wp_register_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css',[],'','all');
    wp_register_style('stylesheet_main', get_template_directory_uri() . '/assets/css/style.css',[],'','all');
    // Register Scripts
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [],false,true);
    wp_register_script('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', [],false,true);
    wp_register_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', [],false,true);
    wp_register_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', [],false,true);
    // Enqueue script
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('swiper');
    wp_enqueue_script('validate');
    wp_enqueue_script('mainjs');
    // Enqueue Style Sheets
    wp_enqueue_style('google-fonts');
    wp_enqueue_style('stylesheet_animate');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('bootstrap-icons');
    wp_enqueue_style('swiper');
    wp_enqueue_style('stylesheet_main');
}
// hook for add script in core script
add_action('wp_enqueue_scripts', 're_add_scripts');