<?php

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





