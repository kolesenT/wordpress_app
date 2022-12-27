<?php

add_action('init', 'register_events_post_type');
add_action('wp_enqueue_scripts', 'add_stylesheet');
add_action( 'after_setup_theme', 'bootstrap_setup' );
add_filter('show_admin_bar', '__return_false');
add_action( 'widgets_init', 'register_widgets' );

function add_stylesheet(): void {
    wp_enqueue_style(
        'bp',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'theme-style',
//        get_template_directory_uri() . '/style.css'
        get_stylesheet_uri(),
        [],
        '1.0',
        'all'
    );

    wp_enqueue_script(
        'bp',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'
    );
}

function bootstrap_setup(){
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('title-tag');

    register_nav_menus(array(
      'top'  => 'Верхнее меню', // идентификатор меню и название
    ));
}

function register_widgets(){
    register_sidebar([
        'name' => 'Сайдбар справа',
        'id' => 'right-sidebar',
        'before_widget' => null,
        'after_widget' => null,
                     ]);
}

function register_events_post_type():void
{
    register_post_type('event', [
        'label' => 'Events',
        'labels' => [
            'name' => 'Events',
            'singular_name' => 'event',
            'add_new' => 'add new event',

        ],
        'public' => true,
        'rewrite' => ['slug' => 'events'],
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => ['title', 'editor', 'thumbnail', 'comments'],
        'menu_icon' => 'dashicons-smiley',
    ]);

    register_taxonomy('event_category', ['event'], [
        'labels' => [
            'name' => 'Event Category',
            'singular_name' => 'event category',
            'add_new' => 'add new event category',
        ],
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'event-category'],
    ]);
}



