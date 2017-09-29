<?php
add_theme_support('post-thumbnails');

function whiskey_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    register_nav_menus( array(
        'primary'  => __('Primary Menu', 'whiskey'),
        'secondary_bottom'  => __('Secondary Menu - Bottom', 'whiskey'),
        'bottom' => __('Bottom Menu', 'whiskey'),
        'primary_pipes'  => __('Primary Pipes Menu', 'whiskey'),
    ));

    register_sidebar(array(
        'name' => __('Right Widget Area', 'whiskey' ),
        'id' => 'right-widget-area',
        'description' => __( 'The right widget area', 'whiskey' ),
        'before_widget' => '<div class="sidebox">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name' => __('Bottom Widget Area', 'whiskey' ),
        'id' => 'bottom-widget-area',
        'description' => __( 'The bottom widget area', 'whiskey' ),
        'before_widget' => '<div class="bottom-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>',
    ));
}

add_action('after_setup_theme', 'whiskey_setup');

function whiskey_load_assets() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('whiskey', 'path/to/js', array('jquery'), '1.0.0', true);

    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700');
    wp_enqueue_style('whiskey', 'path/to/css');
}
add_action('wp_enqueue_scripts', 'whiskey_load_assets');

if (!isset($content_width)) {
    $content_width = 1024;
}
