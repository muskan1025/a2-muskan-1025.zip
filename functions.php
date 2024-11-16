<?php
function gotya_theme_enqueue_styles() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('bootstrap-responsive', get_template_directory_uri() . '/css/bootstrap-responsive.css');
    wp_enqueue_style('hover', get_template_directory_uri() . '/css/hover.css');
    wp_enqueue_style('icons', get_template_directory_uri() . '/css/icons.css');
    wp_enqueue_style('icons-color', get_template_directory_uri() . '/css/icons-color.css');
    wp_enqueue_style('parallax-slider', get_template_directory_uri() . '/css/parallax-slider.css');
    wp_enqueue_style('social-icons', get_template_directory_uri() . '/css/social-icons.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), null, true);
    wp_enqueue_script('carousel', get_template_directory_uri() . '/js/carousel.js', array(), null, true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), null, true);
    wp_enqueue_script('flexslider', get_template_directory_uri() . '/js/flexslider.js', array(), null, true);
    wp_enqueue_script('slider', get_template_directory_uri() . '/js/slider.js', array(), null, true);
    wp_enqueue_script('gmap', get_template_directory_uri() . '/js/jquery.gmap.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'gotya_theme_enqueue_styles');

function gotya_theme_setup() {
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'gotya-theme'),
    ));
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'gotya_theme_setup');
?>
