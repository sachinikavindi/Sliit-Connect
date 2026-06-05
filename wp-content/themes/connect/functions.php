<?php
function load_stylesheets() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome-pro.min.css', array(), '1.0', 'all');
    wp_enqueue_style('font-awesome');

    wp_register_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css', array(), '1.0', 'all');
    wp_enqueue_style('animate');

    wp_register_style('bexon-icons', get_template_directory_uri() . '/assets/css/bexon-icons.css', array(), '1.0', 'all');
    wp_enqueue_style('bexon-icons');

    wp_register_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0', 'all');
    wp_enqueue_style('nice-select');

    wp_register_style('swiper', get_template_directory_uri() . '/assets/css/swiper.min.css', array(), '1.0', 'all');
    wp_enqueue_style('swiper');

    wp_register_style('venobox', get_template_directory_uri() . '/assets/css/venobox.min.css', array(), '1.0', 'all');
    wp_enqueue_style('venobox');

    wp_register_style('odometer-theme-default', get_template_directory_uri() . '/assets/css/odometer-theme-default.css', array(), '1.0', 'all');
    wp_enqueue_style('odometer-theme-default');

    wp_register_style('meanmenu', get_template_directory_uri() . '/assets/css/meanmenu.css', array(), '1.0', 'all');
    wp_enqueue_style('meanmenu');

    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.4', 'all');
    wp_enqueue_style('main');

    wp_register_style('custom', get_template_directory_uri() . '/custom.css', array(), '1.0', 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascripts() {
    //load javascripts
    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), '1.0', true);
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap-bundle');

    wp_register_script('gsap', get_template_directory_uri() . '/assets/js/gsap.min.js', array(), '1.0', true);
    wp_enqueue_script('gsap');

    wp_register_script('gsap-scroll-to', get_template_directory_uri() . '/assets/js/gsap-scroll-to-plugin.min.js', array('gsap'), '1.0', true);
    wp_enqueue_script('gsap-scroll-to');

    wp_register_script('gsap-scroll-trigger', get_template_directory_uri() . '/assets/js/gsap-scroll-trigger.min.js', array('gsap'), '1.0', true);
    wp_enqueue_script('gsap-scroll-trigger');

    wp_register_script('gsap-split-text', get_template_directory_uri() . '/assets/js/gsap-split-text.min.js', array('gsap'), '1.0', true);
    wp_enqueue_script('gsap-split-text');

    wp_register_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.min.js', array(), '1.0', true);
    wp_enqueue_script('smooth-scroll');

    wp_register_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('nice-select');

    wp_register_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '1.0', true);
    wp_enqueue_script('swiper');

    wp_register_script('odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array(), '1.0', true);
    wp_enqueue_script('odometer');

    wp_register_script('venobox', get_template_directory_uri() . '/assets/js/venobox.min.js', array(), '1.0', true);
    wp_enqueue_script('venobox');

    wp_register_script('appear', get_template_directory_uri() . '/assets/js/appear.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('appear');

    wp_register_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0', true);
    wp_enqueue_script('wow');

    wp_register_script('meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array('jquery'), '1.0', true);
    wp_enqueue_script('meanmenu');

    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'gsap', 'swiper'), '1.0', true);
    wp_enqueue_script('main');

    wp_register_script('custom', get_template_directory_uri() . '/custom.js', array('jquery'), '1.0', true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_javascripts');
