<?php

function load_stylesheets(){

wp_register_style('main', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
wp_enqueue_style('main');

wp_register_style('animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), 1, 'all');
wp_enqueue_style('animate');

wp_register_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
wp_enqueue_style('bootstrap');

wp_register_style('bootstrapi', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', array(), 1, 'all');
wp_enqueue_style('bootstrapi');

wp_register_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css', array(), 1, 'all');
wp_enqueue_style('boxicons');

wp_register_style('swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', array(), 1, 'all');
wp_enqueue_style('swiper');

wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
wp_enqueue_style('custom');

}
add_action('wp_enqueue_scripts','load_stylesheets');



//Menu Support
add_theme_support('menus');

//register Menus



function enqueue_ns_events_scripts() {
    
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-3.6.4.min.js', array(), null, false);
    wp_enqueue_script('vanill', get_template_directory_uri() . '/assets/vendor/purecounter/purecounter_vanilla.js', array(), null, false);
    wp_enqueue_script('bootstrapbun', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), null, false);
    wp_enqueue_script('isotopep', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array(), null, false);
    wp_enqueue_script('swiperbee', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', array(), null, false);
    wp_enqueue_script('mainjss', get_template_directory_uri() . '/assets/js/main.js', array(), null, false);

}

add_action( 'wp_enqueue_scripts', 'enqueue_ns_events_scripts');


